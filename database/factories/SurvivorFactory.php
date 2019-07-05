<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Survivor::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween(1, 100),
        'gender' => $faker->randomElement(['male', 'female']),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'items' => $faker->randomElement(['water', 'food', 'medication', 'ammunition']),
        'points' => $faker->numberBetween(1, 4),
    ];
});
