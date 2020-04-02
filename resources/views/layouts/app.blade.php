<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>GSB</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Stream - UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendors/bootstrap/css/bootstrap.css') }}">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendors/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/vendors/slick-carousel/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/datatables/data-tables.bootstrap4.min.css') }}">
	
	<link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css">
	
	
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/styles.css') }}">

    <style type="text/css">
        .dropdown-menu {
             border: 0px solid black;
        }
        
         .navbar {
                
             background-image: linear-gradient(to right, rgba(55, 219, 219,0.95), #4481eb, #04befe, #3f86ed);
        }
      
    
    </style>
  </head>
  <!-- End Head -->

  <body>
  
  
  
    <!-- Header -->
    <header role="header">
      <!-- Navbar -->
      <nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-transparent navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            GSB
          </a>

          <button class="navbar-toggler" type="button"
                  data-toggle="collapse"
                  data-target="#navbarTogglerDemo"

                  aria-controls="navbarTogglerDemo"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              
              @guest
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                        <a
                            class="nav-link"
                            href="{{ route('medicament') }}"> Medicament</a></li>
                            
                            <li class="nav-item  mr-4 mb-2 mb-lg-0"><a
                            class="nav-link"
                            href="{{ route('praticien') }}"> Praticiens</a></li>
                        	
                            <li class="nav-item  mr-4 mb-2 mb-lg-0">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                            </li>
                            

                        @else
                        <li class="nav-item">
                            <li class="nav-item"><a
                            class="nav-link"
                            href="{{ route('medicament') }}"> Medicaments</a></li>
                            
                            <li class="nav-item"><a
                            class="nav-link"
                            href="{{ route('praticien') }}"> Praticiens</a></li>
                            
                            <li class="nav-item"><a
                            class="nav-link"
                            href="{{ route('visiteur') }}"> Visiteurs</a></li>
                            
                            <li class="nav-item"><a
                            class="nav-link"
                            href="{{ route('rapportvisite') }}"> Compte-rendu</a></li>
                            
                           
                              <li class="nav-item dropdown">
                            
                                <a id="nav-link" class="nav-link link text-white  dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('profil') }}"> Profil </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </div>
                           </li>
                            
                            
                        @endguest


            </ul>
            <div>

            </div>
          </div>
        </div>
      </nav>
           
      
      
      <!-- End Navbar -->
      <!-- End Navbar -->

    @yield('headerAccueil')
      <!-- End Promo Block -->
    </header>
    <!-- End Header -->

    <main role="main">
          

      <!-- Why We? -->
      <section class="u-content-space">
        <div class="container">
          
					@guest
                
                	@yield('content')
                    
                
			@else
				
                    @yield('content')
                    @yield('contentOff')

                
			@endguest
          	
          
          <!-- End Row -->
        </div>
      </section>
      <!-- End Why We? -->
</main>

    <!-- Footer -->
    <footer class="bg-dark py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white">&copy;GALAXY SWISS BOURDIN - 2019 </small>
          </div>

          
        </div>
      </div>
    </footer>
    
   
    
    
    
    
    
    
    <!-- End Footer -->

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="{{ asset('vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery.migrate.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Components Vendor  -->
    <script src="{{ asset('vendors/jquery.parallax.js') }}"></script>
    <script src="{{ asset('vendors/typedjs/typed.min.js') }}"></script>
    <script src="{{ asset('vendors/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('vendors/counters/waypoint.min.js') }}"></script>
    <script src="{{ asset('vendors/counters/counterup.min.js') }}"></script>
    

	
	
    <!-- Theme Settings and Calls -->
    <script src="{{ asset('js/global.js') }}"></script>

    <!-- Theme Components and Settings -->
    <script src="{{ asset('js/vendors/parallax.js') }}"></script>
    <script src="{{ asset('js/vendors/carousel.js') }}"></script>
    <script src="{{ asset('js/vendors/counters.js') }}"></script>
    <!-- END JAVASCRIPTS -->

	<script>
      $(document).on('ready', function () {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
          strings: [
            "l’industrie pharmaceutique",
            "organisés",
            "experts"
          ],
          typeSpeed: 40,
          loop: true,
          backDelay: 2500
        });
      });
    </script>
   
  </body>
  <!-- End Body -->
</html>