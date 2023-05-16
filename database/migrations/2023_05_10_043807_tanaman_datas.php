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
        Schema::create('tanaman_datas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tanaman');
            $table->text('deskripsi_tanaman');
            $table->json('kelembapan');
            $table->json('intensitas_penyinaran');
            $table->json('curah_hujan');
            $table->json('ph_tanah');
            $table->json('suhu');
            $table->json('ketinggian');
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
        Schema::dropIfExists('tanaman_datas');
    }
};
