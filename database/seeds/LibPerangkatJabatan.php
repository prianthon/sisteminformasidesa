<?php

use Illuminate\Database\Seeder;

class LibPerangkatJabatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       // kosongkan table libkecamatan
       DB::table('libperangkatjabatans')->delete();

       // buat data berupa array untuk diinput ke database
       $libperangkatjabatans = array(
         array('id'=>1, 'perangkat_jabatan'=>'Kepala Desa'),
         array('id'=>2, 'perangkat_jabatan'=>'Sekretaris Desa'),
         array('id'=>3, 'perangkat_jabatan'=>'Kepala Dusun'),
         array('id'=>4, 'perangkat_jabatan'=>'Kasi Pemerintahan'),
         array('id'=>5, 'perangkat_jabatan'=>'Kasi Pembangunan'),
         array('id'=>6, 'perangkat_jabatan'=>'Kasi Kesdaya'),
         array('id'=>7, 'perangkat_jabatan'=>'Kaur Umum'),
         array('id'=>8, 'perangkat_jabatan'=>'Kaur Keuangan'),
         array('id'=>9, 'perangkat_jabatan'=>'Staff'),
       );

       // masukkan data ke database
       DB::table('libperangkatjabatans')->insert($libperangkatjabatans);
     }
}
