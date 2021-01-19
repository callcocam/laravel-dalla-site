<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SIGA\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'phone' => $faker->phoneNumber,
        'description' => $faker->text,
        'status' => ['deleted', 'draft', 'published'][rand(1, 2)],
        'updated_at'=>today(),
        'created_at'=>today(),
    ];
});
