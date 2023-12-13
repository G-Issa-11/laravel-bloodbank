<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donor;
use App\Model;
use App\BloodGroup;
use Faker\Generator as Faker;

$factory->define(Donor::class, function (Faker $faker) {
    // Assuming bloodgroups table is already populated
    $bloodGroupIds = BloodGroup::pluck('id')->toArray();

    return [
        'personal_id' => $faker->unique()->uuid,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['male', 'female', 'other']),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'bloodgroup_id' => $faker->randomElement($bloodGroupIds),
        'last_donation_date' => $faker->date,
    ];
});
