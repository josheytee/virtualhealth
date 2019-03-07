<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illfacuminate\Database\Eloquent\Factory $factory */
$factory->define(VirtualHealth\Chat::class, function (Faker\Generator $faker) {
    $min = 1;
    $max = 30;
    return [
        'user_id' => $faker->numberBetween($min, $max),
        'doctor_id' => $faker->numberBetween($min, $max),
        'message' => $faker->text(150),
        'read' => $faker->boolean,
    ];
});
