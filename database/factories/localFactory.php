<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\local::class, function (Faker $faker) {
    return [
        'pais'=> $faker->nation,
        'uf'=>$faker->statates,
        'cidade'=>$faker->city,
        'praia'=>$faker->Beach,
        
        


    ];
});
