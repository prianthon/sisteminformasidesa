<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibkecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libkecamatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_kecamatan',6);
            $table->string('nama_kecamatan',45);
            $table->unsignedInteger('kabupaten_id');
            $table->foreign('kabupaten_id')->references('id')->on('libkabupatens')->onDelete('CASCADE');
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
        Schema::drop('libkecamatans');
    }
}
