<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('nik');
            $table->string('nama');
            $table->string('jenkel');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->string('kota');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->string('alamat');
            $table->string('no_rumah');
            $table->string('email');
            $table->string('password');
            $table->string('qrcode');
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
        Schema::dropIfExists('warga');
    }
}
