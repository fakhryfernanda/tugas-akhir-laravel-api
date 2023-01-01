<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AkunPendaftar>
 */
class AkunPendaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => mt_rand(1111111111111111, 9999999999999999),
            'nomor_pendaftaran' => mt_rand(11111111, 99999999),
            'email' => fake()->safeEmail(),
            'password' => 'password'
        ];
    }
}
