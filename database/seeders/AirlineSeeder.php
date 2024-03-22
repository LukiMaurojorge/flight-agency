<?php

namespace Database\Seeders;

use Database\Factories\AirlineFactory;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AirlineFactory::new()->count(15)->create();
    }
}
