<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataAwal>
 */
class DataAwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jurusan = ['ipa', 'ips'];

        return [
            "id_pendaftar" => mt_rand(1,100),
            "jalur" => "akademik",
            "jurusan" => $jurusan[mt_rand(0,1)],
            "sekolah_asal" => 'SMPN ' . strval(mt_rand(1, 40)) . ' Bekasi',
            "nomor_ijazah" => 'DN-' . strval(mt_rand(10, 99)) . ' DI-' . strval(mt_rand(1111111, 9999999))
        ];
    }
}
