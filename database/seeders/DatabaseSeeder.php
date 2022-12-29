<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alamat;
use App\Models\DataAwal;
use App\Models\DataDiri;
use App\Models\OrangTua;
use App\Models\NilaiRapor;
use App\Models\AkunPendaftar;
use App\Models\BerkasPendukung;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AkunPendaftar::query()->create([
            "nik" => "3275092303000022",
            "nomor_pendaftaran" => "12345678",
            "email" => "mff023@gmail.com",
            "password" => "1234",
        ]); 

        DataAwal::factory(100)->create();
        DataDiri::factory(100)->create();
        Alamat::factory(100)->create();
        BerkasPendukung::factory(100)->create();
        OrangTua::factory(100)->create();
        NilaiRapor::factory(100)->create();
    }
}
