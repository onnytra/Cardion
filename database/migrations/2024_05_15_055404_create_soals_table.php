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
        Schema::create('soals', function (Blueprint $table) {
            $table->id('id_soal');
            $table->longText('soal');
            $table->foreignId('id_subyek')->references('id_subyek')->on('subyeks')->onDelete('restrict')->onUpdate('cascade');
            $table->string('urutan_soal',5);
            $table->foreignId('id_ujian')->references('id_ujian')->on('ujians')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('soals');
    }
};
