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
        Schema::create('rules_datas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rules');
            $table->unsignedBigInteger('id_tanaman');
            $table->foreign('id_rules')->references('id')->on('rules_fuzzys')->onDelete('cascade');
            $table->foreign('id_tanaman')->references('id')->on('tanaman_datas')->onDelete('cascade');
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
        //
    }
};
