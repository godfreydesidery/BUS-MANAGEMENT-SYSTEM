<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            //'code' => $this->faker->name,
            //'name' => $this->faker->name,
            //'brand_name' => $this->faker->name,
            //'contact_name' => $this->faker->name,
            //'email' => $this->faker->email,
            //'website' => $this->faker->url
        ];
    }
}
