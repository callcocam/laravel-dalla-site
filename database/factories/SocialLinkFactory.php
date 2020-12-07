<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use SIGA\SocialLink;

$factory->define(SocialLink::class, function (Faker $faker) {
    return [
        'name'=>$faker->userName,
        'description'=>$faker->sentence(rand(2,7)),
        'status' => [  'deleted','draft','published'][rand(1,2)]
    ];
});
