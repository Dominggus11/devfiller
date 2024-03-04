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
        Schema::create('cheklist_ciw_simplies', function (Blueprint $table) {
            $table->id();
            for ($i = 1; $i <= 13; $i++) {
                $table->string('section1' . $i, 25);
                $table->string('komponen1' . $i, 100);
                $table->string('pelaksanaan1' . $i, 150);
                $table->string('status_mesin1' . $i, 7);
                $table->integer('standar_waktu1' . $i);
                $table->integer('waktu1' . $i);
            }

            for ($i = 1; $i <= 8; $i++) {
                $table->string('section2' . $i, 25);
                $table->string('komponen2' . $i, 100);
                $table->string('pelaksanaan2' . $i, 150);
                $table->string('status_mesin2' . $i, 7);
                $table->integer('standar_waktu2' . $i);
                $table->integer('waktu2' . $i);
            }

            for ($i = 1; $i <= 21; $i++) {
                $table->string('section3' . $i, 25);
                $table->string('komponen3' . $i, 100);
                $table->string('pelaksanaan3' . $i, 150);
                $table->string('status_mesin3' . $i, 7);
                $table->integer('standar_waktu3' . $i);
                $table->integer('waktu3' . $i);
            }

            for ($i = 1; $i <= 3; $i++) {
                $table->string('section4' . $i, 25);
                $table->string('komponen4' . $i, 100);
                $table->string('pelaksanaan4' . $i, 150);
                $table->string('status_mesin4' . $i, 7);
                $table->integer('standar_waktu4' . $i);
                $table->integer('waktu4' . $i);
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
        Schema::dropIfExists('cheklist_ciw_simplies');
    }
};
