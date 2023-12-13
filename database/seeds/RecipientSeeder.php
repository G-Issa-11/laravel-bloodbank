<?php


use App\Recipient;
use Illuminate\Database\Seeder;

class RecipientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Recipient::class, 5)->create();
    }
}
