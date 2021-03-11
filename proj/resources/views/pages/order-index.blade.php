@extends('layouts.main-layout')

@section('contenuto-pagina')

    <a href="{{route('home')}}" class="btn btn-primary mb-2">Torna alla home</a>
    <h1 class="text-center display-4 mb-3"><em>ORDINI ricevuti:</em></h1>

    <div class="row">
        @foreach ($user -> dishes as $dish)
            @foreach ($dish -> orders as $order)
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header text-center display-5 text-primary">
                            Cliente: {{$order -> name}} {{$order -> lastname}}
                        </div>
                        <div class="card-body text-dark">
                            <h5 class="card-title text-center">Informazioni utili:</h5>
                            <p class="card-text">
                                <u><strong>Indirizzo:</strong></u> {{$order -> address}}
                            </p>
                            <p class="card-text">
                                <u><strong>Telefono:</strong></u> {{$order -> mobile}}
                            </p>
                            <p class="card-text">
                                <u><strong>Totale ordine:</strong></u> {{$order -> price}}&euro;
                            </p>
                        </div>
                        <div class="card-footer text-center text-primary">
                            Data dell'ordine: {{$order -> created_at}}
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
    
    {{-- <h1>Orders Chart</h1>
    <div id="chart" style="height: 300px;"></div>

    @push('js')
    <script>
        const orderChart = new Chartisan({
          el: '#chart',
          url: "@chart('order_chart')",
        });
      </script>
    @endpush --}}

@endsection
