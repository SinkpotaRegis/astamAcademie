@extends('layout.template')
@section('navbar')
<marquee behavior="" direction="">Voici quelques nouvelles qui peuvent vous épater !!</marquee>
<div class="row mt-5">
    @foreach ($allactu as $infos)
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="blog-post post-style-01">
            <div class="blog-image"> 
                <h2>{{ $infos->titre }}</h2>
                <img class="img-fluid" src="{{asset('storage/' . $infos->photo)}}" alt=""> 
                
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection