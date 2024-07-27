@extends('layout.template')
@section('navbar')
    <!--=================================
    Banner -->
    {{-- <section class="inner-banner bg-overlay-black-6 bg-holder" style="background-image: url('images/inner-banner/01.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-banner-tittle">
              <h2>Player Single</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Player Single</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!--=================================
    Banner -->

    <!--=================================
    Player Detail -->
    <section class="space-ptb single-player">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="player-img">
              <img class="img-fluid" src="{{('asset/images/home-01/protigue.jpeg')}}" alt="">    
            </div>
          </div>
          <div class="col-lg-7 mt-4 mt-md-5 mt-lg-0 ps-3 ps-lg-5">
            <div class="player-info">
              <h2 class="mb-2"><a href="#" class="player-name text-white">SOKPETIN Olayêmi Divin</a></h2>
              <span class="d-block player-position">( Prodigue dans l'académie paris saint germain )</span>
              <ul class="list-unstyled  mt-4">
                <li class="d-flex mb-3 mx-0">
                  <span class="me-4"> Nationalité :</span>Béninoise
                </li>
                <li class="d-flex mb-3 mx-0">
                  <span class="me-4"> Poste :</span> Milieu de terrain
                </li>
                <li class="d-flex mb-3 mx-0">
                  <span class="me-4"> Categorie :</span> U13
                </li>
                <li class="d-flex mb-3 mx-0">
                  <span class="me-4"> Age :</span> 12 ans
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div>
      <div class="single-player-bg">
        <img class="img-fluid vert-move" src="" alt="">
      </div>
    </section>
    <!--=================================
    Team Detail -->

    <!--=================================
    Mission About -->
    <section class="player-about">
      <div class="player-about-bg">
        <div class="container">
          <div class="row">
            <div class="col-xl-6">
              <div class="player-about-details">
                <h2>{{ __('Mission') }} </h2>
                <div class="mb-4">
                </div>
                <p class="text-white">{{ __("L’Académie Sportive Tadagbe Ahoton Moise (AS-TAM), offre une expérience de football axée sur le plaisir et la passion dans un environnement respectueux et équitable pratiqué dans des conditions favorable à la réussite pour tout type de joueurs de toute aspiration") }}</p>
                <p class="text-white mb-0">{{ __("Le but ultime de notre  projet est de pouvoir offrir à nos joueurs une chance de leurs ouvrir les portes des structures professionnelle sur le continent ou en Europe et ceci grâce a l’aspect sociale de notre projet") }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Mission About -->


    <!--=================================
    Player -->  
    <section class="space-pb">
      {{-- <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center mb-5">
              <h2>Nos joueurs</h2>
            </div>
          </div>
        </div>
        @foreach ($footjoueur as $foot)
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="team">
              <div class="player">
                <img class="img-fluid" src="{{asset('asset/images/home-01/team-04.jpg')}}" alt="">                    
              </div>
              <div class="player-info">
                <span class="player-number">{{$foot->categorie}}</span>
                <div class="player-name">
                  <h3 class="text-uppercase title"><a href="#">{{$foot->nom}} {{$foot->prenom}}</a></h3>
                  <span class="text-uppercase text-primary">{{$foot->poste}}</span>
                </div>
              </div>
            </div>
          </div>       
        </div>
      </div>
      @endforeach
      </div> --}}
      <div class="container mt-4">
        <div class="row">
            @foreach ($footjoueur as $foot)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="team">
                    <div class="player">
                        <img class="img-fluid" src="{{ asset('storage/' . $foot->photo) }}" alt="Photo de {{ $foot->nom }}">
                    </div>
                    <div class="player-info">
                        <span class="player-number">{{ $foot->categorie }}</span>
                        <div class="player-name">
                            <h5 class="text-uppercase title"><a href="#">{{ $foot->nom }} {{ $foot->prenom }}</a></h5>
                            <span class="text-uppercase text-primary">{{ $foot->poste }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
    <!--=================================
    Player -->
      


    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">
      <a href="#"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <!--=================================
    Back To Top-->
 @endsection