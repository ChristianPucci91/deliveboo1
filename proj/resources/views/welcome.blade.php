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

<section>
  <div class="container">
    <h2>La selezione di Booliveroo</h2>
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="" alt="Not found image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Find</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="" alt="Not found image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Find</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="" alt="Not found image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Find</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="" alt="Not found image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Find</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="" alt="Not found image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Find</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card">
          <img class="card-img-top" src="" alt="Not found image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Find</a>
          </div>
        </div>
      </div>
    </div>

</section>

@endsection

<style>
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">DeliveBoo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- RIVEDERE IL RESPONSIVE -->
                @if (Route::has('login'))
                    <div class="top-right links navbar-nav mr-auto">
                        @auth
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
            </nav>
    </body>
</html>
