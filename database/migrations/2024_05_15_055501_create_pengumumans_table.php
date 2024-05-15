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
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id('id_pengumuman');
            $table->string('judul',100);
            $table->text('deskripsi');
            $table->string('tipe_pengumuman',20);
            $table->foreignId('id_cabang')->references('id_cabang')->on('cabangs')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_rayon')->references('id_rayon')->on('rayons')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_ujian')->references('id_ujian')->on('ujians')->onDelete('restrict')->onUpdate('cascade');
            ;
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
        Schema::dropIfExists('pengumumans');
    }
};
