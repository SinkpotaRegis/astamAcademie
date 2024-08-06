@extends('layout.template')
@section('navbar')

    <!--=================================
    Banner -->
    <section class="banner banner-01">
      <div id="main-slider" class="swiper-container">
        <div class="slider-social">
          <div class="container">
            <div class="slider-social-info">
              <ul class="list-unstyled mb-0">
                {{-- <li><a href="#"> FB </a></li>
                <li><a href="#"> IG </a></li>
                <li><a href="#"> TW </a></li> --}}
              </ul>
            </div>
          </div>
        </div>
        <div class="swiper-wrapper">
          <div class="swiper-slide align-items-center d-flex slide-01 header-position" style="background-image: url(asset/images/home-01/banner-bg.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="pattern-01" data-swiper-animation="fadeIn" data-duration="1.5s" data-delay="1.0s"><img class="img-fluid vert-move" src="images/home-01/pattern-01.png" alt=""></div>
            <div class="pattern-03" data-swiper-animation="fadeIn" data-duration="1.5s" data-delay="1.0s"><img class="img-fluid vert-move" src="images/home-01/pattern-03.png" alt=""></div>
            <div class="container-fluid">                
              <div class="row">
                <div class="col-12 col-lg-6 position-relative">
                  <h1 class="text-white text-start" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="1.0s">As Tam Academy Club - Bénin</h1>
                  <p class="text-white" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="2.0s">{{ __('L’objectif du centre As Tam Academy est, au-delà de donner aux enfants le goût du football, de les perfectionner dans cette pratique tout en leur inculquant les valeurs qui font la force du club.') }}</p>
                  <a href="{{route('getstage')}}" class="btn btn-white mt-3 mt-md-4" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="3.0s">Demander un stage</a>
                  <div class="pattern-02" data-swiper-animation="fadeIn" data-duration="5.5s" data-delay="1.0s"><img class="custom-animation img-fluid" src="{{asset('asset/images/home-01/pattern-02.png')}}" alt=""></div>
                </div>
                <div class="col-12 col-lg-6 d-none d-lg-flex">
                  <div class="banner-img">
                    <img class="img-fluid hori-move" src="{{asset('asset/images/home-01/banner-img.png')}}" data-swiper-animation="fadeIn" data-duration="5.0s" data-delay="1.0s" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide align-items-center d-flex slide-02 header-position" style="background-image: url(asset/images/home-01/banner-bg.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="pattern-01" data-swiper-animation="fadeIn" data-duration="1.5s" data-delay="1.0s"><img class="img-fluid vert-move" src="images/home-01/pattern-01.png" alt=""></div>
            <div class="pattern-03" data-swiper-animation="fadeIn" data-duration="1.5s" data-delay="1.0s"><img class="img-fluid vert-move" src="images/home-01/pattern-03.png" alt=""></div>
            <div class="container-fluid">                
              <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-4 col-xl-4 col-xxl-6 d-none position-relative d-lg-flex justify-content-center">
                  <div class="banner-img">
                    <img class="img-fluid vert-move" src="{{asset('asset/images/home-01/banner-img-02.png')}}" data-swiper-animation="fadeIn" data-duration="5.0s" data-delay="1.0s" alt="">
                  </div>
                  <div class="pattern-04" data-swiper-animation="fadeIn" data-duration="5.5s" data-delay="1.0s"><img class="custom-animation" src="{{asset('asset/images/home-01/star-icon02.png')}}" alt=""></div>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 col-xxl-6 position-relative">
                  <h1 class="text-white text-start" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="1.0s">{{ __('Le football est tout simplement génial') }}</h1>
                  <p class="text-white" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="2.0s">{{ __('As Tam Academy Bénin propose des stages de foot et des écoles de foot dans les centres de formation.') }}</p>
                  {{-- <a href="about-us.html" class="btn btn-white mt-3 mt-md-4" data-swiper-animation="fadeInUp" data-duration="1.5s" data-delay="3.0s">Read More</a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12 position-relative text-center">
              <div class="pagination-button">
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">Prev</div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">Next</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Banner -->


    <!--=================================
    About -->
    <section class="space-ptb about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="about-img fadeInUp animated">
              <img class="img-fluid" src="{{asset('asset/images/home-01/about1.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="section-title mb-4 mb-lg-5">
              <h2 class="mb-4">{{ __('OBJECTIF D’AS-TAM') }}</h2>
              <p class="text-white">
                {{ __('Assurer une formation morale, éducative, sociale et physique par la pratique du sport en général et du football en particulier ceci sans distinction de sexe, de religion.') }}</p>
              <p class="text-white">                
                {{ __("Offrir aux plus démunis que cela soit  la possibilité ou l’opportunité de développer leur potentiel dans le but de leur fournir en matérielle connaissances et conseils, les éléments nécessaires à la pratique du sport en général et du football en particulier") }}</p>
            </div>
            <div class="row counter-box">
              <div class="col-sm-4">
                <div class="counter mb-4 mb-lg-0">
                  <div class="counter-number">
                    <p>Games</p>
                    <div class="counter-text"><h2 class="timer mb-0" data-to="200" data-speed="2000">200</h2><span>+</span></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="counter mb-4 mb-lg-0">
                  <div class="counter-number">
                    <p>Goals</p>
                    <div class="counter-text"><h2 class="timer mb-0" data-to="179" data-speed="2000">179</h2><span>+</span></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="counter mb-4 mb-md-0">
                  <div class="counter-number">
                    <p>Assist</p>
                    <div class="counter-text"><h2 class="timer mb-0" data-to="146" data-speed="2000">146</h2><span>+</span></div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="about-bg">
        <img class="img-fluid vert-move" src="{{asset('asset/images/home-01/pattern-04.png')}}" alt="">
      </div>
    </section>
    <!--=================================
    About -->

    <!--=================================
    Live Videos -->
    <section class="space-pb video-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2 class="mb-0 text-white">Live Videos</h2> 
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-12 col-xl-6">
            <div class="video-box">
              <div class="video-image"> 
                <img class="img-fluid" src="{{asset('asset/images/home-01/video-bg.jpg')}}" alt="image">
                {{-- <a class="video-btn popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> --}}
                  <i class="fas fa-play"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xl-6 mt-md-5 mt-xl-0">
            <div class="video-style-vertical">
              @foreach ($video as $item)
            <div class="video-post">
          <div class="video-image">
            <a href="{{ $item->videopath }}" target="_blank">
                <img src="{{asset('storage/' . $item->photo)}}" alt="">
                <div class="video-icon">
                    <i class="fa-solid fa-video"></i>
                </div>
            </a>
        </div>
        <div class="video-post-details">
            <span class="badge">Jeu</span>
            <h6 class="video-title">
                <a href="{{ $item->videopath }}" target="_blank">{{ $item->description}}</a>
            </h6>
            <div class="video-view">
                <a href="{{ $item->videopath }}" target="_blank">10M vues</a>
            </div>
        </div>
      </div>
      @endforeach
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Live Videos -->

    <!--=================================
    Latest Results -->
    {{-- <section class="space-ptb latest-results">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="mb-0 text-white">Latest Results</h2> 
            </div>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
            <div class="d-lg-flex align-items-center">
              <h3>Ligers</h3>
              <img class="img-fluid ms-0 ms-lg-4 ms-xl-5" src="{{asset('asset/images/home-01/team-logo-03.png')}}" alt="">        
            </div>
          </div>
          <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
            <h5>Premier League</h5>
            <h2><span>03</span> : <span>02</span></h2>
            <div class="time-location"><span class="time"><i class="fa-regular fa-clock"></i>1:30 PM</span><span class="location"><i class="fa-solid fa-location-dot"></i>Maracanã Stadium</span></div>
          </div>
          <div class="col-md-12 col-lg-4 text-center">
            <div class="d-lg-flex align-items-center justify-content-end">
              <img class="img-fluid me-0 me-lg-4 me-xl-5" src="{{asset('asset/images/home-01/team-logo-04.png')}}" alt="">
              <h3>Cheetahs</h3>                        
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!--=================================
    Latest Results -->

    <!--=================================
    Upcoming Match -->
{{-- : <section class="space-ptb match-schedule overlay-top">
      <div class="container bg-light p-5">
        <div class="row">
          <div class="col-md-12 ">
            <div class="section-title mb-5">
              <h2>Match à venir</h2>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="owl-carousel arrow-top-right match-schedule-slider" data-nav-dots="false" data-nav-arrow="true" data-items="3" data-xl-items="2" data-lg-items="2" data-md-items="2" data-sm-items="2" data-xs-items="1" data-xx-items="1"  data-autoheight="true">
              <div class="item">
                <div class="upcoming-match">
                  <div class="match-team">
                    <img class="img-fluid" src="{{asset('asset/images/home-01/team-logo-05.png')}}" alt="">
                  </div>
                  <div class="match-date-time">
                    <span class="match-time">1:30 PM</span>
                    <span class="match-date"><i class="fa-solid fa-calendar-days"></i>Mar 19 2023</span>
                  </div>
                  <div class="match-team">
                    <img class="img-fluid" src="{{asset('asset/images/home-01/team-logo-06.png')}}" alt="">                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section> --}}
    <!--=================================
    Upcoming Match -->

    <!--=================================
    Classic Players -->
    <section class="space-pb classic-players px-0 px-md-5">
      <div class="container-fluid">
        <div class="row position-relative">
          <div class="col-lg-4 pe-0 pe-lg-5">
            <div class="section-title">
              <h2 class="mb-0 text-white">{{ __('Joueurs classiques') }}</h2> 
              <p class="text-white mt-2">{{ __('Pour ceux d’entre vous qui veulent vraiment avoir plus, faire plus, donner plus et être plus, le succès est réalisable avec une certaine compréhension de ce qu’il faut faire, une certaine discipline autour de la planification et de l’exécution de ces plans et la conviction que vous pouvez réaliser vos désirs.') }}</p>
            </div>
            {{-- <a href="#" class="btn btn-primary mt-4">View Match Details</a> --}}
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="2" data-xl-items="2" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1"  data-autoheight="true">
              <div class="item  mb-4 mb-lg-0">
                <div class="player">
                  <img class="img-fluid" src="{{asset('asset/images/home-01/fred.jpeg')}}" alt="">                    
                </div>
                <div class="player-info">
                  <span class="player-number">U17</span>
                  <div class="player-name">
                    <h3 class="text-uppercase title"><a href="#">ADANLIN Daniel</a></h3>
                    <span class="text-uppercase text-primary">Prodigue en Côte d'Ivoire</span>
                  </div>
                </div>
              </div>
              <div class="item  mb-4 mb-lg-0">
                <div class="player">
                  <img class="img-fluid" src="{{asset('asset/images/home-01/prodigue.jpeg')}}" alt="">                    
                </div>
                <div class="player-info">
                  <span class="player-number">U17</span>
                  <div class="player-name">
                    <h3 class="text-uppercase title"><a href="#">AGOSSOU Gérôme</a></h3>
                    <span class="text-uppercase text-primary">Center</span>
                  </div>
                </div>
              </div>
              <div class="item mb-4 mb-lg-0">
                <div class="player">
                  <img class="img-fluid" src="{{asset('asset/images/home-01/ppr.jpeg')}}" alt="">
                </div>
                <div class="player-info">
                  <span class="player-number">U17</span>
                  <div class="player-name">
                    <h3 class="text-uppercase title"><a href="#">DODOU Natacha</a></h3>
                    <span class="text-uppercase text-primary">Defenders</span>
                  </div>
                </div>
              </div>           
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Classic Players 
  
  NOS DISCIPLINES-->   
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
 
          <div class="col-lg-8">
            <div class="section-title mb-4 mb-md-3">
              <h2>{{ __('Nos disciplines') }}</h2>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                FOOTBALL
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Un sport collectif joué entre deux équipes de onze joueurs deux gardiens et dix joueurs joueur de champ avec un ballon, ce sport est le plus populaire au monde.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Le football est le sport le plus populaire au monde, avec des milliards de fans et des millions de joueurs amateurs et professionnels.</li>
                      <li class="mb-2">Le football génère des milliards de dollars en revenus grâce aux droits de diffusion télévisée, aux parrainages, à la vente de billets, et aux produits dérivés</li>
                      <li class="mb-2"> Les entraîneurs peuvent remplacer des joueurs pour ajuster les tactiques ou remplacer des joueurs blessés.</li>
                      <li class="mb-2">Les équipes peuvent jouer avec une possession élevée du ballon (tiki-taka), se concentrer sur des contre-attaques rapides, ou exercer un pressing haut pour récupérer rapidement le ballon. </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                HANDBALL 
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Sport opposant deux équipes de onze ou septe joueurs dont chacun s’efforce d’envoyer un ballon rond a l’intérieur des buts adverses par une série de passes à la main sans aucune intervention des pieds que seul le gardien de but peut utiliser .</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Le terrain mesure 40 mètres de long sur 20 mètres de large, avec un but à chaque extrémité.</li>
                      <li class="mb-2"> Marquer plus de buts que l'équipe adverse en envoyant le ballon dans le but advers</li>
                      <li class="mb-2">Un match standard dure 60 minutes, divisé en deux mi-temps de 30 minutes avec une pause de 10 minutes entre les deux. En cas d'égalité dans les matchs à élimination directe, des prolongations et des tirs au but peuvent être utilisés.</li>
                      <li class="mb-2">Chaque équipe est composée de 7 joueurs sur le terrain (6 joueurs de champ et 1 gardien de but). </li>
                      <li class="mb-0">Les remplacements peuvent être effectués à tout moment pendant le jeu, à condition que le joueur sortant ait quitté le terrain avant que le remplaçant n'entre.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  BASKETBALL
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Sport collectif qui oppose deux équipes de cinq joueurs sur un terrain. L’objectif faire passer deux ballons à travers un arc fixe à 3,05 mètres du sol pour marquer des paniers. Les points attribues variait en fonction de la distance du tir.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Chaque équipe est composée de 5 joueurs sur le terrain à la fois. Les équipes peuvent avoir plusieurs remplaçants sur le banc.</li>
                      <li class="mb-2">Les remplacements peuvent être effectués à tout moment pendant le match, avec des pauses naturelles du jeu.</li>
                      <li class="mb-2"> Généralement le meilleur dribbleur et passeur, il organise le jeu et distribue le ballon.</li>
                      <li class="mb-2">Les équipes utilisent différentes formations et stratégies en attaque et en défense, telles que la défense de zone, la défense homme-à-homme, et les systèmes d'attaque en triangle. </li>
                      <li class="mb-0">Incluent des jeux de pick-and-roll, des écrans, des isolations, et des stratégies de contre-attaque rapide</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                  ATHLETISME 
                </button>
                </h2>
                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">C’est un sport ou plutôt un ensemble d’épreuves sportives codifiées comprenant des courses à pied, des sauts et des lancers. <br>
                    L'athlétisme est un sport de compétition pure où l'endurance, la vitesse, la force et la technique sont mises à l'épreuve. Il est admiré pour sa capacité à démontrer les limites physiques et mentales de l'être humain. </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-0">
                <h2 class="accordion-header" id="flush-headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                FUTSAL 
                </button>
                </h2>
                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Le futsal est un sport rapide et technique, apprécié pour sa dynamique de jeu intense et ses exigences de précision et de contrôle du ballon. Il est également reconnu pour son rôle dans le développement des compétences des jeunes footballeurs, en particulier en termes de dribble, de passe et de prise de décision rapide.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Comme au football traditionnel, l'objectif est de marquer des buts en envoyant le ballon dans le but adverse.</li>
                      <li class="mb-2">Chaque équipe a droit à un temps mort de 60 secondes par mi-temps.</li>
                      <li class="mb-2">Les fautes sont comptabilisées individuellement et collectivement. Après cinq fautes collectives par mi-temps, chaque faute supplémentaire entraîne un coup franc sans mur, appelé coup franc direct, à partir de la ligne des 10 mètres..</li>
                      <li class="mb-2">Les touches se font avec les pieds, et les remises en jeu sont faites depuis la ligne de touche. Les corners sont également joués avec les pieds. </li>
                      {{-- <li class="mb-0">Out after the fact that the price was too high.</li> --}}
                    </ul>
                  </div>
                </div>
              </div> <hr>
              <div class="accordion-item mb-0">
                <h2 class="accordion-header" id="flush-headingsix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                TENNIS DE TABLE 
                </button>
                </h2>
                <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p class="text-white">Le tennis de table est un sport rapide et technique, nécessitant des réflexes aiguisés, une précision de frappe et une stratégie élaborée. Il est apprécié pour son accessibilité, sa dynamique de jeu intense et ses compétitions internationales passionnantes.</p>
                    <ul class="ps-3 mb-0 text-white">
                      <li class="mb-2">Le service alterne tous les deux points entre les joueurs ou les équipes. Pour servir, le joueur doit lancer la balle verticalement d'au moins 16 cm et la frapper pour qu'elle rebondisse d'abord de son côté de la table, puis de l'autre côté.</li>
                      <li class="mb-2">Après le service, les joueurs frappent la balle en alternance jusqu'à ce qu'un point soit marqué. La balle doit toucher le côté de la table de l'adversaire après chaque coup, sauf lors des services.</li>
                      <li class="mb-2">Un point est marqué à chaque échange. Un set est gagné par le premier joueur ou la première équipe à atteindre 11 points, avec au moins deux points d'écart. Si le score atteint 10-10, le jeu continue jusqu'à ce qu'un joueur ou une équipe gagne par deux points d'écart. Un match se joue généralement au meilleur des cinq ou sept sets.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    DISCIPLINES -->

    <!--=================================
    Derniere news -->
    <section class="space-ptb latest-news latest-news-pattern">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="mb-0">{{ __('Dernières nouvelles') }}</h2>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          @foreach ($actualite as $act)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="blog-post post-style-01">
              <div class="blog-image">
                <img class="img-fluid" src="{{ asset('storage/' . $act->photo) }}" alt="{{ $act->titre }}">
              </div>
              <div class="blog-post-details">
                <h5 class="blog-title mb-2"><a href="#">{{ $act->titre }}</a></h5>
                <p class="text-white mb-4">
                  {{ \Illuminate\Support\Str::limit($act->description, 255, '...') }}
                  <a href="{{ route('article.show', $act->id) }}" target="_blank" class="read-more">Lire la suite</a>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
        <!--=================================
    Dernières News -->



@endsection