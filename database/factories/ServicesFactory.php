<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
{
    protected $model = Services::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'featured' => $this->faker->boolean,
            'icon' => null, // Placeholder for file uploads
        ];
    }
}
