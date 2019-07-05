<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Survivor::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween(10, 90),
        'gender' => $faker->randomElement(['male', 'female']),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'infected' => $faker->boolean(50),
    ];
});
