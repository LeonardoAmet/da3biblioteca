<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->sentence(3,false),
        'code'=>$faker->randomNumber(4,false),
        'num'=>$faker->randomNumber(4,false),
    ];
});
