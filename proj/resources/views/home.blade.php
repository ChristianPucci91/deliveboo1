@extends('layouts.main-layout')

@section('contenuto-pagina')

<div class="container d-flex justify-content-center">

  <div class="card col-12 col-md-8 col-lg-6">
    <div class="p-3">
      @if (Auth::user()-> img)
        <img class="card-img-top" src="{{ asset('storage/img/' . Auth::user() -> img) }}">
      @endif
    </div>
    <div class="card-body">
      <h4 class="card-title">Benvenuto {{ $user -> name}}</h4>
      <p class="card-text">Mail: {{ $user -> email }}</p>
      <p class="card-text">Address: {{ $user -> indirizzo }}</p>
      <p class="card-text">Piva: {{ $user -> piva }}</p>
      <p class="card-text">
        Tiopolgie:
        @foreach ($user -> typologies as $typology)
          &#174;{{ $typology -> type}}
        @endforeach
      </p>
      {{-- inserimento immagine profilo --}}
      <form class="" action="{{ route('upload-img')}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('post')

        <input type="file" class="form-control border-0 p-0" name="img" value="">
        {{-- contenitore bottoni --}}
        <div class="d-flex">
          <input type="submit" class=" mr-1 btn btn-primary" name="" value="Update">
          <a href="{{ route('clear-img')}}" class=" ml-1 btn btn-danger">Delete</a>
        </div>

      </form>
    </div>
  </div>

</div>


@endsection
