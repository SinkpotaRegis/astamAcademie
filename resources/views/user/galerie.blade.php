@extends('layout.template')
@section('navbar')

  <!--=================================
     Nos photos par disciplines -->
     <section class="space-ptb latest-news latest-news-pattern">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title text-center">
                <h2 class="mb-0 text-white">{{ __('Galerie photo') }}</h2> 
                <p class="mb-0 text-white">{{ __('Quelques photos de nos joueurs et activités') }}</p> 
              </div>
            </div>
          </div>
        <div class="container mt-5">
            @php
                $categories = [];
                foreach ($album as $infos) {
                    $photos = json_decode($infos->photo);
                    if (isset($categories[$infos->description])) {
                        $categories[$infos->description] = array_merge($categories[$infos->description], $photos);
                    } else {
                        $categories[$infos->description] = $photos;
                    }
                }
            @endphp
        
            @foreach ($categories as $description => $photos)
                <div class="category-section mt-5">
                    <h2 class="mb-0 text-white">{{ $description }}</h2>
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="blog-post post-style-01">
                                    <div class="blog-image"> 
                                        <img class="img-fluid" src="{{ asset('storage/' . $photo) }}" alt="{{ $description }}"> 
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        

      </section>
  <!--=================================
  End Nos galerie -->
@endsection