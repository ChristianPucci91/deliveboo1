@extends('layouts.main-layout')
@section('contenuto-pagina')

  <div class="container">

    {{-- Back to Typologies button --}}
    <div v-if="showUser" @click="showUser = !showUser">
        <i class="fas fa-times"></i>
    </div>

    <section>
        <div class="row">
            {{-- typology container --}}
            <div class="btn btn-primary m-4" v-for="typology in allTypologies" @click="getRestaurant(typology.id)" v-if="!showUser" >
              <li>
                @{{typology.type}}
              </li>
              <br>
            </div>
        </div>

        {{-- restaurant container --}}
        <a v-for="user in userArray" :href=`{{route('show-menu','')}}/${user.id}`>
            <div  v-if="showUser">
                @{{user.name}}
            </div>
        </a>

    </section>
@endsection
