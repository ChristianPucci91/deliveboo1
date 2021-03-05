<!-- estende da main-layout -->
@extends('layouts.main-layout')

@section('contenuto-pagina')
  
  <div class="row">
    <h1>Ecco il nostro menu:</h1>
    <img src="{{ $user -> img}}" alt="">
    @foreach ($user -> dishes as $dish)
      <div class="col-sm-6 mb-4">
        <div class="card rounded bg-light" v-if="{{ $dish -> visible}} == 1">
          <div class="card-body">
            <h2 class="card-title text-center display-3"><em>{{$dish -> name}}</em></h2>
            <p class="card-text">Ingredienti: {{$dish -> ingredients}}</p>
            <p class="card-text">Prezzo: {{$dish -> price}}&euro;</p>
            <a v-if="{{ $dish -> visible}} == 1" href="{{ route('home')}}" class="btn btn-primary float-right"><i class="fas fa-shopping-cart"></i> Aggiungi al carrello</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>


@endsection
