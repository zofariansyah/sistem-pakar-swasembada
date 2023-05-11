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
            $table->string('kelembapan');
            $table->string('intensitas_penyinaran');
            $table->string('curah_hujan');
            $table->string('ph_tanah');
            $table->string('suhu');
            $table->string('ketinggian');
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
