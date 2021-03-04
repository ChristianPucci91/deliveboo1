<!-- estende da main-layout -->
@extends('layouts.main-layout')

       {{------------------------- CODICE DA RIVEDERE PER ORDINI --}}

      {{-- <h2>ORDINI:</h2>

      @foreach ($user -> dishes as $dish)

        @foreach ($dish -> orders as $order)

        <p>

          ID Ordine: {{ $order -> id }} <br>

          Nome Cliente: {{ $order -> name }} {{ $order -> lastname }} <br>

          Data Ordine: {{ $order -> created_at }}

          <br>

          @php
            $dishPrice = 0;
          @endphp

          @foreach ($order -> dishes as $dish)

           @php

             $dishPrice = $dishPrice + $dish -> price;

           @endphp

             {{ $dish -> price}} +

          @endforeach
           prezzo da pagare: {{ $dishPrice }}
       </p>

        ----------------------------------

        @endforeach

      @endforeach --}}


@section('contenuto-pagina')
  <ul>

    @foreach ($user -> dishes as $dish)
      <User
      v-if="{{ $dish -> visible}} == 1"

      :id = "'{{$dish -> id}}'"
      :name = "'{{$dish -> name}}'"
      :ingredients = "'{{$dish -> ingredients}}'"
      :visible = "'{{$dish -> visible }}'"

      ></User>
      <a v-if="{{ $dish -> visible}} == 1" href="{{ route('home')}}"><i class="fas fa-shopping-cart"></i>Aggiungi al carrello</a>

    @endforeach

  </ul>
@endsection
