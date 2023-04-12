<?php

namespace Database\Factories\Catalog;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'department_id' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->word,
            'createdBy' => $this->faker->name,
            'updatedBy' => $this->faker->name,
        ];
    }
}
