@extends('layout.template')
@section('navbar')   
   
  <!--=================================
    Classic Players -->
    <section class="space-ptb">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="section-title text-center mb-4 mb-md-5">
                <h2 class="mb-0 text-white">Notre Staff</h2> 
                <p class="text-white mt-2">Parallèlement à vos plans, vous devriez envisager de développer une orientation vers l’action qui vous gardera motivé à aller de l’avant à tout moment. Cela nécessite un peu d’autodiscipline, mais constitue un élément crucial de toute réussite.Voici l'équipe dirigeante d'AS-TAM.</p>                
              </div>
            </div>
          </div>
          @foreach ($staff as $team)
          <div class="row">  
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <div class="team">
                  <div class="player">
                    <img class="img-fluid" src="{{ asset('storage/' . $team->photo) }}" alt="">                    
                  </div>
                  <div class="player-info">
                    <span class="player-number">{{$team->id}}</span>
                    <div class="player-name">
                      <h3 class="text-uppercase title"><a href="#">{{ $team->nom }}</a></h3>
                      <span class="text-uppercase text-primary">{{ $team->titre }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </section>

      <section class="space-ptb">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="section-title text-center mb-4 mb-md-5">
                <h2 class="mb-0 text-white">Nos Caachs</h2> 
                {{-- <p class="text-white mt-2">Parallèlement à vos plans, vous devriez envisager de développer une orientation vers l’action qui vous gardera motivé à aller de l’avant à tout moment. Cela nécessite un peu d’autodiscipline, mais constitue un élément crucial de toute réussite.Voici l'équipe dirigeante d'AS-TAM.</p>                 --}}
              </div>
            </div>
          </div>
          @foreach ($coach as $entraineur)
          <div class="row">  
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <div class="team">
                  <div class="player">
                    <img class="img-fluid" src="{{ asset('storage/' . $entraineur->photo) }}" alt="">                    
                  </div>
                  <div class="player-info">
                    <span class="player-number">{{$entraineur->categorie}}</span>
                    <div class="player-name">
                      <h3 class="text-uppercase title"><a href="#">{{ $entraineur->nom }} {{ $entraineur->prenom }}</a></h3>
                      <span class="text-uppercase text-primary">{{ $entraineur->titre }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </div>
      </section>
  <!--=================================
  Classic Players -->
@endsection