<?php

use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloodGroups = [
            'A+',
            'A-',
            'B+',
            'B-',
            'AB+',
            'AB-',
            'O+',
            'O-',
        ];

        foreach ($bloodGroups as $bloodGroup) {
            DB::table('bloodgroups')->insert([
                'bloodGroupName' => $bloodGroup,
            ]);
        }
    }
}
