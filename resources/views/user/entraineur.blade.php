@extends('layout.template')
@section('navbar')
    <!--=================================
    Classic Players -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="section-title text-center mb-4 mb-md-5">
              <h2 class="mb-0 text-white">{{ __("Nos Entraineurs à l'academy") }}</h2> 
              <p class="text-white mt-2">{{ __("Parallèlement à vos plans, vous devriez envisager de développer une orientation vers l’action qui vous gardera motivé à aller de l’avant à tout moment. Cela nécessite un peu d’autodiscipline, mais constitue un élément crucial de toute réussite.") }}</p>                
            </div>
          </div>
        </div>
        @foreach ($coach as $entraineur)
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="team">
              <div class="player">
                <img class="img-fluid" src="{{ asset('storage/' . $entraineur->photo) }}" alt="">                    
              </div>
              <div class="player-info">
                <span class="player-number">{{$entraineur->categorie}}</span>
                <div class="player-name">
                  <h3 class="text-uppercase title"><a href="#">{{$entraineur->nom}}</a></h3>
                  <h4 class="text-uppercase title"><a href="#">{{$entraineur->prenom}}</a></h>
                  <span class="text-uppercase text-primary">{{$entraineur->titre}}</span>
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

    <!--=================================
    Testimonial -->
    {{-- <section class="space-ptb position-relative" style="background-image: url('images/home-01/bg-02.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center ">
          <div class="col-md-8 mb-4 mb-md-5 mb-lg-0">
            <div class="owl-carousel dots-bottom-center" data-nav-dots="true" data-nav-arrow="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1"  data-space="30" data-autoheight="true">
              <div class="item">
                <div class="testimonial text-center">
                  <div class="testimonial-star-icon">
                    <ul class="justify-content-center">
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-white"></i></li>
                    </ul>
                  </div>
                  
                  <div class="testimonial-content">
                    <p class="mb-0 text-white"><i>"I love Potenza. I have gotten at least 50 times the value from Potenza. I STRONGLY recommend Potenza to EVERYONE interested in running a successful online business!"</i> </p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="author-tittle text-primary">Alice Williams</h6>
                      <span>Services</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial text-center">
                  <div class="testimonial-star-icon">
                    <ul class="justify-content-center">
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-white"></i></li>
                    </ul>
                  </div>
                  <div class="testimonial-content">
                    <p class="mb-0 text-white"><i>"I would gladly pay over 600 dollars for Potenza. Since I invested in Potenza I made over 100,000 dollars profits. Your company is truly upstanding and is behind its product 100%."</i> </p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="author-tittle text-primary">Harry Russell</h6>
                      <span>Advisors</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial text-center">
                  <div class="testimonial-star-icon">
                    <ul class="justify-content-center">
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-white"></i></li>
                    </ul>
                  </div>
                  
                  <div class="testimonial-content">
                    <p class="mb-0 text-white"><i>"I love your system. Nice work on your Potenza. Great job, I will definitely be ordering again! I would like to personally thank you for your outstanding product."</i> </p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="author-tittle text-primary">Paul Flavius</h6>
                      <span>Finance</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!--=================================
    Testimonial -->
@endsection