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
        Schema::create('berkas_pendukungs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pendaftar');
            $table->string('kis');
            $table->string('kip');
            $table->string('kks');
            $table->string('sktm');
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
        Schema::dropIfExists('berkas_pendukung');
    }
};
