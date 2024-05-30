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
        Schema::create('gelombang_pembayarans', function (Blueprint $table) {
            $table->id('id_gelombang');
            $table->string('gelombang',50);
            // $table->string('tipe', 10);
            $table->double('harga');
            $table->date('mulai');
            $table->date('selesai');
            $table->string('event',15);
            $table->boolean('status_gelombang_pembayaran');
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
        Schema::dropIfExists('gelombang_pembayarans');
    }
};
