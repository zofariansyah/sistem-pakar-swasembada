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
        Schema::create('rules_fuzzys', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->enum('ketinggian', ['sangat-rendah', 'rendah', 'sedang', 'tinggi', 'sangat-tinggi']);
            $table->enum('suhu', ['sangat-sejuk', 'sejuk', 'normal', 'panas', 'sangat-panas']);

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
        Schema::dropIfExists('rules_fuzzy');
    }
};
