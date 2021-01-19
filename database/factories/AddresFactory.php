<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\SIGA\Addres::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'zip' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'street' => $faker->streetAddress,
        'district' => $faker->streetName,
        'number' => $faker->buildingNumber                      ,
        'complement' =>  $faker->secondaryAddress,
        'created_at' => $faker->dateTimeBetween( sprintf('-%s month', rand(0, 24))),
        'created_at' => date("Y-m-d H:i:s"),
    ];
});
