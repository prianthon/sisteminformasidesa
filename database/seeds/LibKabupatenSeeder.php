<?php

use Illuminate\Database\Seeder;

class LibKabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // kosongkan table libkecamatan
      DB::table('libkabupatens')->delete();

      // buat data berupa array untuk diinput ke database
      $libkabupatens = array(
        //provinsi aceh
        array('id'=>1, 'kode_kabupaten'=>'1101', 'nama_kabupaten'=>'KABUPATEN ACEH SELATAN', 'provinsi_id'=>'1'),
        array('id'=>2, 'kode_kabupaten'=>'1102', 'nama_kabupaten'=>'KABUPATEN ACEH TENGGARA', 'provinsi_id'=>'1'),
        array('id'=>3, 'kode_kabupaten'=>'1103', 'nama_kabupaten'=>'KABUPATEN ACEH TIMUR', 'provinsi_id'=>'1'),
        array('id'=>4, 'kode_kabupaten'=>'1104', 'nama_kabupaten'=>'KABUPATEN ACEH TENGAH', 'provinsi_id'=>'1'),
        array('id'=>5, 'kode_kabupaten'=>'1105', 'nama_kabupaten'=>'KABUPATEN ACEH BARAT', 'provinsi_id'=>'1'),
        array('id'=>6, 'kode_kabupaten'=>'1106', 'nama_kabupaten'=>'KABUPATEN ACEH BESAR', 'provinsi_id'=>'1'),
        array('id'=>7, 'kode_kabupaten'=>'1107', 'nama_kabupaten'=>'KABUPATEN PIDIE', 'provinsi_id'=>'1'),
        array('id'=>8, 'kode_kabupaten'=>'1108', 'nama_kabupaten'=>'KABUPATEN ACEH UTARA', 'provinsi_id'=>'1'),
        array('id'=>9, 'kode_kabupaten'=>'1109', 'nama_kabupaten'=>'KABUPATEN SIMEULUE', 'provinsi_id'=>'1'),
        array('id'=>10, 'kode_kabupaten'=>'1110', 'nama_kabupaten'=>'KABUPATEN ACEH SINGKIL', 'provinsi_id'=>'1'),
        array('id'=>11, 'kode_kabupaten'=>'1111', 'nama_kabupaten'=>'KABUPATEN BIREUEN', 'provinsi_id'=>'1'),
        array('id'=>12, 'kode_kabupaten'=>'1112', 'nama_kabupaten'=>'KABUPATEN ACEH BARAT DAYA', 'provinsi_id'=>'1'),
        array('id'=>13, 'kode_kabupaten'=>'1113', 'nama_kabupaten'=>'KABUPATEN GAYO LUES', 'provinsi_id'=>'1'),
        array('id'=>14, 'kode_kabupaten'=>'1114', 'nama_kabupaten'=>'KABUPATEN ACEH JAYA', 'provinsi_id'=>'1'),
        array('id'=>15, 'kode_kabupaten'=>'1115', 'nama_kabupaten'=>'KABUPATEN NAGAN RAYA', 'provinsi_id'=>'1'),
        array('id'=>16, 'kode_kabupaten'=>'1116', 'nama_kabupaten'=>'KABUPATEN ACEH TAMIANG', 'provinsi_id'=>'1'),
        array('id'=>17, 'kode_kabupaten'=>'1117', 'nama_kabupaten'=>'KABUPATEN BENER MERIAH', 'provinsi_id'=>'1'),
        array('id'=>18, 'kode_kabupaten'=>'1118', 'nama_kabupaten'=>'KABUPATEN PIDIE JAYA', 'provinsi_id'=>'1'),
        array('id'=>19, 'kode_kabupaten'=>'1171', 'nama_kabupaten'=>'KOTA BANDA ACEH', 'provinsi_id'=>'1'),
        array('id'=>20, 'kode_kabupaten'=>'1172', 'nama_kabupaten'=>'KOTA SABANG', 'provinsi_id'=>'1'),
        array('id'=>21, 'kode_kabupaten'=>'1173', 'nama_kabupaten'=>'KOTA LHOKSEUMAWE', 'provinsi_id'=>'1'),
        array('id'=>22, 'kode_kabupaten'=>'1174', 'nama_kabupaten'=>'KOTA LANGSA', 'provinsi_id'=>'1'),
        array('id'=>23, 'kode_kabupaten'=>'1175', 'nama_kabupaten'=>'KOTA SUBULUSSALAM', 'provinsi_id'=>'1'),
        //provinsi utara
        array('id'=>24, 'kode_kabupaten'=>'1201', 'nama_kabupaten'=>'KABUPATEN TAPANULI TENGAH', 'provinsi_id'=>'2'),
        array('id'=>25, 'kode_kabupaten'=>'1202', 'nama_kabupaten'=>'KABUPATEN TAPANULI UTARA', 'provinsi_id'=>'2'),
        array('id'=>26, 'kode_kabupaten'=>'1203', 'nama_kabupaten'=>'KABUPATEN TAPANULI SELATAN', 'provinsi_id'=>'2'),
        array('id'=>27, 'kode_kabupaten'=>'1204', 'nama_kabupaten'=>'KABUPATEN NIAS', 'provinsi_id'=>'2'),
        array('id'=>28, 'kode_kabupaten'=>'1205', 'nama_kabupaten'=>'KABUPATEN LANGKAT', 'provinsi_id'=>'2'),
        array('id'=>29, 'kode_kabupaten'=>'1206', 'nama_kabupaten'=>'KABUPATEN KARO', 'provinsi_id'=>'2'),
        array('id'=>30, 'kode_kabupaten'=>'1207', 'nama_kabupaten'=>'KABUPATEN DELI SERDANG', 'provinsi_id'=>'2'),
        array('id'=>31, 'kode_kabupaten'=>'1208', 'nama_kabupaten'=>'KABUPATEN SIMALUNGUN', 'provinsi_id'=>'2'),
        array('id'=>32, 'kode_kabupaten'=>'1209', 'nama_kabupaten'=>'KABUPATEN ASAHAN', 'provinsi_id'=>'2'),
        array('id'=>33, 'kode_kabupaten'=>'1210', 'nama_kabupaten'=>'KABUPATEN LABUHANBATU', 'provinsi_id'=>'2'),
        array('id'=>34, 'kode_kabupaten'=>'1211', 'nama_kabupaten'=>'KABUPATEN DAIRI', 'provinsi_id'=>'2'),
        array('id'=>35, 'kode_kabupaten'=>'1212', 'nama_kabupaten'=>'KABUPATEN TOBA SAMOSIR', 'provinsi_id'=>'2'),
        array('id'=>36, 'kode_kabupaten'=>'1213', 'nama_kabupaten'=>'KABUPATEN MANDAILING NATAL', 'provinsi_id'=>'2'),
        array('id'=>37, 'kode_kabupaten'=>'1214', 'nama_kabupaten'=>'KABUPATEN NIAS SELATAN', 'provinsi_id'=>'2'),
        array('id'=>38, 'kode_kabupaten'=>'1215', 'nama_kabupaten'=>'KABUPATEN PAKPAK BHARAT', 'provinsi_id'=>'2'),
        array('id'=>39, 'kode_kabupaten'=>'1216', 'nama_kabupaten'=>'KABUPATEN HUMBANG HASUNDUTAN', 'provinsi_id'=>'2'),
        array('id'=>40, 'kode_kabupaten'=>'1217', 'nama_kabupaten'=>'KABUPATEN SAMOSIR', 'provinsi_id'=>'2'),
        array('id'=>41, 'kode_kabupaten'=>'1218', 'nama_kabupaten'=>'KABUPATEN SERDANG BEDAGAI', 'provinsi_id'=>'2'),
        array('id'=>42, 'kode_kabupaten'=>'1219', 'nama_kabupaten'=>'KABUPATEN BATU BARA', 'provinsi_id'=>'2'),
        array('id'=>43, 'kode_kabupaten'=>'1220', 'nama_kabupaten'=>'KABUPATEN PADANG LAWAS UTARA', 'provinsi_id'=>'2'),
        array('id'=>44, 'kode_kabupaten'=>'1221', 'nama_kabupaten'=>'KABUPATEN PADANG LAWAS', 'provinsi_id'=>'2'),
        array('id'=>45, 'kode_kabupaten'=>'1222', 'nama_kabupaten'=>'KABUPATEN LABUHANBATU SELATAN', 'provinsi_id'=>'2'),
        array('id'=>46, 'kode_kabupaten'=>'1223', 'nama_kabupaten'=>'KABUPATEN LABUHANBATU UTARA', 'provinsi_id'=>'2'),
        array('id'=>47, 'kode_kabupaten'=>'1224', 'nama_kabupaten'=>'KABUPATEN NIAS UTARA', 'provinsi_id'=>'2'),
        array('id'=>48, 'kode_kabupaten'=>'1225', 'nama_kabupaten'=>'KABUPATEN NIAS BARAT', 'provinsi_id'=>'2'),
        array('id'=>49, 'kode_kabupaten'=>'1271', 'nama_kabupaten'=>'KOTA MEDAN', 'provinsi_id'=>'2'),
        array('id'=>50, 'kode_kabupaten'=>'1272', 'nama_kabupaten'=>'KOTA PEMATANG SIANTAR', 'provinsi_id'=>'2'),
        array('id'=>51, 'kode_kabupaten'=>'1273', 'nama_kabupaten'=>'KOTA SIBOLGA', 'provinsi_id'=>'2'),
        array('id'=>52, 'kode_kabupaten'=>'1274', 'nama_kabupaten'=>'KOTA TANJUNG BALAI', 'provinsi_id'=>'2'),
        array('id'=>53, 'kode_kabupaten'=>'1275', 'nama_kabupaten'=>'KOTA BINJAI', 'provinsi_id'=>'2'),
        array('id'=>54, 'kode_kabupaten'=>'1276', 'nama_kabupaten'=>'KOTA TEBING TINGGI', 'provinsi_id'=>'2'),
        array('id'=>55, 'kode_kabupaten'=>'1277', 'nama_kabupaten'=>'KOTA PADANGSIDIMPUAN', 'provinsi_id'=>'2'),
        array('id'=>56, 'kode_kabupaten'=>'1278', 'nama_kabupaten'=>'KOTA GUNUNGSITOLI', 'provinsi_id'=>'2'),
      );

      // masukkan data ke database
      DB::table('libkabupatens')->insert($libkabupatens);
    }
}
