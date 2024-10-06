<?php

namespace Database\Factories;

use App\Models\ServicesProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ServicesProviderFactory extends Factory
{
    protected $model = ServicesProvider::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phnnumber' => $this->faker->phoneNumber,
            'profileImage' => 'default.png', // You can change this to an actual path
            'password' => Hash::make('password'),
            'location' => json_encode([['title' => 'Dhaka'], ['title' => 'Cumilla']]),
            'experience' => $this->faker->randomDigitNotNull(),
            'specialization' => 'General Service',
            'status' => 'Active',
            'service' => 'Cooking',
            'certificate' => 'default.pdf', // You can change this to an actual path
        ];
    }
}
