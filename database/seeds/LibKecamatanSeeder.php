<?php

use Illuminate\Database\Seeder;

class LibKecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('libkecamatans')->delete();

      // buat data berupa array untuk diinput ke database
      $libkecamatans = array(
        //KABUPATEN ACEH SELATAN
        array('id'=>1, 'kode_kecamatan'=>'110101', 'nama_kecamatan'=>'BAKONGAN', 'kabupaten_id'=>'1'),
        array('id'=>2, 'kode_kecamatan'=>'110102', 'nama_kecamatan'=>'KLUET UTARA', 'kabupaten_id'=>'1'),
        array('id'=>3, 'kode_kecamatan'=>'110103', 'nama_kecamatan'=>'KLUET SELATAN', 'kabupaten_id'=>'1'),
        array('id'=>4, 'kode_kecamatan'=>'110104', 'nama_kecamatan'=>'LABUHAN HAJI', 'kabupaten_id'=>'1'),
        array('id'=>5, 'kode_kecamatan'=>'110105', 'nama_kecamatan'=>'MEUKEK', 'kabupaten_id'=>'1'),
        array('id'=>6, 'kode_kecamatan'=>'110106', 'nama_kecamatan'=>'SAMADUA', 'kabupaten_id'=>'1'),
        array('id'=>7, 'kode_kecamatan'=>'110107', 'nama_kecamatan'=>'SAWANG', 'kabupaten_id'=>'1'),
        array('id'=>8, 'kode_kecamatan'=>'110108', 'nama_kecamatan'=>'TAPAKTUAN', 'kabupaten_id'=>'1'),
        array('id'=>9, 'kode_kecamatan'=>'110109', 'nama_kecamatan'=>'TRUMON', 'kabupaten_id'=>'1'),
        array('id'=>10, 'kode_kecamatan'=>'110110', 'nama_kecamatan'=>'PASI RAJA', 'kabupaten_id'=>'1'),
        array('id'=>11, 'kode_kecamatan'=>'110111', 'nama_kecamatan'=>'LABUHAN HAJI TIMUR', 'kabupaten_id'=>'1'),
        array('id'=>12, 'kode_kecamatan'=>'110112', 'nama_kecamatan'=>'LABUHAN HAJI BARAT', 'kabupaten_id'=>'1'),
        array('id'=>13, 'kode_kecamatan'=>'110113', 'nama_kecamatan'=>'KLUET TENGAH', 'kabupaten_id'=>'1'),
        array('id'=>14, 'kode_kecamatan'=>'110114', 'nama_kecamatan'=>'KLUET TIMUR', 'kabupaten_id'=>'1'),
        array('id'=>15, 'kode_kecamatan'=>'110115', 'nama_kecamatan'=>'BAKONGAN TIMUR', 'kabupaten_id'=>'1'),
        array('id'=>16, 'kode_kecamatan'=>'110116', 'nama_kecamatan'=>'TRUMON TIMUR', 'kabupaten_id'=>'1'),
        array('id'=>17, 'kode_kecamatan'=>'110117', 'nama_kecamatan'=>'KOTA BAHAGIA', 'kabupaten_id'=>'1'),
        array('id'=>18, 'kode_kecamatan'=>'110118', 'nama_kecamatan'=>'TRUMON TENGAH', 'kabupaten_id'=>'1'),
        //KABUPATEN ACEH TENGGARA
        array('id'=>19, 'kode_kecamatan'=>'110201', 'nama_kecamatan'=>'LAWE ALAS', 'kabupaten_id'=>'2'),
        array('id'=>20, 'kode_kecamatan'=>'110202', 'nama_kecamatan'=>'LAWE SIGALA-GALA', 'kabupaten_id'=>'2'),
        array('id'=>21, 'kode_kecamatan'=>'110203', 'nama_kecamatan'=>'BAMBEL', 'kabupaten_id'=>'2'),
        array('id'=>22, 'kode_kecamatan'=>'110204', 'nama_kecamatan'=>'BABUSSALAM', 'kabupaten_id'=>'2'),
        array('id'=>23, 'kode_kecamatan'=>'110205', 'nama_kecamatan'=>'BADAR', 'kabupaten_id'=>'2'),
        array('id'=>24, 'kode_kecamatan'=>'110206', 'nama_kecamatan'=>'BABUL MAKMUR', 'kabupaten_id'=>'2'),
        array('id'=>25, 'kode_kecamatan'=>'110207', 'nama_kecamatan'=>'DARUL HASANAH', 'kabupaten_id'=>'2'),
        array('id'=>26, 'kode_kecamatan'=>'110208', 'nama_kecamatan'=>'LAWE BULAN', 'kabupaten_id'=>'2'),
        array('id'=>27, 'kode_kecamatan'=>'110209', 'nama_kecamatan'=>'BUKIT TUSAM', 'kabupaten_id'=>'2'),
        array('id'=>28, 'kode_kecamatan'=>'110210', 'nama_kecamatan'=>'SEMADAM', 'kabupaten_id'=>'2'),
        array('id'=>29, 'kode_kecamatan'=>'110211', 'nama_kecamatan'=>'BABUL RAHMAH', 'kabupaten_id'=>'2'),
        array('id'=>30, 'kode_kecamatan'=>'110212', 'nama_kecamatan'=>'KETAMBE', 'kabupaten_id'=>'2'),
        array('id'=>31, 'kode_kecamatan'=>'110213', 'nama_kecamatan'=>'DELENG POKHKISEN', 'kabupaten_id'=>'2'),
        array('id'=>32, 'kode_kecamatan'=>'110214', 'nama_kecamatan'=>'LAWE SUMUR', 'kabupaten_id'=>'2'),
        array('id'=>33, 'kode_kecamatan'=>'110215', 'nama_kecamatan'=>'TANOH ALAS', 'kabupaten_id'=>'2'),
        array('id'=>34, 'kode_kecamatan'=>'110216', 'nama_kecamatan'=>'LEUSER', 'kabupaten_id'=>'2'),
        //KABUPATEN ACEH TIMUR
      );

      // masukkan data ke database
      DB::table('libkecamatans')->insert($libkecamatans);
    }
}
