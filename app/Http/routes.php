<?php
// loginbox
get('/', function () {
    return view('auth.login');
});
// middleware group
$router->group([
      'middleware' => 'auth',
    ], function () {
      get('dashboard', function(){
        return view('dashboard.dashboard.dashboard');
      });
      ////////menu sidebar
      ////menu keluarga////
      get('keluarga','KeluargaController@index');
      get('keluarga/1','KeluargaController@satu');
      get('keluarga/1/2','KeluargaController@dua');
      get('keluarga/1/2/bepergian','KeluargaController@bepergian');
      ////menu penduduk////
      get('penduduk','PendudukController@index');
      ////menu pelayanan////
      get('pelayanan','PelayananController@index');
      //menu persyaratan dokumen
      get('persyaratandokumen','PersyaratanDokumenController@index');
      //menu data publik
      get('datapublik','DataPublikController@index');
      //menu program pemerintah
      get('programpemerintah','ProgramPemerintahController@index');
      ////menu peristiwa////
      //menu kelahiran
      get('kelahiran','Peristiwa\KelahiranController@index');
      //menu kematian
      get('kematian','Peristiwa\KematianController@index');
      //menu pindah
      get('pindah','Peristiwa\PindahController@index');
      //menu migrasi tenaga kerja
      get('migrasitenagakerja','Peristiwa\MigrasiController@index');
      ////menu kemiskinan////
      //audit kemsikinan
      get('auditkemiskinan','Kemiskinan\AuditController@index');
      //survei kemiskinan
      get('surveikemiskinan','Kemiskinan\SurveiController@index');
      ////menu pertanahan////
      //menu blok
      get('blok','Pertanahan\BlokController@index');
      //menu persil
      get('persil','Pertanahan\PersilController@index');
      //menu peta
      get('peta','Pertanahan\PetaController@index');
      ////menu perkantoran////
      //menu Surat Masuk
      get('surat/masuk','Perkantoran\MasukController@index');
      //menu surat keluar
      get('surat/keluar','Perkantoran\KeluarController@index');
      //menu ekspor
      get('ekspor','Perkantoran\EksporController@index');
      //menu aset desa
      get('aset/desa','Perkantoran\AsetController@index');
      ////menu inventaris////
      //menu inventaris
      get('inventaris','Inventaris\InventarisController@index');
      //menu jenis inventaris
      get('jenis/inventaris','Inventaris\JenisController@index');
      ////menu statistik////
      //menu piramida penduduk
      get('statistik/piramidapenduduk','Statistik\PiramidaController@index');
      //menu jenis kelamin
      get('statistik/jeniskelamin','Statistik\KelaminController@index');
      //menu perkawinan
      get('statistik/perkawinan','Statistik\PerkawinanController@index');
      //menu agama
      get('statistik/agama','Statistik\AgamaController@index');
      //menu golongan darah
      get('statistik/golongandarah','Statistik\DarahController@index');
      //menu pendidikan
      get('statistik/pendidikan','Statistik\PendidikanController@index');
      //menu pekerjaan
      get('statistik/pekerjaan','Statistik\PekerjaanController@index');
      //menu status tinggal
      get('statistik/statustinggal','Statistik\StatusController@index');
      //menu kemiskinan
      get('statistik/kemiskinan','Statistik\KemiskinanController@index');
      //menu jenis lahan
      get('statistik/jenislahan','Statistik\JenisController@index');
      ////menu keuangan////
      //menu perencanaan
      get('keuangan/perencanaan','Keuangan\PerencanaanController@index');
      //menu penganggaran
      get('keuangan/penganggaran','Keuangan\PenganggaranController@index');
      //menu realisasi
      get('keuangan/realisasi','Keuangan\RealisasiController@index');
      //menu kodifikasi akun
      get('keuangan/kodifikasiakun','Keuangan\KodifikasiController@index');
      // menu sumber dana
      get('keuangan/sumberdana','Keuangan\SumberController@index');
      //menu pustaka satuan
      get('keuangan/pustakasatuan','Keuangan\PustakaController@index');
      //menu pengaturan
      get('keuangan/pengaturan','Keuangan\PengaturanController@index');
      ////menu laporan////
      //menu menurut wilayah
      get('laporan/menurutwilayah','Laporan\WilayahController@index');
      //menu wajib ktp
      get('laporan/wajibktp','Laporan\WajibController@index');
      ////menu pustaka////
      //menu agama
      post('agama/cari','Lib\AgamaController@cari');
      resource('agama','Lib\AgamaController');
      //menu hubungan
      post('hubungan/cari','Lib\HubunganController@cari');
      resource('hubungan','Lib\HubunganController');
      //menu pekerjaan
      post('pekerjaan/cari','Lib\PekerjaanController@cari');
      resource('pekerjaan','Lib\PekerjaanController');
      //menu pendidikan
      post('pendidikan/cari','Lib\PendidikanController@cari');
      resource('pendidikan','Lib\PendidikanController');
      //menu penyalur tki
      post('penyalur/tki/cari','Lib\PenyalurTkiController@cari');
      resource('penyalur/tki','Lib\PenyalurTkiController');
      //menu reg negara
      //post('penyalur/tki/libnegara/cari','Lib\NegaraController@cari');
      //resource('penyalur/tki/libnegara','Lib\NegaraController');
      //menu status kawin
      post('status/kawin/cari','Lib\StatusKawinController@cari');
      resource('status/kawin','Lib\StatusKawinController');
      //menu status tinggal
      post('status/tinggal/cari','Lib\StatusTinggalController@cari');
      resource('status/tinggal','Lib\StatusTinggalController');
      //menu surat
      post('surat/cari','Lib\SuratController@cari');
      resource('surat','Lib\SuratController');
      //menu standar kemiskinan
      resource('standar/kemiskinan','Lib\StandarKemiskinanController');
      ////menu pengguna////
      //menu pengguna
      resource('pengguna','Pengguna\PenggunaController');
      //menu hak akses
      resource('hak/akses','Pengguna\HakController');
      ////menu pengaturan////
      //menu pengaturan umum
      get('pengaturan/umum','PengaturanUmumController@index');
      //menu pengaturan wilayah administratif
      get('pengaturan/umum/wilayah','Pengaturan\PengaturanUmumWilayahAdministratifController@index');
      //menu istilah dusun
      post('pengaturan/umum/libistilahdusun/cari','Lib\IstilahDusunController@cari');
      resource('pengaturan/umum/libistilahdusun','Lib\IstilahDusunController');
      //menu lib dusun
      post('pengaturan/umum/libdusun/cari','Lib\DusunController@cari');
      resource('pengaturan/umum/libdusun','Lib\DusunController');
      //menu lib rw
      post('pengaturan/umum/librw/cari','Lib\RwController@cari');
      resource('pengaturan/umum/librw','Lib\RwController');
      //menu lib rt
      post('pengaturan/umum/librt/cari','Lib\RtController@cari');
      resource('pengaturan/umum/librt','Lib\RtController');
      //menu pengaturan perangkat desa
      resource('pengaturan/umum/perangkatdesa','Pengaturan\PengaturanUmumPerangkatDesaController');
      //menu perangkat jabatan
      post('pengaturan/umum/perangkatjabatan/cari','Lib\PerangkatJabatanController@cari');
      resource('pengaturan/umum/perangkatjabatan','Lib\PerangkatJabatanController');
      //menu reg negara
      post('pengaturan/umum/libnegara/cari','Lib\PengaturanUmumRegNegaraController@cari');
      resource('pengaturan/umum/libnegara','Lib\PengaturanUmumRegNegaraController');
      //menu reg provinsi
      post('pengaturan/umum/libprovinsi/cari','Lib\PengaturanUmumRegProvinsiController@cari');
      resource('pengaturan/umum/libprovinsi','Lib\PengaturanUmumRegProvinsiController');
      //menu reg kabupaten
      post('pengaturan/umum/libkabupaten/cari','Lib\PengaturanUmumRegKabupatenController@cari');
      resource('pengaturan/umum/libkabupaten','Lib\PengaturanUmumRegKabupatenController');
      //menu reg kecamatan
      post('pengaturan/umum/libkecamatan/cari','Lib\PengaturanUmumRegKecamatanController@cari');
      resource('pengaturan/umum/libkecamatan','Lib\PengaturanUmumRegKecamatanController');
      //menu reg desa
      post('pengaturan/umum/libdesa/cari','Lib\PengaturanUmumRegDesaController@cari');
      resource('pengaturan/umum/libdesa','Lib\PengaturanUmumRegDesaController');
});
// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');
