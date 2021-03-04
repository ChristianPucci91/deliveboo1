<?php

use Illuminate\Database\Seeder;

use App\Typology;
use App\User;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $typologies = [
          'Giapponese',
          'Asiatico',
          'Brasiliano',
          'Cinese',
          'Colazione',
          'Dolci e dessert',
          'Fast food',
          'Giapponese',
          'Indiano',
          'Italiano',
          'Mediterraneo',
          'Messicano',
          'Pizzeria',
          'Sushi',
          'Libanese',
        ];
        $logos = [
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
          "https://www.italiaatavola.net/images/contenutiarticoli/Sushi-salute-quali-rischi-Anche-riso-puo-far-danni-1.jpg",
        ];

        // foreach ($typologies as $typology) {
        //   $newtypology = new Typology();
        //   $newtypology -> type = $typology;
        //   $newtypology -> save();
        //
        //   $users = User::inRandomOrder()
        //   ->limit(rand(1,5)) ->get();
        //   $newtypology -> users() -> attach($users);
        // }

        for ($i=0; $i < 15 ; $i++) {
          $newtypology = new Typology();
          $newtypology -> type = $typologies[$i];
          $newtypology -> logo = $logos[$i];
          $newtypology -> save();

          $users = User::inRandomOrder()
          ->limit(rand(1,5)) ->get();
          $newtypology -> users() -> attach($users);
        }

        // factory(Typology::class, 10)->create()->each(function ($typology) {
        //     $user = User::inRandomOrder()->limit(rand(1, 5))->get();
        //     $typology->users()->attach($user);
        // });

    }
}
