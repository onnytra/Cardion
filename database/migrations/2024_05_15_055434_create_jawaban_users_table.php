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
        Schema::create('jawaban_users', function (Blueprint $table) {
            $table->id('id_jawaban_user');
            $table->string('id_user', 30)->references('nomor')->on('pesertas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_jawaban')->references('id_jawaban')->on('jawabans')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_ujian')->references('id_ujian')->on('ujians')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_soal')->references('id_soal')->on('soals')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('jawaban_users');
    }
};
