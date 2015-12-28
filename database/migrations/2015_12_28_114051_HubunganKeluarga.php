<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HubunganKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('hubungan_keluargas', function (Blueprint $table) {
          $table->increments('id',11);
          $table->string('hubungan_keluarga',45)->unique();
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
        Schema::drop('hubungan_keluargas');
    }
}
