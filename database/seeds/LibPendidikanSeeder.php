<?php

use Illuminate\Database\Seeder;

class LibPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('pendidikans')->delete();

      // buat data berupa array untuk diinput ke database
      $pendidikans = array(
        array('id'=>1, 'pendidikan'=>'Tidak/Belum Sekolah'),
        array('id'=>2, 'pendidikan'=>'Tidak Tamat SD/Sederajat'),
        array('id'=>3, 'pendidikan'=>'Tamat SD/Sederajat'),
        array('id'=>4, 'pendidikan'=>'SLTP/Sederajat'),
        array('id'=>5, 'pendidikan'=>'SLTA/Sederajat'),
        array('id'=>6, 'pendidikan'=>'Diploma I/II'),
        array('id'=>7, 'pendidikan'=>'Akademi/Diploma III/S.Muda'),
        array('id'=>8, 'pendidikan'=>'Diploma IV/Strata I'),
        array('id'=>9, 'pendidikan'=>'Strata II'),
        array('id'=>10, 'pendidikan'=>'Strata III'),
      );

      // masukkan data ke database
      DB::table('pendidikans')->insert($pendidikans);
    }
}
