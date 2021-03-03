<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Typology;

class UserController extends Controller
{
  public function show($id) {

    $user = User::findOrFail($id);

    return view('clientPage.user-show',compact('user'));
  }

  public function getAllTypologies(){
     $typo = Typology::all();
     return response() -> json($typo);
 }
 public function getTypologyRestaurants($id){
     $rests = Typology::findOrFail($id) -> users() -> get() ;
     return response() ->json($rests);
 }

}
