<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrangTua>
 */
class OrangTuaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public static $id_pendaftar  = 0;

    public function definition()
    {
        $pendidikan = [
            'tidak_sekolah',
            'sd',
            'smp',
            'sma',
            'd1',
            'd2',
            'd3',
            'd4/s1',
            's2',
            's3'
        ];

        $pekerjaan = [
            'tidak_bekerja',
            'nelayan',
            'petani',
            'peternak',
            'pns',
            'karyawan_swasta',
            'wiraswasta',
            'wirausaha',
            'buruh',
            'pensiunan'
        ];

        self::$id_pendaftar++;
        
        return [
            "id_pendaftar" => self::$id_pendaftar,
            "nama_ayah" => fake()->name(),
            "tahun_lahir_ayah" => mt_rand(1960, 1985),
            "pendidikan_ayah" => $pendidikan[mt_rand(0,sizeof($pendidikan)-1)],
            "pekerjaan_ayah" => $pekerjaan[mt_rand(0,sizeof($pekerjaan)-1)],
            "penghasilan_bulanan_ayah" => 'penghasilan_' . strval(mt_rand(1, 5)),
            "nama_ibu" => fake()->name(),
            "tahun_lahir_ibu" => mt_rand(1960, 1985),
            "pendidikan_ibu" => $pendidikan[mt_rand(0,sizeof($pendidikan)-1)],
            "pekerjaan_ibu" => $pekerjaan[mt_rand(0,sizeof($pekerjaan)-1)],
            "penghasilan_bulanan_ibu" => 'penghasilan_' . strval(mt_rand(1, 5)),
            // "nama_wali" => fake()->name(),
            // "tahun_lahir_wali" => mt_rand(1960, 1985),
            // "pendidikan_wali" => $pendidikan[mt_rand(0,sizeof($pendidikan)-1)],
            // "pekerjaan_wali" => $pekerjaan[mt_rand(0,sizeof($pekerjaan)-1)],
            // "penghasilan_bulanan_wali" => 'penghasilan_' . strval(mt_rand(1, 5)),
        ];
    }
}
