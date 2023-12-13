<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DonorSeeder::class);
        $this->call(RecipientSeeder::class);
        $this->call(DonationSeeder::class);
        $this->call(StaffSeeder::class);
        
    }
}
