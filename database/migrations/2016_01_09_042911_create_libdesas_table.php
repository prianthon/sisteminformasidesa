<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibdesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libdesas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_desa',10);
            $table->string('nama_desa',45);
            $table->unsignedInteger('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('libkecamatans')->onDelete('CASCADE');
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
        Schema::drop('libdesas');
    }
}
