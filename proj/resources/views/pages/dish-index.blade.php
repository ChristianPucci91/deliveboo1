@extends('layouts.main-layout')

@section('contenuto-pagina')


  <div class="list-group">
    @foreach ($user -> dishes as $dish)
      <div href="#" class="list-group-item list-group-item-action flex-column  align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">  {{$dish -> name}} </h5>
           <span>

             <a class="m-2 display-6" href="{{route('dish-edit', $dish->id)}}"><i class="fas fa-pencil-alt"></i></a>
             <a class="m-2" href="{{route('dish-delete', $dish->id)}}"><i class="fas fa-trash"></i></a>

           </span>
        </div>
        <p class="mb-1">{{$dish -> ingredients}}.</p>
        <p class="mb-1">{{$dish -> price}}.</p>
        <p class="mb-1">{{$dish -> visible}}</p>
      </div>
  </div>





  @endforeach

  <a href="{{route('dish-create')}}">Crea un nuovo piatto</a>
  <a href="{{route('home')}}">Torna alla home</a>

@endsection
