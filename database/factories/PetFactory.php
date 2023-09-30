<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id_user' => fake()->numberBetween(1,20),
            'id_sexo' => fake()->numberBetween(3,4),
            'id_porte' => fake()->numberBetween(1,3),
            'id_raca'  => fake()->numberBetween(1,3),
            'id_cor'  => fake()->numberBetween(1,3),
            'id_historico' => fake()->numberBetween(1,10),
            'nome' => fake()->name(),
            'dt_nascimento' => fake()->date(),
            'deficiencia' => fake() -> word(),
            'castrado' => fake() -> numberBetween(0,1),
            'peso' => fake()->numberBetween(1,15),
            'vacina' => fake()->word()

        ];
    }
}
