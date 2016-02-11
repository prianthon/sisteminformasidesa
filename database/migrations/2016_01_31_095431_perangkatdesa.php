<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perangkatdesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('perangkatdesas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('niap',55);
          $table->string('nip',55);
          $table->bigInteger('datapenduduk_id');
          $table->integer('jabatan_id');
          $table->string('pangkat_golongan',55);
          $table->string('no_tgl_keputusan_pengangkatan',55);
          $table->string('no_tgl_keputusan_pemberhentian',55);
          $table->string('keterangan');
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
        Schema::drop('perangkatdesas');
    }
}
