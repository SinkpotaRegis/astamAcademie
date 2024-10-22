@extends('layout.template')
<meta property="og:title" content="{{ $article->titre }}" />
<meta property="og:description" content="{{ \Illuminate\Support\Str::limit($article->description, 255, '...') }}" />
<meta property="og:image" content="{{ asset('storage/' . $article->photo) }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="article" />
@section('navbar')
<div class="container">
    <div class="row">
        <div class="col-12"> <br>
            <h4>Article publié le {{$article->created_at}}</h4>
            <h1 style="text-align: center" class="mb-4">{{ $article->titre }}</h1>
            <img class="img-fluid mb-4" src="{{ asset('storage/' . $article->photo) }}" alt="{{ $article->titre }}">
            <p>{{ $article->description }}</p>
        </div>
    </div>
</div>
@endsection