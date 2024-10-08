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
            $table->string('group_wa',100)->nullable();
            $table->integer('durasi');
            $table->integer('total_soal');
            // $table->string('tipe_ujian',20);
            $table->integer('benar')->nullable()->default(0);
            $table->integer('salah')->nullable()->default(0);
            $table->integer('kosong')->nullable()->default(0);
            $table->boolean('soal_acak');
            $table->boolean('tampilkan_jawaban');
            $table->boolean('tampilkan_nilai');
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
