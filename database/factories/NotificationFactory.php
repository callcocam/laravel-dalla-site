<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use SIGA\Notification;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(rand(2, 7)),
        'status' => ['deleted', 'draft', 'published'][rand(1, 2)]
    ];
});
