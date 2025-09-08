<?php

namespace Database\Factories;

use App\Models\Employment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employment>
 */
class EmploymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => fake()->jobTitle,
            'description' => implode("\n\n", fake()->paragraphs(3)),

            'salary'        => fake()->numberBetween(5_000, 150_00),
            'location'      => fake()->city,
            'category'      => fake()->randomElement(Employment::$category),
            'experience'    => fake()->randomElement(Employment::$experience)
        ];
    }
}
