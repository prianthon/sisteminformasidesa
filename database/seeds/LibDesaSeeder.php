<?php

use Illuminate\Database\Seeder;

class LibDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('libdesas')->delete();

      // buat data berupa array untuk diinput ke database
      $libdesas = array(
        //KECAMATAN BAKONGAN
        array('id'=>1, 'kode_desa'=>'1101012001', 'nama_desa'=>'KEUDE BAKONGAN', 'kecamatan_id'=>'1'),
        array('id'=>2, 'kode_desa'=>'1101012002', 'nama_desa'=>'UJUNG MANGKI', 'kecamatan_id'=>'1'),
        array('id'=>3, 'kode_desa'=>'1101012003', 'nama_desa'=>'UJUNG PADANG', 'kecamatan_id'=>'1'),
        array('id'=>4, 'kode_desa'=>'1101012004', 'nama_desa'=>'KAMPONG DRIEN', 'kecamatan_id'=>'1'),
        array('id'=>5, 'kode_desa'=>'1101012015', 'nama_desa'=>'DARUL IKHSAN', 'kecamatan_id'=>'1'),
        array('id'=>6, 'kode_desa'=>'1101012016', 'nama_desa'=>'PADANG BERAHAN', 'kecamatan_id'=>'1'),
        array('id'=>7, 'kode_desa'=>'1101012017', 'nama_desa'=>'GAMPONG BARO', 'kecamatan_id'=>'1'),
        //KECAMATAN KLUET UTARA
        array('id'=>8, 'kode_desa'=>'1101022001', 'nama_desa'=>'FAJAR HARAPAN', 'kecamatan_id'=>'2'),
        array('id'=>9, 'kode_desa'=>'1101022002', 'nama_desa'=>'KRUENG BATEE', 'kecamatan_id'=>'2'),
        array('id'=>10, 'kode_desa'=>'1101022003', 'nama_desa'=>'PASI KUALA ASAHAN', 'kecamatan_id'=>'2'),
        array('id'=>11, 'kode_desa'=>'1101022004', 'nama_desa'=>'GUNUNG PULO', 'kecamatan_id'=>'2'),
        array('id'=>12, 'kode_desa'=>'1101022005', 'nama_desa'=>'PULO IE I', 'kecamatan_id'=>'2'),
        array('id'=>13, 'kode_desa'=>'1101022006', 'nama_desa'=>'JAMBO MANYANG', 'kecamatan_id'=>'2'),
        array('id'=>14, 'kode_desa'=>'1101022007', 'nama_desa'=>'SIMPANG EMPAT', 'kecamatan_id'=>'2'),
        array('id'=>15, 'kode_desa'=>'1101022008', 'nama_desa'=>'LIMAU PURUT', 'kecamatan_id'=>'2'),
        array('id'=>16, 'kode_desa'=>'1101022009', 'nama_desa'=>'PULO KAMBING', 'kecamatan_id'=>'2'),
        array('id'=>17, 'kode_desa'=>'1101022010', 'nama_desa'=>'KAMPUNG PAYA', 'kecamatan_id'=>'2'),
        array('id'=>18, 'kode_desa'=>'1101022011', 'nama_desa'=>'KRUENG BATU', 'kecamatan_id'=>'2'),
        array('id'=>19, 'kode_desa'=>'1101022012', 'nama_desa'=>'KRUENG KLUET', 'kecamatan_id'=>'2'),
        array('id'=>20, 'kode_desa'=>'1101022013', 'nama_desa'=>'ALUR MAS', 'kecamatan_id'=>'2'),
        array('id'=>21, 'kode_desa'=>'1101022014', 'nama_desa'=>'SIMPANG DUA', 'kecamatan_id'=>'2'),
        array('id'=>22, 'kode_desa'=>'1101022015', 'nama_desa'=>'SIMPANG TIGA', 'kecamatan_id'=>'2'),
        array('id'=>23, 'kode_desa'=>'1101022016', 'nama_desa'=>'SIMPANG LHEE', 'kecamatan_id'=>'2'),
        array('id'=>24, 'kode_desa'=>'1101022017', 'nama_desa'=>'SUAG GEURINGGENG', 'kecamatan_id'=>'2'),
        array('id'=>25, 'kode_desa'=>'1101022018', 'nama_desa'=>'PASI KUALA BAKU', 'kecamatan_id'=>'2'),
        array('id'=>26, 'kode_desa'=>'1101022019', 'nama_desa'=>'KEDAI PADANG', 'kecamatan_id'=>'2'),
        array('id'=>27, 'kode_desa'=>'1101022020', 'nama_desa'=>'KOTA FAJAR', 'kecamatan_id'=>'2'),
        array('id'=>28, 'kode_desa'=>'1101022021', 'nama_desa'=>'GUNUNG PUDUNG', 'kecamatan_id'=>'2'),
      );

      // masukkan data ke database
      DB::table('libdesas')->insert($libdesas);
    }
}
