<?php

use Illuminate\Database\Seeder;

class LibPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('pekerjaans')->delete();

      // buat data berupa array untuk diinput ke database
      $pekerjaans = array(
        array('id'=>1, 'pekerjaan'=>'Belum/Tidak Bekerja', 'tipe'=>'A'),
        array('id'=>2, 'pekerjaan'=>'Mengurus Rumah Tangga', 'tipe'=>'A'),
        array('id'=>3, 'pekerjaan'=>'Pelajar/Mahasiswa', 'tipe'=>'A'),
        array('id'=>4, 'pekerjaan'=>'Pensiunan', 'tipe'=>'A'),
        array('id'=>5, 'pekerjaan'=>'Pegawai Negeri Sipil', 'tipe'=>'A'),
        array('id'=>6, 'pekerjaan'=>'Tentara Nasional Indonesia', 'tipe'=>'A'),
        array('id'=>7, 'pekerjaan'=>'Kepolisian RI', 'tipe'=>'A'),
        array('id'=>8, 'pekerjaan'=>'Perdagangan', 'tipe'=>'A'),
        array('id'=>9, 'pekerjaan'=>'Petani/Pekebun', 'tipe'=>'A'),
        array('id'=>10, 'pekerjaan'=>'Peternak', 'tipe'=>'A'),
        array('id'=>11, 'pekerjaan'=>'Nelayan/Perikanan', 'tipe'=>'A'),
        array('id'=>12, 'pekerjaan'=>'Industri', 'tipe'=>'A'),
        array('id'=>13, 'pekerjaan'=>'Konstruksi', 'tipe'=>'A'),
        array('id'=>14, 'pekerjaan'=>'Transportasi', 'tipe'=>'A'),
        array('id'=>15, 'pekerjaan'=>'Karyawan Swasta', 'tipe'=>'A'),
        array('id'=>16, 'pekerjaan'=>'Karyawan BUMN', 'tipe'=>'A'),
        array('id'=>17, 'pekerjaan'=>'Karyawan BUMD', 'tipe'=>'A'),
        array('id'=>18, 'pekerjaan'=>'Karyawan Honorer', 'tipe'=>'A'),
        array('id'=>19, 'pekerjaan'=>'Buruh Harian Lepas', 'tipe'=>'A'),
        array('id'=>20, 'pekerjaan'=>'Buruh Tani/Perkebunan', 'tipe'=>'A'),
        array('id'=>21, 'pekerjaan'=>'Buruh Nelayan/Perikanan', 'tipe'=>'A'),
        array('id'=>22, 'pekerjaan'=>'Buruh Peternakan', 'tipe'=>'A'),
        array('id'=>23, 'pekerjaan'=>'Pembantu Rumah Tangga', 'tipe'=>'A'),
        array('id'=>24, 'pekerjaan'=>'Tukang Cukur', 'tipe'=>'A'),
        array('id'=>25, 'pekerjaan'=>'Tukang Listrik', 'tipe'=>'A'),
        array('id'=>26, 'pekerjaan'=>'Tukang Batu', 'tipe'=>'A'),
        array('id'=>27, 'pekerjaan'=>'Tukang Kayu', 'tipe'=>'A'),
        array('id'=>28, 'pekerjaan'=>'Tukang Sol Sepatu', 'tipe'=>'A'),
        array('id'=>29, 'pekerjaan'=>'Tukang Las/Pandai Besi', 'tipe'=>'A'),
        array('id'=>30, 'pekerjaan'=>'Tukang Jahit', 'tipe'=>'A'),
        array('id'=>31, 'pekerjaan'=>'Tukang Gigi', 'tipe'=>'A'),
        array('id'=>32, 'pekerjaan'=>'Penata Rias', 'tipe'=>'A'),
        array('id'=>33, 'pekerjaan'=>'Penata Busana', 'tipe'=>'A'),
        array('id'=>34, 'pekerjaan'=>'Penata Rambut', 'tipe'=>'A'),
        array('id'=>35, 'pekerjaan'=>'Mekanik', 'tipe'=>'A'),
        array('id'=>36, 'pekerjaan'=>'Seniman', 'tipe'=>'A'),
        array('id'=>37, 'pekerjaan'=>'Tabib', 'tipe'=>'A'),
        array('id'=>38, 'pekerjaan'=>'Paraji', 'tipe'=>'A'),
        array('id'=>39, 'pekerjaan'=>'Perancang Busana', 'tipe'=>'A'),
        array('id'=>40, 'pekerjaan'=>'Penterjemah', 'tipe'=>'A'),
        array('id'=>41, 'pekerjaan'=>'Imam Masjid', 'tipe'=>'A'),
        array('id'=>42, 'pekerjaan'=>'Pendeta', 'tipe'=>'A'),
        array('id'=>43, 'pekerjaan'=>'Pastur', 'tipe'=>'A'),
        array('id'=>44, 'pekerjaan'=>'Wartawan', 'tipe'=>'A'),
        array('id'=>45, 'pekerjaan'=>'Uztads/Mubaligh', 'tipe'=>'A'),
        array('id'=>46, 'pekerjaan'=>'Juru Masak', 'tipe'=>'A'),
        array('id'=>47, 'pekerjaan'=>'Promotor Acara', 'tipe'=>'A'),
        array('id'=>48, 'pekerjaan'=>'Anggota DPR-RI', 'tipe'=>'A'),
        array('id'=>49, 'pekerjaan'=>'Anggota DPD', 'tipe'=>'A'),
        array('id'=>50, 'pekerjaan'=>'Anggota BPK', 'tipe'=>'A'),
        array('id'=>51, 'pekerjaan'=>'Presiden', 'tipe'=>'A'),
        array('id'=>52, 'pekerjaan'=>'Wakil Presiden', 'tipe'=>'A'),
        array('id'=>53, 'pekerjaan'=>'Anggota Mahkamah Konstitusi', 'tipe'=>'A'),
        array('id'=>54, 'pekerjaan'=>'Anggota Kabinet/Kementerian', 'tipe'=>'A'),
        array('id'=>55, 'pekerjaan'=>'Duta Besar', 'tipe'=>'A'),
        array('id'=>56, 'pekerjaan'=>'Gubernur', 'tipe'=>'A'),
        array('id'=>57, 'pekerjaan'=>'Wakil Gubernur', 'tipe'=>'A'),
        array('id'=>58, 'pekerjaan'=>'Bupati', 'tipe'=>'A'),
        array('id'=>59, 'pekerjaan'=>'Wakil Bupati', 'tipe'=>'A'),
        array('id'=>60, 'pekerjaan'=>'Walikota', 'tipe'=>'A'),
        array('id'=>61, 'pekerjaan'=>'Wakil Walikota', 'tipe'=>'A'),
        array('id'=>62, 'pekerjaan'=>'Anggota DPRD Propinsi', 'tipe'=>'A'),
        array('id'=>63, 'pekerjaan'=>'Anggota DPRD Kabupaten/Kota', 'tipe'=>'A'),
        array('id'=>64, 'pekerjaan'=>'Dosen', 'tipe'=>'B'),
        array('id'=>65, 'pekerjaan'=>'Guru', 'tipe'=>'B'),
        array('id'=>66, 'pekerjaan'=>'Pilot', 'tipe'=>'B'),
        array('id'=>67, 'pekerjaan'=>'Pengacara', 'tipe'=>'B'),
        array('id'=>68, 'pekerjaan'=>'Notaris', 'tipe'=>'B'),
        array('id'=>69, 'pekerjaan'=>'Arsitek', 'tipe'=>'B'),
        array('id'=>70, 'pekerjaan'=>'Akuntan', 'tipe'=>'B'),
        array('id'=>71, 'pekerjaan'=>'Konsultan', 'tipe'=>'B'),
        array('id'=>72, 'pekerjaan'=>'Dokter', 'tipe'=>'B'),
        array('id'=>73, 'pekerjaan'=>'Bidan', 'tipe'=>'B'),
        array('id'=>74, 'pekerjaan'=>'Perawat', 'tipe'=>'B'),
        array('id'=>75, 'pekerjaan'=>'Apoteker', 'tipe'=>'B'),
        array('id'=>76, 'pekerjaan'=>'Psikiater/Psikolog', 'tipe'=>'B'),
        array('id'=>77, 'pekerjaan'=>'Penyiar Televisi', 'tipe'=>'B'),
        array('id'=>78, 'pekerjaan'=>'Penyiar Radio', 'tipe'=>'B'),
        array('id'=>79, 'pekerjaan'=>'Pelaut', 'tipe'=>'B'),
        array('id'=>80, 'pekerjaan'=>'Peneliti', 'tipe'=>'B'),
        array('id'=>81, 'pekerjaan'=>'Sopir', 'tipe'=>'B'),
        array('id'=>82, 'pekerjaan'=>'Pialang', 'tipe'=>'B'),
        array('id'=>83, 'pekerjaan'=>'Paranormal', 'tipe'=>'B'),
        array('id'=>84, 'pekerjaan'=>'Pedagang', 'tipe'=>'B'),
        array('id'=>85, 'pekerjaan'=>'Perangkat Desa', 'tipe'=>'B'),
        array('id'=>86, 'pekerjaan'=>'Kepala Desa', 'tipe'=>'B'),
        array('id'=>87, 'pekerjaan'=>'Biarawati', 'tipe'=>'B'),
        array('id'=>88, 'pekerjaan'=>'Wiraswasta', 'tipe'=>'B'),
      );

      // masukkan data ke database
      DB::table('pekerjaans')->insert($pekerjaans);
    }
}
