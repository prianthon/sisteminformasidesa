<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibkabupatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libkabupatens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_kabupaten',4);
            $table->string('nama_kabupaten',45);
            $table->unsignedInteger('provinsi_id');
            $table->foreign('provinsi_id')->references('id')->on('libprovinsis')->onDelete('CASCADE');
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
        Schema::drop('libkabupatens');
    }
}
