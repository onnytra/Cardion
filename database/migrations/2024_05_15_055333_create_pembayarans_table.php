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
            $table->string('status_pembayaran',10);
            $table->string('bukti',50);
            $table->foreignId('id_gelombang')->references('id_gelombang')->on('gelombang_pembayarans')->onDelete('restrict')->onUpdate('cascade');
            $table->string('id_user',30)->references('nomor')->on('pesertas')->onDelete('restrict')->onUpdate('cascade');
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
