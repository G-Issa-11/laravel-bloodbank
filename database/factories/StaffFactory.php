<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'staff_id' => $faker->unique()->randomNumber(5),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['male', 'female']),
        'email' => $faker->unique()->safeEmail,
        'contact_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'employment_date' => $faker->date,
        'position' => $faker->word,
    ];
});
