<!-- estende da main-layout -->
@extends('layouts.main-layout')

@section('contenuto-pagina')

<div class="container p-0 d-flex flex-column mb-5">

  <img class="m-auto rounded" src="http://localhost:8000/storage/img/{{$user -> img}}" alt="" style="width: 60%">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-5">
    {{-- <h1>Ecco il nostro menu:</h1> --}}
    {{-- <img src="{{ $user -> img}}" alt="" style="min-width: 100vw"> --}}
    {{-- <img class="m-auto" src="http://localhost:8000/storage/img/%7B%7B $user -> img}}" alt="" style="width: 60%"> --}}
    @foreach ($user -> dishes as $dish)
      <div v-if="{{ $dish -> visible}} == 1" class="col pr-0 pl-0 card-group">

        <div class="card m-2" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$dish -> name}} <span class="text-muted">{{$dish -> price}}&euro;</span> </h5>
            <p class="card-text">{{$dish -> ingredients}}</p>
          </div>
          <div class="card-footer text-center">
            <a v-if="{{ $dish -> visible}} == 1" href="{{ route('cart.add', $dish->id)}}" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Aggiungi al carrello</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</div>
@endsection

  {{-- <script src="{{asset('js/app.js')}}"></script> --}}

  {{-- @import ('vue/dist/vue.min.js')

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
