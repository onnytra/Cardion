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
        Schema::create('pengumpulan_karyas', function (Blueprint $table) {
            $table->id('id_pengumpulan');
            $table->string('judul',30);
            $table->longText('deskripsi')->nullable();
            $table->longText('peraturan')->nullable();
            $table->string('group_wa',100);
            $table->datetime('mulai');
            $table->datetime('berakhir');
            $table->boolean('status_pengumpulan');
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
        Schema::dropIfExists('pengumpulan_karyas');
    }
};
