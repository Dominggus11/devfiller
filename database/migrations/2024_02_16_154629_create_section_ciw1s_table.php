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
        Schema::create('section_ciw1s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('standar_waktu');
            $table->string('status_mesin');
            $table->string('komponen');
            $table->string('pelaksanaan');
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('section_ciw1s');
    }
};