<?php

use Illuminate\Database\Seeder;

class LibPptkisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('penyalur_tkis')->delete();

      // buat data berupa array untuk diinput ke database
      $penyalur_tkis = array(
        array('id'=>1, 'nama_pptkis'=>'PT AL-Wihdah Jaya Sentosa', 'penanggung_jawab'=>'Fachri Syahruddin', 'nomor_pptkis'=>'KEP 459/MEN/2006', 'tanggal_izin'=>'2006/11/30', 'nomor_telepon'=>'(061) 821 5444', 'nomor_fax'=>'821 0324', 'alamat_kantor'=>'Jln Setia Budi No: 74 C', 'alamat_penampungan'=>'Jln Setia Budi No: 74 C', 'email'=>'','website'=>'', 'negarapenempatan_id'=>'2,3,4', 'anggota_assosiasi'=>'', 'kantor_cabang'=>'', 'provinsi_id'=>'1'),
      );

      // masukkan data ke database
      DB::table('penyalur_tkis')->insert($penyalur_tkis);
    }
}
