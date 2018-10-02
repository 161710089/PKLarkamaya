<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_s_sekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sekolah');
            $table->string('logo');
            $table->string('alamat');
            $table->string('waktu_buka');
            $table->string('hari_buka');
            $table->string('no_telepon');
            $table->string('Facebook')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('Email')->nullable();
            
            
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
        Schema::dropIfExists('tb_s_sekolahs');
    }
}
