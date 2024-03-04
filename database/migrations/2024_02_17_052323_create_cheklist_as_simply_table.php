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
        Schema::create('cheklist_as_simplies', function (Blueprint $table) {
            $table->id();
            for ($i = 1; $i <= 18; $i++) {
                $table->string('alat' . $i, 30);
                $table->string('posisi_tool' . $i, 30);
                $table->string('pengecekan1' . $i, 50);
                $table->integer('standar_waktu1' . $i);
                $table->integer('waktu1' . $i);
            }

            for ($i = 1; $i <= 12; $i++) {
                $table->string('section' . $i, 25);
                $table->string('komponen' . $i, 30);
                $table->string('pelaksanaan' . $i, 80);
                $table->string('status_mesin1' . $i, 5);
                $table->integer('standar_waktu2' . $i);
                $table->integer('waktu2' . $i);
            }

            for ($i = 1; $i <= 10; $i++) {
                $table->string('area' . $i, 50);
                $table->string('pengecekan2' . $i, 150);
                $table->string('status_mesin2' . $i, 6);
                $table->integer('standar_waktu3' . $i);
                $table->integer('waktu3' . $i);
            }
            $table->integer('shift');
            $table->date('tanggal');
            $table->integer('status')->nullable();
            $table->string('supervisor', 50)->nullable();
            $table->string('operator', 50)->nullable();
            $table->integer('line');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('cheklist_as_simply');
    }
};
