<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Recipient;
use App\BloodGroup;
use Faker\Generator as Faker;

$factory->define(Recipient::class, function (Faker $faker) {
    // Assuming bloodgroups table is already populated
    
    $bloodGroupIds = BloodGroup::pluck('id')->toArray();

    return [
        'recipient_id' => $faker->unique()->uuid,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['male', 'female', 'other']),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'contact_number' => $faker->phoneNumber,
        'bloodgroup_id' => $faker->randomElement($bloodGroupIds),
        'date_of_birth' => $faker->date,
    ];
});
