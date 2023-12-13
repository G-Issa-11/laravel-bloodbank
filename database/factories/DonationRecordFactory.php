<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donor;
use App\Model;
use App\Staff;
use App\Donation;
use App\BloodGroup;
use Faker\Generator as Faker;

$factory->define(Donation::class, function (Faker $faker) {
    $bloodGroupIds = BloodGroup::pluck('id')->toArray();
    $donorIds = Donor::pluck('id')->toArray();
    $staffIds = Staff::pluck('id')->toArray();
    return [
        'donor_id' => $faker->randomElement($donorIds),
        'staff_id' => $faker->randomElement($staffIds),
        'bloodgroup_id' => $faker->randomElement($bloodGroupIds),
        'donation_date' => $faker->date,
        'units_donated' => $faker->randomNumber(2),
    ];
});
