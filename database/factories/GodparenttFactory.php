<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Godparentt>
 */
class GodparenttFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_uno' => $this->faker->name,
            'apellido_uno' => $this->faker->lastName,
            'dpi_uno' => $this->faker->unique()->numberBetween(13),
            'nombre_dos' => $this->faker->name,
            'apellido_dos' => $this->faker->lastName,
            'dpi_dos' => $this->faker->unique()->numberBetween(13),
        ];
    }
}
