@extends('layouts.main-layout')
@section('contenuto-pagina')

  <div class="container">

    {{-- Back to Typologies button --}}
    <div v-if="showRestaurant" class="console" @click="showRestaurant = !showRestaurant">
        <i class="fas fa-arrow-left"></i>
    </div>

    <section>
        <div class="row">
            {{-- typology container --}}
            <div class="btn btn-primary m-4" v-for="type in allTypoArray" @click="getRestaurant(type.id)" v-if="!showRestaurant" class="">
              <li>
                @{{type.type}}
              </li>
              <br>
            </div>
        </div>

        {{-- restaurant container --}}
        <a v-for="rest in restaurantArray" :href=`{{route('show-menu','')}}/${rest.id}`>
            <div  class="typologybox" v-if="showRestaurant">
                @{{rest.name}}
            </div>
        </a>

    </section>
@endsection
