<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plan;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
    $name = $faker->text(50);
    return [
        'name' => $name,
        'price' => $faker->numberBetween(50, 250),
        'description' => $faker->sentence
    ];
});
