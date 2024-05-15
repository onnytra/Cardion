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
        Schema::create('ujians', function (Blueprint $table) {
            $table->id('id_ujian');
            $table->string('judul',30);
            $table->longText('deskripsi')->nullable();
            $table->longText('peraturan')->nullable();
            $table->string('group_wa',100);
            $table->time('durasi');
            $table->integer('total_soal');
            $table->string('tipe_ujian',10);
            $table->integer('benar');
            $table->integer('salah');
            $table->integer('kosong');
            $table->boolean('soal_acak');
            $table->string('tampilkan_jawaban',15);
            $table->string('tampilkan_nilai',15);
            $table->boolean('status_ujian');
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
        Schema::dropIfExists('ujians');
    }
};
