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

    public static $id_pendaftar  = 0;

    public function definition()
    {
        self::$id_pendaftar++;
        return [
            "id_pendaftar" => self::$id_pendaftar,
            "alamat_jalan" => fake()->streetAddress(),
            "kelurahan" => fake()->streetName(),
            "kecamatan" => fake()->streetName(),
            "kota" => fake()->city(),
            "kode_pos" => fake()->postcode(),
        ];
    }
}
