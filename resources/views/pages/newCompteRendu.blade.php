@extends('layouts.app')

@section('content')

<script type="text/javascript">

        		
         		function ajouterLigne()
        	{
         		var arrayQte= [];
         		var arrayMedoc = [];
         		var tableau = document.getElementById("tableau");
         	    var listemed = document.getElementById("listemed");
         	    var i=0;
        	    var nbqte=0;
        	    var nbNomMed=0;

				
        		
        		
        		var array = listemed.value.split(" ");
        
        		 for(var test in array) {

					
            		 
        			
        				if( i % 2 ==1) {
        					
        					arrayQte[nbqte]=array[test];
        					nbqte +=1;
        
        				} 
        				if(i % 2 ==0) {

        					
        					arrayMedoc[nbqte]=array[test];
        					nbNomMed +=1;					
        				}
        
        				i= i + 1;
        		}	

        		
        		 var sizeMedoc = arrayMedoc.length-2;
				 var verif=0;
        		 var dernierMedoc = document.getElementById("medicament").value;
        		 
  				for (var medoc in arrayMedoc) {
  					
  					
  					
 					if(dernierMedoc == arrayMedoc[medoc]) {
 						
 						verif=1;
 					} 

 					
  				}
				
 
				

  	       		 if (verif == 1){

  	       			$("#exampleModal").modal()
  	  	       			 
  	       			document.getElementById('alert').style.display='block';
      	       		
  	       		 } else {

  	       			listemed.value=listemed.value+document.getElementById("medicament").value+" "+document.getElementById('qte').value+" ";
        		
      	       		var ligne = tableau.insertRow(-1);//on a ajout� une ligne
    		        
            		var colonne1 = ligne.insertCell(0);//on a une ajout� une cellule
            		colonne1.innerHTML += document.getElementById("medicament").value;//on y met le contenu de titre
            
            		var colonne2 = ligne.insertCell(1);//on ajoute la seconde cellule
            		colonne2.innerHTML += document.getElementById("qte").value;
    
  	       		 }

        	}
        
        	function supprimerLigne(num)
        	{
        		var tableau = document.getElementById("tableau");
        		var tableRows = tableau.getElementsByTagName('tr');
        		var rowCount = tableRows.length;
        		var listemed = document.getElementById("listemed");
				
        		
        		
        		
        		for(var x = rowCount-1; x>0; x--){
        			tableau.deleteRow(x);
        		}

        		listemed.value="";
        		
        	}

	

	


</script>




<section class="engine"><a href="https://mobirise.info/o"></a></section><section class="section-table cid-rInW7shYKf" id="table1-b">

  
  
  <div class="container container-table">
  	 
                <!---Formbuilder Form--->
                <form action="{{ route('saveRapport') }}" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="DXUDGsYlvsgDmdhE14W1BM5xPqzYW2b6anEg+q82Nyc6HHPEwlNsxyLYLNRMI8iL7Lg4For0axo2JDsOV8JaFCDeAG1oNIi59mZCfieiEvKb6QuYHZRpMjg5tzP6SmAu">
                     @csrf
                    	<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Practicien :') }}</label>

                            <div class="col-md-6">
                                <select name="practicien">
                                	@foreach ($lesPraticien as $pract)
                                		<option value="{{$pract->PRA_NOM}}">{{$pract->PRA_NOM}} </option>
                                	@endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Date rapport :') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('name') is-invalid @enderror" name="date" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Motif Visite :') }}</label>

                            <div class="col-md-6">
                                <input id="motifvisite" type="text" class="form-control @error('name') is-invalid @enderror" name="motifvisite" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Bilan :	') }}</label>

                            <div class="col-md-6">
                               <textarea class="form-control" id="bilan" name="bilan"/></textarea>

                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group row">
                                
                                <table id="tableau" class="table isSearch" cellspacing="0" cellpadding="2">
        
        
        				      <tr id="tr"><td>Médicament
        				      <select class="form-control" id="medicament">
        				      	@foreach ($lesMedicaments as $medoc)
                                        		<option value="{{$medoc->MED_DEPOTLEGAL}}">{{$medoc->MED_DEPOTLEGAL}} </option>
                                @endforeach
        				      </select>
        				      </td>
        				      </td><td>quantite: 
									<select class="form-control" id="qte">
        				      	 	@for ($i = 1; $i <= 13; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
        				      </select>
							</td>
        				      
        				      <td>
        				      <br>
        				      <a id="Ajouter" class="btn btn-primary btn-form display-4" onclick="ajouterLigne();" >Ajouter</a>
        				      
        				      </td>
        				      <td><br><a id="deletes" class="btn btn-primary btn-form display-4" onclick="supprimerLigne();" >Supprimer</a></td></tr>
        
        				       <input id="listemed" name="listemed" type="hidden">
        				       
        				       <input id="visiteur" name="visiteur" value="" type="hidden">
        
        				  	</table>
						
					</div>
                        
                    	<div id="alert" style="display:none;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" style="display:none;" data-toggle="modal" data-target="#exampleModal">
                              Launch demo modal
                            </button>
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Médicament déja ajouté</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    
                                    Les médicaments ne peuvent pas être dupliqués.<br> Veuillez en ajouter un autre différent.           
                                    </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                    	
                    	
                    	
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" class="btn btn-primary btn-form display-4">VALIDER</button>
                        </div>
                    </div>
                    
                </form>
            </div>
  
  
 
  
</section>


@stop