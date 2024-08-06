@extends('layout.template')
@section('navbar')
<marquee behavior="" direction="">Voici quelques nouvelles qui peuvent vous épater !!</marquee>
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
        @foreach ($allactu as $act)
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
@endsection