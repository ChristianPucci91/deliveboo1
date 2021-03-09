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
                <td>
                    {{-- {{$item->price}} --}}
                    {{Cart::session('_token')->get($item->id) -> getPriceSum()}}
                </td>
                <td>
                    <form action="{{route('cart.update', $item->id)}}">
                        <input name ="quantity" type="number" value = {{$item->quantity}}>
                        <input type="submit" value = 'save'>
                    </form>    

                </td>
                <td>
                    <a href="{{route('cart.destroy', $item -> id)}}">Delete</a>
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
</table>

<h3>
    Total Price: $ {{\Cart::session('_token')->getTotal()}}
</h3>

<a class="btn btn-primary" href="#" role="button">Proceed to checkout</a>

{{-- {{dd(\Cart::session('_token')->getContent())}} --}}
@endsection
