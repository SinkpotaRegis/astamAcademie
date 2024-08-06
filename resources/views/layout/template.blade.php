<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="ASTAM">
    <meta name="description" content="ASTAMSports - Academy">
    <meta name="author" content="codeanytime-tech.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ASTAM - ACADEMY - BENIN</title>

    <!-- Favicon -->
   <link rel="shortcut icon" href="{{asset('asset/images/logo1.png')}}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap/bootstrap.min.css')}}">

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{asset('asset/css/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/swiper/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup/magnific-popup.css')}}">
    
    <!-- Template Style -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
  </head>
  <style>
    .blog-image img {
        width: 300%; /* Pour que les images remplissent le conteneur */
        height: 300px; /* Hauteur fixe pour toutes les images */
        object-fit: cover; /* Pour que les images gardent leur proportion en remplissant le conteneur */
    }
    .blog-post {
        margin-bottom: 20px;
    }
    
    .video-post {
      margin-bottom: 20px;
    }
  
  .video-image {
      position: relative;
    }
  
  .video-image img {
      width: 100%;
      height: auto;
    }
  
  .video-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 2rem;
      color: #fff;
    }
  
  .video-post-details {
      padding: 10px;
      background: #000;
      color: #fff;
    }
  
  .video-title a, .video-view a {
      color: #fff;
      text-decoration: none;
    }
  
  .video-title a:hover, .video-view a:hover {
      text-decoration: underline;
    }
  .aaaa {
    width : 100px;
    height : 80px ;
    }
  
   .latest-news {
    background-color: #1d1f21;
    padding: 60px 0;
    }
  
  .section-title h2 {
    color: #f3f1f1;
    font-size: 2.5em;
    margin-bottom: 40px;
    }
  
  .blog-post {
    background: #0c0b0b;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    }
  
  .blog-post:hover {
    transform: translateY(-10px);
    }
  
  .blog-image img {
    width: 100%;
    height: auto;
    }
  
  .blog-post-details {
    padding: 20px;
    }
  
  .blog-title {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 10px;
    }
  
  .blog-title a {
    text-decoration: none;
    color: inherit;
    transition: color 0.3s ease;
    }
  
  .blog-title a:hover {
    color: #007bff;
    }
  
  .blog-post-details p {
    color: #666;
    font-size: 1em;
    line-height: 1.5;
    }
  
  .read-more {
    display: inline-block;
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    margin-top: 10px;
    transition: color 0.3s ease;
    }
  
  .read-more:hover {
    color: #0056b3;
    }
  </style>
  <body>
    <!--=================================
    Header -->
    <header class="header header-sticky default">
      <nav class="navbar navbar-static-top navbar-expand-xl">
        <div class="container-fluid main-header position-relative">
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="{{route('getindex')}}">
            <img class="logo img-fluid" src="{{asset('asset/images/logo1.png')}}" alt="logo">
            <img class="sticky-logo img-fluid" src="{{asset('asset/images/logo1.png')}}" alt="logo">
          </a>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown nav-item">
                <a class="nav-link" href="{{route('getindex')}}">Accueil</a>
              </li>
              <li class="dropdown nav-item mega-menu">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-sm-6 col-lg-4">
                        <span class="mb-3 nav-title mt-0">{{ ('Divers') }}</span>
                        <ul class="list-unstyled mt-lg-3">
                          {{-- <li><a class="dropdown-submenu" href="">Groupe</a></li> --}}
                          <li><a class="dropdown-submenu" href="{{route('getteam')}}">{{ __("Le staff") }}</a></li>
                          <li><a class="dropdown-submenu" href="{{route('gethistoire')}}">{{ __("Histoire") }}</a></li>
                          <li><a class="dropdown-submenu" href="{{route('getjoueur')}}">{{ __("Joueurs et Joueuses") }}</a></li>
                          <li><a class="dropdown-submenu" href="{{route('getcalendrier')}}">{{ __("Calendrier") }}</a></li>
                        </ul>
                      </div>
                      {{-- <div class="col-sm-6 col-lg-4">
                        <span class="mb-3 nav-title mt-0">Condition</span>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a class="dropdown-submenu" href="privacy-policy.html">{{ __("Politique de confidentialité") }}</a></li>
                          <li><a class="dropdown-submenu" href="terms-and-conditions.html">{{ __("Termes et conditions") }}</a></li>
                        </ul>
                      </div>  --}}
                    </div>
                  </li>
                </ul>
              </li>
             {{--  <li class="dropdown nav-item mega-menu">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Portfolio<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-sm-6 col-lg-4">
                        <span class="mb-3 nav-title mt-0">Portfolio Style</span>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a class="dropdown-submenu" href="portfolio.html">Portfolio</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-morden.html">Portfolio Morden</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-masonry.html">Portfolio Masonry</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-single.html">Portfolio Single</a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-lg-4 mt-3 mt-sm-0">
                        <span class="mb-3 nav-title mt-0"> Portfolio Columns</span>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a class="dropdown-submenu" href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-5-columns.html">Portfolio 5 Columns</a></li>
                        </ul>
                      </div>
                      <div class="col-sm-6 col-lg-4">
                        <span class="mb-3 nav-title mt-0"> Portfolio Masonry</span>
                        <ul class="list-unstyled mt-lg-3">
                          <li><a class="dropdown-submenu" href="portfolio-2-masonry.html">Portfolio 2 Masonry</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-3-masonry.html">Portfolio 3 Masonry</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-4-masonry.html">Portfolio 4 Masonry</a></li>
                          <li><a class="dropdown-submenu" href="portfolio-5-masonry.html">Portfolio 5 Masonry</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li> --}}
              <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Blog<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('getstage')}}">Stage</a></li>
                  <li><a class="dropdown-item" href="{{route('listeactualite')}}">Actualités</a></li>
                  <li><a class="dropdown-item" href="{{route('getgalerie')}}">Galerie</a></li>
                  {{-- <li><a class="dropdown-item" href="{{route('getpartenariat')}}">Partenariat</a></li>ù --}}
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a class="nav-link" href="{{route('getcontact')}}">Contact</a>
              </li>
              <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">{{ __("Langue") }}<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('switch_lang', ['lang' => 'fr']) }}">🇫🇷 Francais</a></li>
                    <li><a class="dropdown-item" href="{{ route('switch_lang', ['lang' => 'en']) }}">🇬🇧 Anglais</a></li>
                    <li><a class="dropdown-item" href="{{ route('switch_lang', ['lang' => 'zh_CN']) }}">🇨🇳 Chinois</a></li>
                    {{-- <li><a class="dropdown-item" href="{{ route('switch_lang', ['lang' => 'ar']) }}"> 🇸🇦 Arabe </a></li> --}}
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a class="nav-link" href="{{route('getlogin')}}">Se connecter</a>
              </li>
            </ul>
          </div>
          {{-- <div class="add-listing">
            <div class="side-menu">
              <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <img src="{{asset('asset/images/svg/menu.svg')}}" alt="#">
                <img class="menu-dark" src="{{asset('asset/images/svg/menu-dark.svg')}}" alt="#">
              </a>
            </div>
          </div> --}}
        </div>
      </nav>
    </header>
    <!--=================================
    Header -->
<!--=================================
    Right menu -->
    {{-- <div class="offcanvas offcanvas-end offcanvas-sidebar-menu" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header text-end justify-content-end p-4">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body p-4 p-sm-5 d-flex align-content-between flex-wrap justify-content-center">
          <div class="sidebar-menu">
            <div class="sidebar-logo">
              <a href="index.html">
                <img class="logo img-fluid" src="{{asset('asset/images/logo.svg')}}" alt="logo">
              </a>
            </div>
            <div class="section-title mt-5">
              <h3 class="title text-white">About us</h3>
              <p class="text-white">Get the oars in the water and start rowing. Execution is the single biggest factor in achievement so the faster and better your execution.</p>
            </div>
            <div class="mt-5">
              <h3 class="mb-3 text-white">Contact Info</h3>
              <p class="text-white">17504 Carlton Cuevas Rd,<br> Gulfport, MS, 39503</p>
              <h2 class="text-white">1-800-555-500</h2>
            </div>
            <div class="social-icon mt-5">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
    </div> --}}
      <!--=================================
      Right menu -->
        @if (session()->has('message'))
        <div class="alert alert-primary" role="alert">
          {{session()->get('message')}}
        </div>
        @endif


@yield('navbar')

    <!--=================================
    client -->
    <section class="client-logo py-5 bg-white">
      <h2 class="mb-0 text-black">Nos Partenaires & Sponsors</h2> 
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="5" data-lg-items="5" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="0" data-autoheight="true">
              <div class="item">
                <img class="img-fluid" src="{{asset('asset/images/home-01/client-logo/pat1.png')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{asset('asset/images/home-01/client-logo/pat2.png')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{asset('asset/images/home-01/client-logo/pat3.png')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{asset('asset/images/home-01/client-logo/pat8.jpg')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{asset('asset/images/home-01/client-logo/pat9.jpg')}}" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="{{asset('asset/images/home-01/client-logo/codeanytime.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    client -->

<!--=================================
Footer -->
    <footer class="footer">
        <div class="min-footer">
          <div class="container">
            <div class="row align-items-center justify-content-between mb-4 mb-md-5">
              <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                <div class="footer-social justify-content-center justify-content-lg-start">
                  <span>Follow Us :</span>
                  <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
                <a href="#" class="footer-logo">
                  <img class="logo img-fluid" src="{{asset('asset/images/logo1.png')}}" alt="logo">
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5 class="footer-title text-primary">Informations de contact</h5>
                <ul class="contact-info">
                  <li><i class="fas fa-map-marker-alt"></i> <span>  Com. Sèmè podji, Arr. Djèrègbé  </span></li>
                  <li class="contact-email"><i class="far fa-envelope"></i><span>contact@astam-academy-benin.com</span></li>
                  <li><i class="fa-solid fa-phone"></i><span>(229) 53001166 | 67979001 | 47412725</span></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6 text-lg-center mb-4 mb-lg-0">
                <h5 class="footer-title text-primary">{{ __("À propos de notre équipe") }}</h5>
                <p class="text-white mb-0">{{ __("Pour ceux d’entre vous qui veulent vraiment avoir plus, faire plus, donner plus et être plus, le succès est réalisable avec une certaine compréhension de ce qu’il faut faire sérieusement pour avoir plus et faire plus.") }}</p>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="footer-title text-primary">Liens utiles</h5>
                <div class="footer-menu">
                   <ul>
                    <li><a href="{{route('getinfosstage')}}">Stage</a></li>
                    <li><a href="{{route('getteam')}}">Equipe</a></li>
                    <li><a href="{{route('gethistoire')}}">Histoire</a></li>
                  </ul>
                </div>
              </div>
              {{-- <div class="col-lg-2 col-md-6">
                <h5 class="footer-title text-primary">Need help?</h5>
                <div class="footer-menu">
                  <ul>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="contact-us.html">Contact us</a></li>
                  </ul>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row align-items-center copyright">
              <div class="col-12 col-md-6 text-center text-md-start">
                {{-- <div class="copyright-menu footer-menu">
                  <ul class="mb-0 justify-content-center justify-content-md-start list-unstyled">
                    <li><a href="about-us.html">About us</a></li>
                    <li><a href="event.html">Events</a></li>
                    <li><a href="our-history.html">Our History</a></li>
                  </ul>
                </div> --}}
              </div>
              <div class="col-12 col-md-6 text-center text-md-end mt-2 mt-md-0">
                <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="index.html"> As-Tam Academy </a> All Rights Reserved | By <a href="codeanytime-tech.com"> <span>CodeAnytime</span> </a></p>
              </div>            
            </div>
          </div>
        </div>
      </footer>
      <!--=================================
      Footer -->

    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">
      <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <!--=================================
    Back To Top-->
    
    <!--=================================
    Javascript -->
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{asset('asset/js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.appear.js')}}"></script>
    <script src="{{asset('asset/js/popper/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{asset('asset/js/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('asset/js/swiperanimation/SwiperAnimation.min.js')}}"></script>
    <script src="{{asset('asset/js/counter/jquery.countTo.js')}}"></script>
    <script src="{{asset('asset/js/countdown/jquery.downCount.js')}}"></script>
    <script src="{{asset('asset/js/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{asset('asset/js/custom.js')}}"></script>