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
        Schema::create('range_datas', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe', ['ketinggian', 'suhu']);
            $table->string('key');
            $table->enum('value', ['sangat-rendah', 'rendah', 'sedang', 'tinggi', 'sangat-tinggi', 'tinggi-sekali', 'sangat-sejuk', 'sejuk', 'normal', 'panas', 'sangat-panas', 'panas-sekali']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('range_datas');
    }
};
