<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	$genders = ['m','f'];
    return [
        'name' => $faker->name,
        'birthdate' => $faker->dateTimeBetween('-40 years', '-20 years'),
        'gender' => $genders[$faker->numberBetween(0,1)],
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'infected' => $faker->boolean(50)
    ];
});
