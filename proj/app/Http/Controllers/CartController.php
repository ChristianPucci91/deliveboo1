<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\User;

class CartController extends Controller
{
    public function add(Dish $dish) {
        // dd($dish);
        \Cart::session('_token')->add(array(
            'id' => $dish->id,
            'name' => $dish->name,
            'price' => $dish->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $dish
        ));
        return redirect() -> route('cart.index');
    }
    public function index()
    {
        $cartItems = \Cart::session('_token') -> getContent();
        return view('clientPage.index-cart', compact('cartItems'));
    }
    public function destroy($itemId) 
    {
        \Cart::session('_token')->remove($itemId);
        return back();
    }
}
