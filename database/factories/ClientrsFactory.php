<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clientr;
use Faker\Generator as Faker;

$factory->define(Clientr::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(2, true),
        'email'=>$faker->email(),
        'phone'=>$faker->number(7, true)
    ];
});
