@extends('layout.template')
@section('navbar')
@foreach ($allactu as $k)
    <ul>
        <li>
            <div>{{$k->titre}}</div>
        </li>
    </ul>
@endforeach

@endsection