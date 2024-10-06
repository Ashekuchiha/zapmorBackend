<?php

namespace Database\Seeders;

use App\Models\ServiceLocation;
use Illuminate\Database\Seeder;

class ServiceLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceLocation::factory()->count(2)->create(); // Create 10 records
    }
}
