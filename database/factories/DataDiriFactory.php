<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataDiri>
 */
class DataDiriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public static $id_akun  = 0;
    public function definition()
    {
        self::$id_akun++;
        $gender = ['P', 'L'];
        return [
            'id_akun' => self::$id_akun,
            'nama_lengkap' => fake()->name(),
            'jenis_kelamin' => $gender[mt_rand(0,1)],
            'nisn' => strval(mt_rand(1000000000,9999999999)),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date('Y_m_d'),
            'tinggi_badan' => mt_rand(120, 200),
            'berat_badan' => mt_rand(35, 70),
            'agama' => 'islam',
            'kewarganegaraan' => 'wni',
            'nomor_handphone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'jumlah_saudara_kandung' => mt_rand(0, 8),
            'foto' => 'https://source.unsplash.com/600x800?male'
        ];
    }
}
