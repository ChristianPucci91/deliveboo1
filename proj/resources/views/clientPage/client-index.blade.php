@extends('layouts.main-layout')
@section('contenuto-pagina')


  <div class="container .mt-4" id="grand">

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

        </div>



        {{-- <label for="" v-for="typology in allTypologies">
          <input type="checkbox" name="" value="" @click="getRestaurant(typology.id)">
          @{{typology.type}}
        </label> --}}



        {{-- restaurant container --}}
        <a class="card" id="restcard" v-for="user in userArray" :href=`{{route('show-menu','')}}/${user.id}`>
            <div class="card-body" id="user-name">
                @{{user.name}}
                {{-- @{{user.pivot.typology_id}} --}}
            </div>
        </a>



    </section>
@endsection
