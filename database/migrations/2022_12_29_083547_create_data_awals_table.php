<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_awals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pendaftar')->default(1);
            $table->string('jalur');
            $table->string('jurusan');
            $table->string('sekolah_asal');
            $table->string('nomor_ijazah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_awals');
    }
};
