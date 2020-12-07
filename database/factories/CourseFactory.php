<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $difficulty = ['beginner', 'intermediate', 'advanced'];
    $type = ['theory', 'project', 'snippet'];
    return [
        'name' => $name = $faker->sentence,
        'slug' => \Illuminate\Support\Str::slug($name),
        'free' => rand(0, 1),
        'difficulty' => $difficulty[rand(0, 2)],
        'type' => $type[rand(0, 2)],
        'status' => [  'deleted','draft','published'][rand(1,2)],
        'created_at' => $faker->dateTimeBetween( sprintf('-%s month', rand(0, 24))),
    ];
});
