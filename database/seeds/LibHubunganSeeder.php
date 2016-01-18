<?php

use Illuminate\Database\Seeder;

class LibHubunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('hubungan_keluargas')->delete();

      // buat data berupa array untuk diinput ke database
      $hubungan_keluargas = array(
        array('id'=>1, 'hubungan_keluarga'=>'Kepala Keluarga'),
        array('id'=>2, 'hubungan_keluarga'=>'Suami'),
        array('id'=>3, 'hubungan_keluarga'=>'Istri'),
        array('id'=>4, 'hubungan_keluarga'=>'Anak'),
        array('id'=>5, 'hubungan_keluarga'=>'Menantu'),
        array('id'=>6, 'hubungan_keluarga'=>'Cucu'),
        array('id'=>7, 'hubungan_keluarga'=>'Orang Tua'),
        array('id'=>8, 'hubungan_keluarga'=>'Mertua'),
        array('id'=>9, 'hubungan_keluarga'=>'Famili Lain'),
        array('id'=>10, 'hubungan_keluarga'=>'Pembantu'),
        array('id'=>11, 'hubungan_keluarga'=>'Lainnya'),
      );

      // masukkan data ke database
      DB::table('hubungan_keluargas')->insert($hubungan_keluargas);
    }
}
