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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id('id_peserta');
            $table->string('nomor',30)->unique();
            $table->string('nama_team',50)->nullable();
            $table->string('nama',100);
            $table->string('email',150)->unique();
            $table->string('telepon',15);
            $table->string('sekolah',100)->nullable();
            $table->string('alamat_sekolah',100)->nullable();
            $table->string('sertifikat',100)->nullable();
            $table->string('anggota_pertama',100)->nullable();
            $table->string('telepon_anggota_pertama',15)->nullable();
            $table->string('anggota_kedua',100)->nullable();
            $table->string('telepon_anggota_kedua',15)->nullable();
            $table->string('event',15);
            $table->string('password');
            $table->string('status_pembayaran',20);
            $table->string('status_data',20);
            $table->string('keterangan',100)->nullable();
            $table->string('zona_waktu',20)->nullable();
            $table->foreignId('id_cabang')->nullable()->references('id_cabang')->on('cabangs')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_rayon')->nullable()->references('id_rayon')->on('rayons')->onDelete('cascade')->onUpdate('restrict');
            $table->rememberToken();
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
        Schema::dropIfExists('pesertas');
    }
};
