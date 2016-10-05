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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
      'email' => $faker->safeEmail,
      'password' => $password ?: $password = bcrypt('secretsquirrel'),
      'postalCode' => $faker->postcode
    ];
});

$factory->define(App\Recipe::class, function (Faker\Generator $faker){
  return [
    'title' => $faker->company,
    'img_url' => 'https://www.placecage.com/200/300',
    'description' => $faker->sentences($nb = 3, $asText = false),
    'ingredients' => $faker->sentences($nb = 3, $asText = false)
  ];
});
