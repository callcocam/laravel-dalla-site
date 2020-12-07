<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use SIGA\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->word,
        'date_birth' => $faker->date('Y-m-d', sprintf('-%s years', rand(20, 65))),
        'username' => $faker->word,
        'gender' => [  'male','femele'][rand(0,1)],
        'status' => [  'deleted','draft','published'][rand(1,2)],
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
        'created_at' => $faker->dateTimeBetween( sprintf('-%s month', rand(0, 24))),
        'remember_token' => Str::random(10),
    ];
});
