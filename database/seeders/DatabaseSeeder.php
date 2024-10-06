<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ServiceLocationSeeder;
use Database\Seeders\ServicesSeeder;
use Database\Seeders\ServicesProviderSeeder;
use Database\Seeders\AppUsersSeeder;
use Database\Seeders\CommissionSetupSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed the User model
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed the ServiceLocation model
        $this->call(ServiceLocationSeeder::class); // Call the ServiceLocationSeeder
        $this->call(ServicesSeeder::class); // Call the ServicesSeeder
        $this->call(ServicesProviderSeeder::class); // Call the ServicesSeeder
        $this->call(AppUsersSeeder::class);
        $this->call(CommissionSetupSeeder::class);
    }
}
