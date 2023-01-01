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
        Schema::create('nilai_rapors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pendaftar');
            $table->integer('indo_1');
            $table->integer('indo_2');
            $table->integer('indo_3');
            $table->integer('indo_4');
            $table->integer('indo_5');
            $table->integer('eng_1');
            $table->integer('eng_2');
            $table->integer('eng_3');
            $table->integer('eng_4');
            $table->integer('eng_5');
            $table->integer('mtk_1');
            $table->integer('mtk_2');
            $table->integer('mtk_3');
            $table->integer('mtk_4');
            $table->integer('mtk_5');
            $table->integer('ipa_1');
            $table->integer('ipa_2');
            $table->integer('ipa_3');
            $table->integer('ipa_4');
            $table->integer('ipa_5');
            $table->integer('ips_1');
            $table->integer('ips_2');
            $table->integer('ips_3');
            $table->integer('ips_4');
            $table->integer('ips_5');
            $table->decimal('mean')->nullable();
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
        Schema::dropIfExists('nilai_rapors');
    }
};
