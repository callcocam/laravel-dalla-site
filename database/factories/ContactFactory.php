<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use SIGA\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name'=>$faker->tollFreePhoneNumber,
        'description'=>$faker->sentence(rand(2,7)),
        'status' => [  'deleted','draft','published'][rand(1,2)],
        'created_at' => $faker->dateTimeBetween( sprintf('-%s month', rand(0, 24))),
    ];
});
