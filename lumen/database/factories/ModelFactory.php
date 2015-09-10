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

/*
 * CHRISSIE'S NOTE:
 * This function was predefined and will not work for us since it
 * most likely will not match the table layout.
 * Leaving it here for reference
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

/*
 * CHRISSIE'S NOTE
 * These functions are made for seeding SCENERY
 *
 * TODO: Needs Story table to work (dependencies)
 */

$factory->define(App\Scenery::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->catchPhrase,
        'description' => $faker->sentence(),
    ];
});