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

  public function getTypologies(){
     $typologies = Typology::all();
     return response() -> json($typologies);
 }
 public function getUsers($id){
     $users = Typology::findOrFail($id) -> users() -> get() ;

     // foreach ($users as $user) {
     //
     //   foreach ($user -> typologies as $typology) {
         // var_dump($typology -> id);
         // $type = [];
         // $type .= $typology -> id;
         // $type[] = $typology -> id;
          // var_dump($user . $type[0]);
       // }
       // $ristorante = $user -> name;
       // dd($ristorante);
     // }

     return response() ->json($users);
 }
 public function getRandUsers(){
    $users = User::all();
    return response() ->json($users);
 }

}
