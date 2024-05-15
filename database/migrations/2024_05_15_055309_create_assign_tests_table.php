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
            $table->foreignId('id_ujian')->references('id_ujian')->on('ujians')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_pengumpulan')->references('id_pengumpulan')->on('pengumpulan_karyas')->onDelete('restrict')->onUpdate('cascade');
            $table->string('id_user',30)->references('nomor')->on('pesertas')->onDelete('restrict')->onUpdate('cascade');
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
