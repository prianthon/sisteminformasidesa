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
    //menu sidebar
    get('pengaturan/umum','PengaturanUmumController@index');
});
// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');
