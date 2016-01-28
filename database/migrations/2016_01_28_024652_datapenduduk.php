<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datapenduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('datapenduduks', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nik',16);
          $table->string('nama',75);
          $table->string('tempat_lahir',55);
          $table->date('tanggal_lahir');
          $table->enum('kewarganegaraan',array('WNI','WNA','DWIKEWARGANEGARAAN'));
          $table->string('foto');
          $table->integer('jeniskelamin_id');
          $table->integer('golongandarah_id');
          $table->integer('agama_id');
          $table->integer('statuskawin_id');
          $table->integer('statustinggal_id');
          $table->integer('pendidikan_id');
          $table->integer('pekerjaan_id');
          $table->integer('cacat_id');
          $table->integer('statuskependudukan_id');
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
        Schema::drop('datapenduduks');
    }
}
