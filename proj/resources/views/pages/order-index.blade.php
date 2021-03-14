@extends('layouts.main-layout')

@section('contenuto-pagina')

  <div class="container order-index text-center">

    <a href="{{route('home')}}" class="btn mb-3 px-5">Torna alla home <i class="fas fa-home"></i></a>
    <h1 class="text-center  mb-3">Ordini Ricevuti</h1>

    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">

        @foreach ($user -> orders as $order)

                <div class="col mb-4 card-group">
                    <div class="card" style="min-width: 30vw">
                        <div class="card-header text-center display-5 text-white bg-dark">
                            Cliente: {{$order -> name}} {{$order -> lastname}}
                        </div>
                        <div class="card-body text-dark text-left">
                            <h5 class="card-title text-center">Informazioni utili:</h5>
                            <p class="card-text">
                                <u><strong>Indirizzo:</strong></u> {{$order -> address}}
                            </p>
                            <p class="card-text">
                                <u><strong>Mail:</strong></u> {{$order -> email}}
                            </p>

                            <u><strong>Piatti Ordinati:</strong></u>

                              @foreach ($order -> dishes as $dish)
                                <p>{{$dish -> name}} {{$dish -> price}}&euro;</p>
                              @endforeach

                            <p class="card-text">
                                <u><strong>Totale ordine:</strong></u> {{$order -> price}}&euro;
                            </p>
                        </div>
                        <div class="card-footer text-center text-white bg-dark">
                            Data dell'ordine: {{$order -> created_at}}
                        </div>
                    </div>
                </div>

        @endforeach
    </div>

  </div>

@endsection
