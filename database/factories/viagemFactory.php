<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\viagem::class, function (Faker $faker) {
    return [
        'data_ida'=> $faker->date,
        'data_volta'=>$faker->date,

    ];
});
