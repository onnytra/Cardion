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
        Schema::create('karyas', function (Blueprint $table) {
            $table->id('id_karya');
            $table->date('tanggal');
            $table->double('nilai');
            $table->string('keterangan_nilai',150);
            $table->string('karya',50);
            $table->string('surat_originalitas',50);
            $table->string('essay_karya',50);
            $table->string('id_user')->references('nomor')->on('pesertas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_pengumpulan')->references('id_pengumpulan')->on('pengumpulan_karyas')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('karyas');
    }
};
