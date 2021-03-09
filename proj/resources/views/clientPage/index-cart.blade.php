@extends('layouts.main-layout')

@section('contenuto-pagina')

<h2>Il tuo carrello</h2>

<table>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Prezzo</th>
                <th>Quantità</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
@foreach ($cartItems as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <input type="number" value = {{$item->quantity}}>
                </td>
                <td>
                    <a href="{{route('cart.destroy', $item -> id)}}">Delete</a>
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
</table>

{{-- {{dd(\Cart::session('_token')->getContent())}} --}}
@endsection
