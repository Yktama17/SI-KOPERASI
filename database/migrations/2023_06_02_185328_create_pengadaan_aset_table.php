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
        Schema::create('pengadaan_aset', function (Blueprint $table) {
            $table->id();
            $table->string('id_pengadaan_aset');
            $table->string('id_aset');
            $table->date('tanggal_pengadaan');
            $table->double('nilai_aset');
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
        Schema::dropIfExists('pengadaan_aset');
    }
};
