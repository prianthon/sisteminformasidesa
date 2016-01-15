<?php

use Illuminate\Database\Seeder;

class RegKecamatanSeeder extends Seeder
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
        array('id'=>1, 'kode_kecamatan'=>'1101051', 'nama_kecamatan'=>'ALAFAN', 'kabupaten_id'=>'1'),
        array('id'=>2, 'kode_kecamatan'=>'1101050', 'nama_kecamatan'=>'SIMEULUE BARAT', 'kabupaten_id'=>'1'),
        array('id'=>3, 'kode_kecamatan'=>'1101040', 'nama_kecamatan'=>'SALANG', 'kabupaten_id'=>'1'),
        array('id'=>4, 'kode_kecamatan'=>'1101031', 'nama_kecamatan'=>'TELUK DALAM', 'kabupaten_id'=>'1'),
        array('id'=>5, 'kode_kecamatan'=>'1101030', 'nama_kecamatan'=>'SIMEULUE TENGAH', 'kabupaten_id'=>'1'),
        array('id'=>6, 'kode_kecamatan'=>'1101021', 'nama_kecamatan'=>'TEUPAH BARAT', 'kabupaten_id'=>'1'),
        array('id'=>7, 'kode_kecamatan'=>'1101020', 'nama_kecamatan'=>'SIMEULUE TIMUR', 'kabupaten_id'=>'1'),
        array('id'=>8, 'kode_kecamatan'=>'1101010', 'nama_kecamatan'=>'TEUPAH SELATAN', 'kabupaten_id'=>'1'),
        array('id'=>9, 'kode_kecamatan'=>'1102043', 'nama_kecamatan'=>'KOTA BAHARU', 'kabupaten_id'=>'2'),
        array('id'=>10, 'kode_kecamatan'=>'1102042', 'nama_kecamatan'=>'SINGKOHOR', 'kabupaten_id'=>'2'),
        array('id'=>11, 'kode_kecamatan'=>'1102033', 'nama_kecamatan'=>'SURO MAKMUR', 'kabupaten_id'=>'2'),
        array('id'=>12, 'kode_kecamatan'=>'1102032', 'nama_kecamatan'=>'DANAU PARIS', 'kabupaten_id'=>'2'),
        array('id'=>13, 'kode_kecamatan'=>'1102031', 'nama_kecamatan'=>'GUNUNG MERIAH', 'kabupaten_id'=>'2'),
        array('id'=>14, 'kode_kecamatan'=>'1102030', 'nama_kecamatan'=>'SIMPANG KANAN', 'kabupaten_id'=>'2'),
        array('id'=>15, 'kode_kecamatan'=>'1102022', 'nama_kecamatan'=>'KUALA BARU', 'kabupaten_id'=>'2'),
        array('id'=>16, 'kode_kecamatan'=>'1102021', 'nama_kecamatan'=>'SINGKIL UTARA', 'kabupaten_id'=>'2'),
        array('id'=>17, 'kode_kecamatan'=>'1102020', 'nama_kecamatan'=>'SINGKIL', 'kabupaten_id'=>'2'),
        array('id'=>18, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'PULAU BANYAK', 'kabupaten_id'=>'2')
      );

      // masukkan data ke database
      DB::table('libkecamatans')->insert($libkecamatans);
    }
}
