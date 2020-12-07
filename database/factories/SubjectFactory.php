<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subject;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'name' => $name = Str::camel($faker->word),
        'slug' => Str::slug($name),
        'status' => [  'deleted','draft','published'][rand(1,2)],
        'created_at' => $faker->dateTimeBetween( sprintf('-%s month', rand(0, 24))),
    ];
});
