<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'dt_nascimento' => fake()->date(),
            'email' => fake()->unique()->email(),
            'cpf' => fake()->numberBetween(11111111111,99999999999),
            'endereco' => fake()->address(),
        ];
    }
}
