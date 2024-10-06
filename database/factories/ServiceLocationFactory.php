<?php

namespace Database\Factories;

use App\Models\ServiceLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceLocationFactory extends Factory
{
    protected $model = ServiceLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'location' => [$this->faker->latitude, $this->faker->longitude],
            'locname' => $this->faker->word,
        ];
    }
}

