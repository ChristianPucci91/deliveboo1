<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// inserisco model riferimento
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// inserisco model riferimento e per ogni colonna inserisco dati($faker o altro)

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array (
          'Osteria da Pino','Ristorante La Bussola','Pizzeria da Gianni','Uliveto','Rosa dei venti','Sakura','Burger King','Da Alfredo','Old Wild West','Mc Donalds')),
        'img' => $faker->randomElement($array = array ( 'https://media-cdn.tripadvisor.com/media/photo-s/1a/16/32/e3/wine-room-dari-ristorante.jpg','https://www.aprireazienda.com/wp-content/uploads/2019/11/aprire-un-ristorante-giapponese-1024x683.jpg')),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'indirizzo' => $faker -> streetAddress,
        'piva' => $faker -> unique() -> creditCardNumber,
    ];
});
