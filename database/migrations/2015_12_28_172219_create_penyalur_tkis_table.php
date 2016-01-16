<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyalurTkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyalur_tkis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pptkis',130);
            $table->string('penanggung_jawab',50);
            $table->string('nomor_pptkis',50);
            $table->date('tanggal_izin');
            $table->string('nomor_telepon',50);
            $table->string('nomor_fax',50);
            $table->string('alamat_kantor');
            $table->string('alamat_penampungan');
            $table->string('email',80);
            $table->string('website',80);
            $table->unsignedInteger('negara_penempatan_id');
            $table->foreign('negara_penempatan_id')->references('id')->on('libnegarapenempatans')->onDelete('CASCADE');
            $table->string('anggota_assosiasi',50);
            $table->string('kantor_cabang');
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
        Schema::drop('penyalur_tkis');
    }
}
