<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NilaiRapor>
 */
class NilaiRaporFactory extends Factory
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
        $payload = [
            "id_pendaftar" => self::$id_pendaftar,
            "indo_1" => mt_rand(75, 100),
            "indo_2" => mt_rand(75, 100),
            "indo_3" => mt_rand(75, 100),
            "indo_4" => mt_rand(75, 100),
            "indo_5" => mt_rand(75, 100),
            "eng_1" => mt_rand(75, 100),
            "eng_2" => mt_rand(75, 100),
            "eng_3" => mt_rand(75, 100),
            "eng_4" => mt_rand(75, 100),
            "eng_5" => mt_rand(75, 100),
            "mtk_1" => mt_rand(75, 100),
            "mtk_2" => mt_rand(75, 100),
            "mtk_3" => mt_rand(75, 100),
            "mtk_4" => mt_rand(75, 100),
            "mtk_5" => mt_rand(75, 100),
            "ipa_1" => mt_rand(75, 100),
            "ipa_2" => mt_rand(75, 100),
            "ipa_3" => mt_rand(75, 100),
            "ipa_4" => mt_rand(75, 100),
            "ipa_5" => mt_rand(75, 100),
            "ips_1" => mt_rand(75, 100),
            "ips_2" => mt_rand(75, 100),
            "ips_3" => mt_rand(75, 100),
            "ips_4" => mt_rand(75, 100),
            "ips_5" => mt_rand(75, 100),
        ];

        $mean = array_sum($payload)/count($payload);
        $payload['mean'] = $mean;

        return $payload;
    }
}
