<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan',50);
            $table->string('deskripsi',255);
            $table->date('tanggal_kegiatan');
            $table->string('tempat_kegiatan',50);
            $table->string('foto_kegiatan',100);
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
        Schema::dropIfExists('data_kegiatans');
    }
}
