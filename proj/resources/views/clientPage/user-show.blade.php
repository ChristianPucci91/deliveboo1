<!-- estende da main-layout -->
@extends('layouts.main-layout')

@section('contenuto-pagina')

  <div class="row">
    {{-- <h1>Ecco il nostro menu:</h1> --}}
    <img src="{{ $user -> img}}" alt="" style="min-width: 100vw">
    @foreach ($user -> dishes as $dish)
      <div v-if="{{ $dish -> visible}} == 1" class="col-sm-6 mb-4">
        <div class="card rounded bg-light">
          <div class="card-body">
            <h2 class="card-title text-center display-3"><em>{{$dish -> name}}</em></h2>
            <p class="card-text">Ingredienti: {{$dish -> ingredients}}</p>
            {{-- <p class="card-text">Prezzo: {{$dish -> price / 100}}&euro;</p> --}}
            <p class="card-text">Prezzo: {{$dish -> price}}&euro;</p>
            {{-- <a v-if="{{ $dish -> visible}} == 1" href="{{ route('home')}}" class="btn btn-primary float-right"><i class="fas fa-shopping-cart"></i> Aggiungi al carrello</a> --}}
            <a v-if="{{ $dish -> visible}} == 1" href="{{ route('cart.add', $dish->id)}}" class="btn btn-primary float-right"><i class="fas fa-shopping-cart"></i> Aggiungi al carrello</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  {{-- @import ('vue/dist/vue.min.js')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
    (function($){
      window.onbeforeunload = function(e){
      window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
      };
      $.maintainscroll = function() {
      if(window.name.indexOf('[') > 0)
      {
      var parts = window.name.split('[');
      window.name = $.trim(parts[0]);
      window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
      }
      };
      $.maintainscroll();
      })(jQuery);
    </script> --}}
@endsection
