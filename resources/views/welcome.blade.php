@extends('layouts.app')


@section('headerAccueil')
  	<style type="text/css">
 
         .navbar {
             background-image: linear-gradient(to right, rgba(55, 219, 219,0), rgba(55, 219, 219,0), rgba(55, 219, 219,0), rgba(55, 219, 219,0));
            
        }
    
    </style>


  <!-- Promo Block -->
      <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white" style="background-image: url({{asset('template/img-temp/1920x1080/img0.jpg')}});">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="text-center">
                <p class="text-uppercase u-letter-spacing-sm mb-0">Galaxy Swiss Bourdin (GSB)</p>
                <h1 class="display-sm-4 display-lg-3 mb-3">Nous sommes  <span class="js-display-typing"></span></h1>
                <a class="btn btn-primary" href="services.html">
                  Learn More <i class="fas fa-arrow-alt-circle-right ml-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Promo Content -->
      </section>
      
  
         <script>
      $(document).on('ready', function () {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
          strings: [
            "l'industrie pharmaceutique",
            "Organisés",
            "Expert"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 2500
        });
      }); 
      </script>

@stop

@section('content')

	


	<section class="u-content-space">
        <div class="container">
          
          <!-- Row -->
          <div class="row text-center">
            <div class="col-lg-6 mb-8 mb-lg-2">
              <div class="display-4 text-primary mb-2">
                
              </div>
              <h4 class="h5">Medicament</h4>
              <p>Comme tout médicament, un produit a des effets thérapeutiques et des contre-indications. 
              Découvrez-les ...
              </p>
              <button class="btn-hover color-9">
                   <a href="{{ route('medicament') }}">
                    Voir plus...
                  </a>
              </button>
             
            </div>
	
		<div class="col-lg-6 mb-8 mb-lg-2">
              <div class="display-4 text-primary mb-2">
                
              </div>
              <h4 class="h5">Praticien</h4>
              <p>Les praticiens sont le cœur de cible des laboratoires. Aussi font-ils l’objet d’une attention toute particulière. 
              	Découvrez-les ...
              </p>
              <button class="btn-hover color-9">
                  <a href="{{ route('praticien') }}">
                    Voir plus...
                  </a>
              </button>
             
            </div>
           </div>
          </div>
      </section>
	
	

@stop

@section('contentOff')

<section class="u-content-space">
        <div class="container">
          <
          <!-- Row -->
          <div class="row text-center">
            <div class="col-lg-6 mb-8 mb-lg-2">
              <div class="display-4 text-primary mb-2">
                
              </div>
              <h4 class="h5">Visiteur</h4>
              <p>Les visiteurs constituent la base de la partie commerciale. Ils fournissent les rapports de visite, desinformations sur les médecins (décès, déménagements...), et des états de frais pour lesquels ilsreçoivent des remboursements (non géré)
              </p>
              <button class="btn-hover color-9">
                   <a href="{{ route('visiteur') }}">
                    Voir plus...
                  </a>
              </button>
             
            </div>
	
		<div class="col-lg-6 mb-8 mb-lg-2">
              <div class="display-4 text-primary mb-2">
                
              </div>
              <h4 class="h5">Compte-rendu</h4>
              <p>Les visiteurs réalise les comptes rendus de visite et les activités complémentaires (organisation de cocktail, de réunionsd’information, de rencontres entre praticiens et spécialistes...
              <br>Découvrez les...
              </p>
              <button class="btn-hover color-9">
                   <a href="{{ route('rapportvisite') }}">
                    Voir plus...
                  </a>
              </button>
             
            </div>
           </div>
          </div>
      </section>
@stop


