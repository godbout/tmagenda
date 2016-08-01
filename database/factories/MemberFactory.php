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

$factory->define(App\Member::class, function (Faker\Generator $faker) {
    return [
        'tm_id' => $faker->randomNumber,
        'fullname' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'pag' => $faker->boolean,
    ];
});
