@extends('layouts.main-layout')
@section('contenuto-pagina')

<section>
<div class="jumbotron text-center mt-2" id="imgjumbotron">
    <div class="container">
    <div class="row">
            <div class="col-12">
        <h1 class="text-center margini">WELCOME TO BOOLIVEROO</h1>
            <p><a class="btn btn-primary btn-lg" href="{{route('clientSearch')}}" role="button">Scopri i nostri ristoranti</a></p>
        </div>
    </div>
    </div>
</div>
</section>

<section id="app">
  <div class="container">

    <h2>La selezione di Booliveroo</h2>
    <div class="row text-center row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 card-group">

      <div v-for="user in randUsers" class="col pb-1">
        <div class="card animation">
          {{-- <img class="card-img-top" :src="user.img" alt="Not found image"> --}}
          <img class="card-img-top" :src="'http://localhost:8000/storage/img/' + user.img" alt="Not found image">
          <div class="card-body">
            <h5 class="card-title">@{{user.name}}</h5>
            <p class="card-text">@{{user.indirizzo}}.</p>
            {{-- <a :href=`{{route('show-menu','')}}/${user.id}` class="btn btn-primary">Scopri il Menu</a> --}}
          </div>
          <div class="card-footer">
            <a :href=`{{route('show-menu','')}}/${user.id}` class="btn btn-primary">Scopri il Menu</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

@endsection
