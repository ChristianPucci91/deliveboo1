@extends('layouts.main-layout')
@section('contenuto-pagina')

  <div class="container .mt-4" id="grand">

    {{-- Back to Typologies button --}}
    <div v-if="showUser" @click="showUser = !showUser">
        <i class="fas fa-times"></i>
    </div>

    <section>
        <div class="row row-cols-4">
            {{-- typology container --}}
            {{-- <div class="btn btn-primary m-4" v-for="typology in allTypologies" @click="getRestaurant(typology.id)" v-if="!showUser" >
              <li>
                @{{typology.type}}
              </li>
              <br>
            </div> --}}
            <div class="card" v-for="typology in allTypologies" style="width: 18rem;" v-if="!showUser">
              <img class="card-img-top" src=".../100px180/" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">@{{typology.type}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary" @click="getRestaurant(typology.id)">Go somewhere</a>
              </div>
            </div>
        </div>

 

        {{-- restaurant container --}}
        <a class="card" v-for="user in userArray" :href=`{{route('show-menu','')}}/${user.id}`>
            <div  v-if="showUser" class="card-body">
                @{{user.name}}
            </div>
        </a>



    </section>
@endsection
