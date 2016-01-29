<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Librt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('librts', function (Blueprint $table) {
           $table->increments('id');
           $table->string('nomor_rt',2);
           $table->integer('librw_id');
           $table->bigInteger('penduduk_ketuart_id');
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
         Schema::drop('librts');
     }
}
