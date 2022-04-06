<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joc>
 */
class JocFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nom' => $this->faker->name(),
            'img' => $this->faker->name(),
            'numJugadors' => $this->faker->name(),
            'remember_token' => Str::random(10),
        ];
    }
}
