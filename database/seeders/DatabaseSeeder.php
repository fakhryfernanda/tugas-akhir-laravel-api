<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Alamat;
use App\Models\DataAwal;
use App\Models\DataDiri;
use App\Models\OrangTua;
use App\Models\AkunAdmin;
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
        $banyak_data = 20;

        AkunAdmin::factory($banyak_data)->create();
        AkunPendaftar::factory($banyak_data)->create();
        DataAwal::factory($banyak_data)->create();
        DataDiri::factory($banyak_data)->create();
        Alamat::factory($banyak_data)->create();
        BerkasPendukung::factory($banyak_data)->create();
        OrangTua::factory($banyak_data)->create();
        NilaiRapor::factory($banyak_data)->create();
    }
}
