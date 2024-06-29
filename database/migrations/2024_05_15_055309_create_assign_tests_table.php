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
        Schema::create('assign_tests', function (Blueprint $table) {
            $table->id('id_assign_test');
            $table->foreignId('id_ujian')->nullable()->references('id_ujian')->on('ujians')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_sesi')->nullable()->references('id_sesi')->on('sesis')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_pengumpulan')->nullable()->references('id_pengumpulan')->on('pengumpulan_karyas')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_peserta')->nullable()->references('id_peserta')->on('pesertas')->onDelete('cascade')->onUpdate('restrict');
            $table->string('status_test',20);
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
        Schema::dropIfExists('assign_tests');
    }
};
