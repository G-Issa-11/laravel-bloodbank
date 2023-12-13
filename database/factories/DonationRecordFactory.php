<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donor;
use App\Model;
use App\Staff;
use App\BloodGroup;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $bloodGroupIds = App\Models\BloodGroup::pluck('id')->toArray();
    return [
        'donor_id' => function () {
            return factory(\App\Models\Donor::class)->create()->id;
        },
        'staff_id' => function () {
            return factory(\App\Models\Staff::class)->create()->id;
        },
        'bloodgroup_id' => $faker->randomElement($bloodGroupIds),
        'donation_date' => $faker->date,
        'units_donated' => $faker->randomNumber(2),
    ];
});
