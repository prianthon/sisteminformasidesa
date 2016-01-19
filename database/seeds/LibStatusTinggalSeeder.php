<?php

use Illuminate\Database\Seeder;

class LibStatusTinggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('status_tinggals')->delete();

      // buat data berupa array untuk diinput ke database
      $status_tinggals = array(
        array('id'=>1, 'status_tinggal'=>'Tinggal Tetap'),
        array('id'=>2, 'status_tinggal'=>'Tinggal di Luar Kota'),
        array('id'=>3, 'status_tinggal'=>'Tinggal di Luar Provinsi'),
        array('id'=>4, 'status_tinggal'=>'Tinggal di Luar Negeri'),
      );

      // masukkan data ke database
      DB::table('status_tinggals')->insert($status_tinggals);
    }
}
