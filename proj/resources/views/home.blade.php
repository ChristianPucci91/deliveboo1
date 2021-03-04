@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            </div>
            <div class="card">

              <div class="card-header">
                <h1>Benvenuto {{ $user -> name}}</h1>
                <p>Qui trovi i tuoi dati di registrazione</p>
                <ul class="card-body">
                  <li>Name:{{ $user -> name }}</li>
                  <li>Address:{{ $user -> indirizzo }}</li>
                  <li>Mail:{{ $user -> email }}</li>
                  <li>Piva:{{ $user -> piva }}</li>


                  <br><br>

                  <br><br>
                  @foreach ($user -> typologies as $typology)
                     <li>{{ $typology -> type}}</li>
                  @endforeach
                </ul>
                <h3>Aggiungi una foto al tuo ristorante</h3>
                <form class="" action="{{ route('upload-img')}}"
                                method="post"  enctype="multipart/form-data">

                      @csrf
                      @method('post')

                      <input type="file" class="form-control border-0" name="img" value="">

                      <input type="submit" class="mt-5 btn btn-primary" name="" value="Update">
                      <a href="{{ route('clear-img')}}" class="btn btn-danger">Delete</a>

                    </form>

              </div>
              @if (Auth::user()-> img)

                <h4>User icon</h4>

                <img src="{{ asset('storage/img/' . Auth::user() -> img) }}">

              @endif

            </div>
        </div>
    </div>
</div>
@endsection
