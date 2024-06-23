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
            $table->foreignId('id_peserta')->references('id_peserta')->on('pesertas')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_jawaban')->nullable()->references('id_jawaban')->on('jawabans')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_ujian')->references('id_ujian')->on('ujians')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_soal')->references('id_soal')->on('soals')->onDelete('cascade')->onUpdate('restrict');
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
