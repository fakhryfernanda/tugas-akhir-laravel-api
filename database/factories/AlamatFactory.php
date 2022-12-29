<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alamat>
 */
class AlamatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id_pendaftar" => mt_rand(1,100),
            "alamat_jalan" => fake()->streetAddress(),
            "kelurahan" => fake()->streetName(),
            "kecamatan" => fake()->streetName(),
            "kota" => fake()->city(),
            "kode_pos" => fake()->postcode(),
        ];
    }
}
