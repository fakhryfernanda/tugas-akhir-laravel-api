<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AkunPendaftar;
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
    }
}
