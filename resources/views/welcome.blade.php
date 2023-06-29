@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, delectus ad esse illum omnis earum eligendi sint a minus quasi, inventore nulla autem. Maxime voluptatem eligendi veniam voluptates. Soluta, sunt!</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-5 g-4">
        @foreach ($movies as $movie)
        <div class="col">
            <a href="/">
            <div class="card h-100">
                <img src="{{$movie->img}}" class="card-img-top" alt="{{$movie->title}}">
                <div class="card-body">
                    <p class="card-text">Nome: {{$movie->title}}</p> 
                    <p class="card-text">Voto: {{$movie->vote}}</p> 
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection