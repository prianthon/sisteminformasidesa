<?php

get('/', function () {
    return view('auth.login');
});
get('dashboard', function(){
  return view('dashboard.dashboard.dashboard');
});
