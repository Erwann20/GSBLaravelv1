@extends('layouts.app', ['title' => 'Connexion'])

@section('content')
<script type="text/javascript">
     function verif() {
    		var passwd = document.getElementById("password");
     	    var Vpasswd = document.getElementById("verifPassword");
			var mess = document.getElementById("mess");
			
     	   	
     	   if(passwd.value == Vpasswd.value){
     	     	mess.style.display='none';
   				document.getElementById('buttonValid').style.display='block';
   			}	 
    		if(passwd.value != Vpasswd.value) {
    			mess.style.display='block';
    			document.getElementById('buttonValid').style.display='none';
    		} 
    		   
    	}
</script>

<section class="engine"><a href="https://mobirise.info/o"></a></section><section class="section-table cid-rInW7shYKf" id="table1-b">

  
  
  <div class="container container-table">
  @if(Session::has('mdpVerif'))
	<p class="alert alert-danger">{{ Session::get('mdpVerif') }}</p>
  @endif

  @if(Session::has('mdpSuccess'))
	<p class="alert alert-success">{{ Session::get('mdpSuccess') }}</p>
  @endif
  
	@foreach ($lesVisiteurs as $visiteur)

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Modifier</button>
    
    
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modification du profil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('modify') }}">
    		@csrf
              <div class="form-group row">
                   <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                   <div class="col-md-6">
                      <input id="nom" type="text" class="form-control @error('name') is-invalid @enderror" name="nom" value="{{ $visiteur->VIS_NOM }}" required autocomplete="name" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                   <div class="col-md-6">
                      <input id="prenom" type="text" class="form-control @error('name') is-invalid @enderror" name="prenom" value="{{ $visiteur->Vis_PRENOM }}" required autocomplete="name" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                   <div class="col-md-6">
                      <input id="adresse" type="text" class="form-control @error('name') is-invalid @enderror" name="adresse" value="{{ $visiteur->VIS_ADRESSE }}" required autocomplete="adresse" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>

                   <div class="col-md-6">
                      <input id="cp" type="text" class="form-control @error('name') is-invalid @enderror" name="cp" value="{{ $visiteur->VIS_CP }}" required autocomplete="cp" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                   <div class="col-md-6">
                      <input id="ville" type="text" class="form-control @error('name') is-invalid @enderror" name="ville" value="{{ $visiteur->VIS_VILLE }}" required autocomplete="ville" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Identifiant') }}</label>

                   <div class="col-md-6">
                      <input id="id" type="text" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ $user->name}}" required autocomplete="id" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                   <div class="col-md-6">
                      <input type="password" class="form-control" id="password" onblur="verif()" name="password" value=""  />
						
                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe (Confirmation)') }}</label>

                   <div class="col-md-6">
                      <input type="password" class="form-control"  id="verifPassword" onblur="verif()" name="verifPassword" value=""  />
						
                   </div>
                   
                    <span id="mess" style="color:red; display:none;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                    
                    	Les mots de passe ne sont pas identique</span>
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="buttonValid" style="display:block;"  class="btn btn-primary">Valider</button></a>
          	</div>
              
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
    
    
    <div class="form-group row">
                   <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                   <div class="col-md-6">
                      <input disabled id="nom" type="text" class="form-control @error('name') is-invalid @enderror" name="nom" value="{{ $visiteur->VIS_NOM }}" required autocomplete="name" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                   <div class="col-md-6">
                      <input disabled id="prenom" type="text" class="form-control @error('name') is-invalid @enderror" name="prenom" value="{{ $visiteur->Vis_PRENOM }}" required autocomplete="name" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                   <div class="col-md-6">
                      <input disabled id="adresse" type="text" class="form-control @error('name') is-invalid @enderror" name="adresse" value="{{ $visiteur->VIS_ADRESSE }}" required autocomplete="adresse" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Code Postal') }}</label>

                   <div class="col-md-6">
                      <input disabled id="cp" type="text" class="form-control @error('name') is-invalid @enderror" name="cp" value="{{ $visiteur->VIS_CP }}" required autocomplete="cp" autofocus>

                   </div>
              </div>
              
              <div class="form-group row">
                   <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                   <div class="col-md-6">
                      <input disabled id="ville" type="text" class="form-control @error('name') is-invalid @enderror" name="ville" value="{{ $visiteur->VIS_VILLE }}" required autocomplete="ville" autofocus>

                   </div>
              </div>
              
           
    
    
    
    
    
    
    @endforeach
    
  </div>
  </section>
@stop