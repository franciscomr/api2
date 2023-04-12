<?php

namespace Database\Factories\Catalog;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catalog\Organization;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalog\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Organization::class;

    public function definition(): array
    {
        return [
        'name'=> $this->faker->word(),
        'businessName'=> $this->faker->word,
        'address'=> $this->faker->address(),
        'city'=> $this->faker->city(),
        'state'=> $this->faker->state(),
        'postalCode'=> $this->faker->numberBetween(10000, 99999),
        'createdBy'=> $this->faker->name,
        'updatedBy'=> $this->faker->name,
        ];
    }
}
