<?php

use Illuminate\Database\Seeder;

class LibProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('libprovinsis')->delete();

      // buat data berupa array untuk diinput ke database
      $libprovinsis = array(
        array('id'=>1, 'kode_provinsi'=>'11', 'nama_provinsi'=>'ACEH'),
        array('id'=>2, 'kode_provinsi'=>'12', 'nama_provinsi'=>'SUMATERA UTARA'),
        array('id'=>3, 'kode_provinsi'=>'13', 'nama_provinsi'=>'SUMATERA BARAT'),
        array('id'=>4, 'kode_provinsi'=>'14', 'nama_provinsi'=>'RIAU'),
        array('id'=>5, 'kode_provinsi'=>'15', 'nama_provinsi'=>'JAMBI'),
        array('id'=>6, 'kode_provinsi'=>'16', 'nama_provinsi'=>'SUMATERA SELATAN'),
        array('id'=>7, 'kode_provinsi'=>'17', 'nama_provinsi'=>'BENGKULU'),
        array('id'=>8, 'kode_provinsi'=>'18', 'nama_provinsi'=>'LAMPUNG'),
        array('id'=>9, 'kode_provinsi'=>'19', 'nama_provinsi'=>'KEPULAUAN BANGKA BELITUNG'),
        array('id'=>10, 'kode_provinsi'=>'21', 'nama_provinsi'=>'KEPULAUAN RIAU'),
        array('id'=>11, 'kode_provinsi'=>'31', 'nama_provinsi'=>'DKI JAKARTA'),
        array('id'=>12, 'kode_provinsi'=>'32', 'nama_provinsi'=>'JAWA BARAT'),
        array('id'=>13, 'kode_provinsi'=>'33', 'nama_provinsi'=>'JAWA TENGAH'),
        array('id'=>14, 'kode_provinsi'=>'34', 'nama_provinsi'=>'DAERAH ISTIMEWA YOGYAKARTA'),
        array('id'=>15, 'kode_provinsi'=>'35', 'nama_provinsi'=>'JAWA TIMUR'),
        array('id'=>16, 'kode_provinsi'=>'36', 'nama_provinsi'=>'BANTEN'),
        array('id'=>17, 'kode_provinsi'=>'51', 'nama_provinsi'=>'BALI'),
        array('id'=>18, 'kode_provinsi'=>'52', 'nama_provinsi'=>'NUSA TENGGARA BARAT'),
        array('id'=>19, 'kode_provinsi'=>'53', 'nama_provinsi'=>'NUSA TENGGARA TIMUR'),
        array('id'=>20, 'kode_provinsi'=>'61', 'nama_provinsi'=>'KALIMANTAN BARAT'),
        array('id'=>21, 'kode_provinsi'=>'62', 'nama_provinsi'=>'KALIMANTAN TENGAH'),
        array('id'=>22, 'kode_provinsi'=>'63', 'nama_provinsi'=>'KALIMANTAN SELATAN'),
        array('id'=>23, 'kode_provinsi'=>'64', 'nama_provinsi'=>'KALIMANTAN TIMUR'),
        array('id'=>24, 'kode_provinsi'=>'65', 'nama_provinsi'=>'KALIMANTAN UTARA'),
        array('id'=>25, 'kode_provinsi'=>'71', 'nama_provinsi'=>'SULAWESI UTARA'),
        array('id'=>26, 'kode_provinsi'=>'72', 'nama_provinsi'=>'SULAWESI TENGAH'),
        array('id'=>27, 'kode_provinsi'=>'73', 'nama_provinsi'=>'SULAWESI SELATAN'),
        array('id'=>28, 'kode_provinsi'=>'74', 'nama_provinsi'=>'SULAWESI TENGGARA'),
        array('id'=>29, 'kode_provinsi'=>'75', 'nama_provinsi'=>'GORONTALO'),
        array('id'=>30, 'kode_provinsi'=>'76', 'nama_provinsi'=>'SULAWESI BARAT'),
        array('id'=>31, 'kode_provinsi'=>'81', 'nama_provinsi'=>'MALUKU'),
        array('id'=>32, 'kode_provinsi'=>'82', 'nama_provinsi'=>'MALUKU UTARA'),
        array('id'=>33, 'kode_provinsi'=>'91', 'nama_provinsi'=>'PAPUA'),
        array('id'=>34, 'kode_provinsi'=>'92', 'nama_provinsi'=>'PAPUA BARAT'),
      );

      // masukkan data ke database
      DB::table('libprovinsis')->insert($libprovinsis);
    }
}
