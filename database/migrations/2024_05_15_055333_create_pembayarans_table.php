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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->string('metode_pembayaran',20);
            $table->date('tanggal');
            $table->string('status_pembayaran',20);
            $table->string('bank', 50)->nullable();
            $table->string('bukti',50)->nullable();
            $table->foreignId('id_gelombang')->references('id_gelombang')->on('gelombang_pembayarans')->onDelete('cascade')->onUpdate('restrict');
            $table->foreignId('id_peserta')->references('id_peserta')->on('pesertas')->onDelete('cascade')->onUpdate('restrict');
            $table->string('event',15);
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
        Schema::dropIfExists('pembayarans');
    }
};
