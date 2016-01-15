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
        array('id'=>18, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'PULAU BANYAK', 'kabupaten_id'=>'2'),
        array('id'=>19, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'LABUHAN HAJI BARAT', 'kabupaten_id'=>'3'),
        array('id'=>20, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'LABUHAN HAJI TIMUR', 'kabupaten_id'=>'3'),
        array('id'=>21, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'LABUHAN HAJI', 'kabupaten_id'=>'3'),
        array('id'=>22, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'MEUKEK', 'kabupaten_id'=>'3'),
        array('id'=>23, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'SAWANG', 'kabupaten_id'=>'3'),
        array('id'=>24, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'SAMA DUA', 'kabupaten_id'=>'3'),
        array('id'=>25, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'TAPAK TUAN', 'kabupaten_id'=>'3'),
        array('id'=>26, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'KLUET TENGAH', 'kabupaten_id'=>'3'),
        array('id'=>27, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'PASIE RAJA', 'kabupaten_id'=>'3'),
        array('id'=>28, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'KLUET UTARA', 'kabupaten_id'=>'3'),
        array('id'=>29, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'KLUET TIMUR', 'kabupaten_id'=>'3'),
        array('id'=>30, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'KLUET SELATAN', 'kabupaten_id'=>'3'),
        array('id'=>31, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'BAKONGAN TIMUR', 'kabupaten_id'=>'3'),
        array('id'=>32, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'BAKONGAN', 'kabupaten_id'=>'3'),
        array('id'=>33, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'TRUMON TIMUR', 'kabupaten_id'=>'3'),
        array('id'=>34, 'kode_kecamatan'=>'1102010', 'nama_kecamatan'=>'TRUMON', 'kabupaten_id'=>'3'),
        array('id'=>35, 'kode_kecamatan'=>'1104053', 'nama_kecamatan'=>'DELENG POKHKISEN', 'kabupaten_id'=>'4'),
        array('id'=>36, 'kode_kecamatan'=>'1104052', 'nama_kecamatan'=>'KETAMBE', 'kabupaten_id'=>'4'),
        array('id'=>37, 'kode_kecamatan'=>'1104051', 'nama_kecamatan'=>'DARUL HASANAH', 'kabupaten_id'=>'4'),
        array('id'=>38, 'kode_kecamatan'=>'1104050', 'nama_kecamatan'=>'BADAR', 'kabupaten_id'=>'4'),
        array('id'=>39, 'kode_kecamatan'=>'1104041', 'nama_kecamatan'=>'LAWE BULAN', 'kabupaten_id'=>'4'),
        array('id'=>40, 'kode_kecamatan'=>'1104040', 'nama_kecamatan'=>'BABUSSALAM', 'kabupaten_id'=>'4'),
        array('id'=>41, 'kode_kecamatan'=>'1104032', 'nama_kecamatan'=>'LAWE SUMUR', 'kabupaten_id'=>'4'),
        array('id'=>42, 'kode_kecamatan'=>'1104031', 'nama_kecamatan'=>'BUKIT TUSAM', 'kabupaten_id'=>'4'),
        array('id'=>43, 'kode_kecamatan'=>'1104030', 'nama_kecamatan'=>'BAMBEL', 'kabupaten_id'=>'4'),
        array('id'=>44, 'kode_kecamatan'=>'1104023', 'nama_kecamatan'=>'LAUSER', 'kabupaten_id'=>'4'),
        array('id'=>45, 'kode_kecamatan'=>'1104022', 'nama_kecamatan'=>'SEMADAM', 'kabupaten_id'=>'4'),
        array('id'=>46, 'kode_kecamatan'=>'1104021', 'nama_kecamatan'=>'BABUL MAKMUR', 'kabupaten_id'=>'4'),
        array('id'=>47, 'kode_kecamatan'=>'1104020', 'nama_kecamatan'=>'LAWE SIGALA-GALA', 'kabupaten_id'=>'4'),
        array('id'=>48, 'kode_kecamatan'=>'1104012', 'nama_kecamatan'=>'TANOH ALAS', 'kabupaten_id'=>'4'),
        array('id'=>49, 'kode_kecamatan'=>'1104011', 'nama_kecamatan'=>'BABUL RAHMAD', 'kabupaten_id'=>'4'),
        array('id'=>50, 'kode_kecamatan'=>'1104010', 'nama_kecamatan'=>'LAWE ALAS', 'kabupaten_id'=>'4'),
        array('id'=>51, 'kode_kecamatan'=>'1105181', 'nama_kecamatan'=>'MADAT', 'kabupaten_id'=>'5'),
        array('id'=>52, 'kode_kecamatan'=>'1105180', 'nama_kecamatan'=>'SIMPANG ULIM', 'kabupaten_id'=>'5'),
        array('id'=>53, 'kode_kecamatan'=>'1105170', 'nama_kecamatan'=>'PANTE BIDARI', 'kabupaten_id'=>'5'),
        array('id'=>54, 'kode_kecamatan'=>'1105161', 'nama_kecamatan'=>'INDRA MAKMUR', 'kabupaten_id'=>'5'),
        array('id'=>55, 'kode_kecamatan'=>'1105160', 'nama_kecamatan'=>'JULOK', 'kabupaten_id'=>'5'),
        array('id'=>56, 'kode_kecamatan'=>'1105151', 'nama_kecamatan'=>'DARUL FALAH', 'kabupaten_id'=>'5'),
        array('id'=>57, 'kode_kecamatan'=>'1105150', 'nama_kecamatan'=>'NURUSSALAM', 'kabupaten_id'=>'5'),
        array('id'=>58, 'kode_kecamatan'=>'1105140', 'nama_kecamatan'=>'DARUL AMAN', 'kabupaten_id'=>'5'),
        array('id'=>59, 'kode_kecamatan'=>'1105135', 'nama_kecamatan'=>'IDI TIMUR', 'kabupaten_id'=>'5'),
        array('id'=>60, 'kode_kecamatan'=>'1105134', 'nama_kecamatan'=>'DARUL IHSAN', 'kabupaten_id'=>'5'),
        array('id'=>61, 'kode_kecamatan'=>'1105133', 'nama_kecamatan'=>'IDI TUNONG', 'kabupaten_id'=>'5'),
        array('id'=>62, 'kode_kecamatan'=>'1105132', 'nama_kecamatan'=>'BANDA ALAM', 'kabupaten_id'=>'5'),
        array('id'=>63, 'kode_kecamatan'=>'1105131', 'nama_kecamatan'=>'PEUDAWA', 'kabupaten_id'=>'5'),
        array('id'=>64, 'kode_kecamatan'=>'1105130', 'nama_kecamatan'=>'IDI RAYEUK', 'kabupaten_id'=>'5'),
        array('id'=>65, 'kode_kecamatan'=>'1105120', 'nama_kecamatan'=>'RANTO PEUREULAK', 'kabupaten_id'=>'5'),
        array('id'=>66, 'kode_kecamatan'=>'1105112', 'nama_kecamatan'=>'PEUREULAK BARAT', 'kabupaten_id'=>'5'),
        array('id'=>67, 'kode_kecamatan'=>'1105111', 'nama_kecamatan'=>'PEUREULAK TIMUR', 'kabupaten_id'=>'5'),
        array('id'=>68, 'kode_kecamatan'=>'1105110', 'nama_kecamatan'=>'PEUREULAK', 'kabupaten_id'=>'5'),
        array('id'=>69, 'kode_kecamatan'=>'1105101', 'nama_kecamatan'=>'SUNGAI RAYA', 'kabupaten_id'=>'5'),
        array('id'=>70, 'kode_kecamatan'=>'1105100', 'nama_kecamatan'=>'RANTAU SELAMAT', 'kabupaten_id'=>'5'),
        array('id'=>71, 'kode_kecamatan'=>'1105090', 'nama_kecamatan'=>'BIREM BAYEUN', 'kabupaten_id'=>'5'),
        array('id'=>72, 'kode_kecamatan'=>'1105082', 'nama_kecamatan'=>'PEUNARON', 'kabupaten_id'=>'5'),
        array('id'=>73, 'kode_kecamatan'=>'1105081', 'nama_kecamatan'=>'SIMPANG JERNIH', 'kabupaten_id'=>'5'),
        array('id'=>74, 'kode_kecamatan'=>'1105080', 'nama_kecamatan'=>'SERBA JADI', 'kabupaten_id'=>'5'),
      );

      // masukkan data ke database
      DB::table('libkecamatans')->insert($libkecamatans);
    }
}
