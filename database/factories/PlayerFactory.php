<?php

use Faker\Generator as Faker;

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

$factory->define(App\Player::class, function (Faker $faker) {
    $user = new App\User();
    $user = factory(App\User::class)->create();
    return [
        'first name' => $faker->name,
        'last name' => $faker->name,
        'id_user' => $user->id,
        'email' => $user->email
    ];
});
