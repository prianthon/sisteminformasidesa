<?php

use Illuminate\Database\Seeder;

class LibAgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('agamas')->delete();

      // buat data berupa array untuk diinput ke database
      $agamas = array(
        array('id'=>1, 'agama'=>'Islam'),
        array('id'=>2, 'agama'=>'Kristen'),
        array('id'=>3, 'agama'=>'Katolik'),
        array('id'=>4, 'agama'=>'Hindu'),
        array('id'=>5, 'agama'=>'Budha'),
        array('id'=>6, 'agama'=>'Konghucu'),
        array('id'=>7, 'agama'=>'Aliran Kepercayaan Kepada Tuhan YME'),
        array('id'=>8, 'agama'=>'Aliran Kepercayaan Lainnya'),
      );

      // masukkan data ke database
      DB::table('agamas')->insert($agamas);
    }
}
