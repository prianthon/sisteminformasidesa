<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Librw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('librws', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nomor_rw',2);
          $table->integer('libdusun_id');
          $table->bigInteger('penduduk_ketuarw_id');
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
        Schema::drop('librws');
    }
}
