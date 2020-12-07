<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\SIGA\Acl\Permission::class, function (Faker $faker) {
    return [
        'created_at' => $faker->dateTimeBetween( sprintf('-%s month', rand(0, 24))),
    ];
});
