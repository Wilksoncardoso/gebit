<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\prancha::class, function (Faker $faker) {
    return [
        'tamanho'=> $faker->size,

    ];
});
