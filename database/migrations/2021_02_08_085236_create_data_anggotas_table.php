<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('npk',25);
            $table->string('nim',15);
            $table->string('nama',50);
            $table->string('nama_lapangan',10);
            $table->string('tempat_lahir',10);
            $table->date('tanggal_lahir');
            $table->string('alamat_domisili');
            $table->string('alamat_tinggal');
            $table->string('email',30);
            $table->string('nomor_hp',15);
            $table->string('foto',100);
            $table->string('status_keaktifan',13);
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
        Schema::dropIfExists('data_anggotas');
    }
}
