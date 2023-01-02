<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AkunAdmin>
 */
class AkunAdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'username' => fake()->username(),
            'password' => 'password',
            'foto' => 'https://source.unsplash.com/1200x1200?male'
        ];
    }
}
