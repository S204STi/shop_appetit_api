<?php

use Carbon\Carbon;

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
      'email' => $faker->safeEmail,
      'password' => $faker->password,
      // 'password' => $password ?: $password = bcrypt('secretsquirrel'),
      'postalCode' => $faker->postcode,
      'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
      'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});

$factory->define(App\Recipe::class, function (Faker\Generator $faker){
  return [
    'title' => $faker->company,
    'description' => $faker->sentences($nb = 1, $asText = false),
    'ingredients' => $faker->sentences($nb = 5, $asText = false),
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  ];
});
