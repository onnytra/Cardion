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
        Schema::table('assign_tests', function (Blueprint $table) {
            $table->foreignId('id_sesi')->nullable()->references('id_sesi')->on('sesis')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assign_tests', function (Blueprint $table) {
            $table->dropForeign(['id_sesi']);
            $table->dropColumn('id_sesi');
        });
    }
};
