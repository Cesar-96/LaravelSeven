<?php

use Illuminate\Database\Seeder;
use Illuminate\Contracts\Container\BindingResolutionException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UserSeeder::class);
        factory(\App\User::class,100)->create();

//        $faker = \Faker\Factory::create();
//        for($i=1;$i<=100;$i++){
//            \App\User::create(
//                [
//                   'name'=>$faker->name,
//                   'email'=>$faker->email,
//                    'password'=>bcrypt('password'),
//                ]);

//        }
    }
}
