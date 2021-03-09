<?php

use Illuminate\Database\Seeder;

use App\Order;
use App\Dish;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Order::class, 10)
       -> create()
       -> each(function($order) { //$order (posso chiamarlo come voglio) corrisponde all'iesimo ordine. 
          // collegamento many to many
         $dishes = Dish::inRandomOrder() -> limit(rand(1,5)) -> get(); //creiamo una collezione da 1 a 5 elementi
         $order -> dishes() -> attach($dishes); //associo gli ordini ai piatti
         
         //Per ogni ordine prendo in ordine casuale un numero compreso tra 1 e 5 di piatti, me li faccio restituire, li associo con l'iesimo ordine e di conseguenza ogni ordine sarà associato a un numero random di piatti tra 1 e 5
       });
    }
}
