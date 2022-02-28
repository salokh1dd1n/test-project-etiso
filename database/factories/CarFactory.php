<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        return [
            'name' => $this->faker->vehicleBrand,
            'type' => $this->faker->randomElement(['big', 'small', 'medium']),
        ];
    }
}
