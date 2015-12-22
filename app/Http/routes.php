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
      ////menu pengaturan////
      get('pengaturan/umum','PengaturanUmumController@index');
});
// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');
