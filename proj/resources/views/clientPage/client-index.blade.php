@extends('layouts.main-layout')
@section('contenuto-pagina')

{{-- <div class="container1"> --}}
  
  <div class="container vh-80 mb-5 .mt-4" id="grand"> 

    {{-- Back to Typologies button --}}
    <div v-if="showUser" @click="showUser = !showUser">
      <i class="fas fa-arrow-left" id="backArrow"></i>
    </div>

    <section>
        {{-- row --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
          {{-- colonna --}}
          <div class="col mb-4" v-for="typology in allTypologies" style="width: 18rem;" v-if="!showUser">
            {{-- card tipologia --}}
            <div class="card text-center h-100">
              {{-- logo tipologia --}}
              <img class="card-img-top" :src="typology.logo" alt="Card image cap">

              <div class="card-body">
                {{-- nome tipologia --}}
                <h5 class="card-title">@{{typology.type}}</h5>
                {{-- bottone per vedere ristoratnti --}}
                <button type="button" class="btn btn-primary" @click="getRestaurant(typology.id)">Scopri i Ristoranti</button>

              </div>

            </div>

          </div>

        </div> {{-- se cancello sto div e lo metto in fondo il footer si aggiusta ma si rompe il resto --}}
        
        {{-- restaurant container --}}
        <a v-if="showUser" class="card" id="restcard" v-for="user in userArray" :href=`{{route('show-menu','')}}/${user.id}`>
            <div class="card-body" id="user-name">
                @{{user.name}}
            </div>
        </a>



    </section>
  </div>
@endsection
