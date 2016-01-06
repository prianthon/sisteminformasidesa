<?php

use Illuminate\Database\Seeder;

class ParentSuratsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan table parent
        DB::table('parent_surats')->delete();

        // buat data berupa array untuk diinput ke database
        $parent_surats = array(
          array('id'=>1, 'kode_parent'=>'01', 'nama_parent'=>'01 - Surat Pengantar'),
          array('id'=>2, 'kode_parent'=>'470', 'nama_parent'=>'470 - Kependudukan'),
          array('id'=>3, 'kode_parent'=>'471', 'nama_parent'=>'471'),
          array('id'=>4, 'kode_parent'=>'471.1', 'nama_parent'=>'471.1 - WNI Asli'),
          array('id'=>5, 'kode_parent'=>'471.2', 'nama_parent'=>'471.2 - WNI Keturunan Asing'),
          array('id'=>6, 'kode_parent'=>'471.21', 'nama_parent'=>'471.21 - Permohonan Kewarganegaraan'),
          array('id'=>7, 'kode_parent'=>'471.22', 'nama_parent'=>'471.22 - Permohonan Ganti Kelamin'),
          array('id'=>8, 'kode_parent'=>'471.3', 'nama_parent'=>'471.3 - Asimilasi'),
          array('id'=>9, 'kode_parent'=>'472', 'nama_parent'=>'472 - Kewarganegaraan Asing'),
          array('id'=>10, 'kode_parent'=>'473', 'nama_parent'=>'473 - Tidak Berkewarganegaraan'),
          array('id'=>11, 'kode_parent'=>'474', 'nama_parent'=>'474 - Pendaftaran Penduduk'),
          array('id'=>12, 'kode_parent'=>'474.1', 'nama_parent'=>'474.1 - Kelahiran'),
          array('id'=>13, 'kode_parent'=>'474.11', 'nama_parent'=>'474.11 - Adopsi'),
          array('id'=>14, 'kode_parent'=>'474.2', 'nama_parent'=>'474.2 - Perkawinan/perceraian/rujuk'),
          array('id'=>15, 'kode_parent'=>'474.3', 'nama_parent'=>'474.3 - Kematian'),
          array('id'=>16, 'kode_parent'=>'474.4', 'nama_parent'=>'474.4 - Kartu Penduduk'),
          array('id'=>17, 'kode_parent'=>'475', 'nama_parent'=>'475 - Perpindahan Penduduk'),
          array('id'=>18, 'kode_parent'=>'475.1', 'nama_parent'=>'475.1 - Transmigrasi'),
          array('id'=>19, 'kode_parent'=>'475.2', 'nama_parent'=>'475.2 - Urbanisasi'),
          array('id'=>20, 'kode_parent'=>'475.3', 'nama_parent'=>'475.3 - Dari Kota ke Desa'),
          array('id'=>21, 'kode_parent'=>'476', 'nama_parent'=>'476 - Keluarga Berencana'),
          array('id'=>22, 'kode_parent'=>'476.1', 'nama_parent'=>'476.1 - Alat Kontrasepsi'),
          array('id'=>23, 'kode_parent'=>'476.2', 'nama_parent'=>'476.2 - K.B Lestari'),
          array('id'=>24, 'kode_parent'=>'476.3', 'nama_parent'=>'476.3 - K.B Mandiri'),
          array('id'=>25, 'kode_parent'=>'476.4', 'nama_parent'=>'476.4 - Penyuluhan Lapangan K.B (PLKB)'),
          array('id'=>26, 'kode_parent'=>'476.5', 'nama_parent'=>'476.5 - Pos K.B Desa'),
          array('id'=>27, 'kode_parent'=>'476.6', 'nama_parent'=>'476.6 - Akseptor KB'),
          array('id'=>28, 'kode_parent'=>'477', 'nama_parent'=>'477 - Catatan Sipil'),
          array('id'=>29, 'kode_parent'=>'478', 'nama_parent'=>'478 - Akte'),
          array('id'=>30, 'kode_parent'=>'478.1', 'nama_parent'=>'478.1 - Akte Perkawinan'),
          array('id'=>31, 'kode_parent'=>'478.2', 'nama_parent'=>'478.2 - Akte Kelahiran'),
          array('id'=>32, 'kode_parent'=>'478.3', 'nama_parent'=>'478.3 - Akte Kematian')
        );

        // masukkan data ke database
        DB::table('parent_surats')->insert($parent_surats);
    }
}
