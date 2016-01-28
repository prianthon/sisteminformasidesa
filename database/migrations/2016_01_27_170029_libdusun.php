<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libdusun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('libdusuns', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama_dusun',45);
          $table->bigInteger('penduduk_kadus_id');
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
        Schema::drop('libdusuns');
    }
}
