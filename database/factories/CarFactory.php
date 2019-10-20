<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'car_company' => $faker->company,
        'model' => $faker->word,
        'price' => $faker->numberBetween(900, 99999)
    ];
});
