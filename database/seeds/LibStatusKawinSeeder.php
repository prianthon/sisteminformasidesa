<?php

use Illuminate\Database\Seeder;

class LibStatusKawinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('status_kawins')->delete();

      // buat data berupa array untuk diinput ke database
      $status_kawins = array(
        array('id'=>1, 'status_kawin'=>'Belum Kawin'),
        array('id'=>2, 'status_kawin'=>'Kawin'),
        array('id'=>3, 'status_kawin'=>'Cerai Hidup'),
        array('id'=>4, 'status_kawin'=>'Cerai Mati'),
      );

      // masukkan data ke database
      DB::table('status_kawins')->insert($status_kawins);
    }
}
