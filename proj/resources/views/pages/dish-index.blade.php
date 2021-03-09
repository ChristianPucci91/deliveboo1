@extends('layouts.main-layout')

@section('contenuto-pagina')

  <a class="m-2 display-6 btn bg-primary" href="{{route('home')}}">Torna alla home</a>
  <a class="m-2 display-6 btn bg-success" href="{{route('dish-create')}}">Crea un nuovo piatto</a>

  <h2 class="text-center mb-3 mt-2 display-3"><em>{{$user -> name}} Menu</em></h2>
  <div class="row">
    @foreach ($user -> dishes as $dish)
      <div class="col-sm-6 mb-4">
        @if ($dish->visible === 1)
          <div class="card border-success">
        @else
          <div class="card bg-light border-danger">
        @endif
          <div class="card-body">
            <h5 class="card-title display-4 text-center text-dark text-uppercase">{{$dish -> name}}</h5>
            <p class="card-text">Ingredienti: {{$dish -> ingredients}}</p>
            <p class="card-text">Prezzo: {{$dish -> price}}&euro;</p>
            <p class="card-text">Visibile al cliente: {{$dish -> visible}}</p>
            <div class="text-right">
              <a class="m-2 display-6 btn bg-success" href="{{route('dish-edit', $dish->id)}}"><i class="fas fa-pencil-alt"></i></a>
              <a class="m-2 display-6 btn bg-danger" href="{{route('dish-delete', $dish->id)}}"><i class="fas fa-trash"></i></a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

@endsection
