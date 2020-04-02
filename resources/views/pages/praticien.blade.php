@extends('layouts.app', ['title' => 'Connexion'])

@section('content')

<section class="engine"><a href="https://mobirise.info/o"></a></section><section class="section-table cid-rInW7shYKf" id="table1-b">

  
  
  <div class="container container-table">

      <div class="table-wrapper">
        <div class="container">
        
        <form action="{{route('praticien')}}" method="GET" class="mbr-form form-with-styler" >
          <div class="row search">
            	<div class="col-md-2"></div>
            	
            	 <div class="col-md-3">
                    <div class="recherche">
                      <label class="searchInfo mbr-fonts-style display-7">Nom:</label>
                      	<input id="nom" type="text" class="form-control" name="nom">
                    </div>
                </div>
            	
            	
                <div class="col-md-3">
                    <div class="recherche">
                      <label class="searchInfo mbr-fonts-style display-7">Ville:</label>
                      <select class="form-control" name="ville" id="ville" required autocomplete="ville" autofocus>
                      <option value="...">...</option>
				      	@foreach ($test as $praticien)
				      			<option value="{{$praticien->PRA_VILLE}}">{{$praticien->PRA_VILLE}} </option>
				      	@endforeach 
				      		
                          
				      </select>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="recherche">
                      <label class="searchInfo mbr-fonts-style display-7">Metier:</label>
                      <select class="form-control" name="profession" id="profession" required autocomplete="profession" autofocus>
                      	<option value="...">...</option>
                      	{{$praticienPreced = "" }}
				      	
				      	@foreach ($test as $praticien)
				      			
				      			@if ($praticienPreced != $praticien->TYP_LIBELLE)
				      			
				      				<option value="{{$praticien->TYP_LIBELLE}}">{{$praticien->TYP_LIBELLE}} </option>
				      		
				      				{{$praticienPreced = $praticien->TYP_LIBELLE }}
				      				
				      			@endif
				      		
				      	@endforeach 
                          
				      </select>
				      
				   
				      <div class="buttonValider">
                            <button type="submit" class="btn btn-primary btn-form display-4">VALIDER</button>
                     </div>
                </div>
                    
                      

              </div>
                
         </form>
        
         @if(Session::has('aucunRes'))
        	<p class="alert alert-danger">{{ Session::get('aucunRes') }}</p>
         @endif
		
        <div class="container scroll">
        <br>
        <br>
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">

                  
              <th class="head-item mbr-fonts-style display-7">NOM</th><th class="head-item mbr-fonts-style display-7">PRENOM</th><th class="head-item mbr-fonts-style display-7">ADRESSE</th><th class="head-item mbr-fonts-style display-7">CODE POSTAL</th><th class="head-item mbr-fonts-style display-7">VILLE</th><th class="head-item mbr-fonts-style display-7">METIER</th></thead>

            <tbody>
           
				@forelse ($lesPraticien as $praticien)
                   <tr> 
    
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_NOM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_PRENOM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_ADRESSE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_CP}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_VILLE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->TYP_LIBELLE}}</td>
                      
                   </tr>
                   
               @empty 
               		@foreach($test as $praticien)
               		<tr> 
    
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_NOM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_PRENOM}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_ADRESSE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_CP}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->PRA_VILLE}}</td>
                      <td class="body-item mbr-fonts-style display-7">{{$praticien->TYP_LIBELLE}}</td>
                      
                   </tr>
                   @endforeach
               
               @endforelse 
                             
           	</tbody>
         </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>


  <script src="{{ asset('web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('popper/popper.min.js') }}"></script>

  <script src="{{ asset('tether/tether.min.js') }}"></script>
  <script src="{{ asset('smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ asset('touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ asset('datatables/jquery.data-tables.min.js') }}"></script>
                                          
                      
  

@stop