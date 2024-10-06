<?php

namespace Database\Seeders;

use App\Models\ServicesProvider;
use Illuminate\Database\Seeder;

class ServicesProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesProvider::factory()->count(2)->create(); // Create 10 records

    }
}
