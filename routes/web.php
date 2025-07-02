<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/cek-setting', function () {
    return \App\Helpers\SettingHelper::getSetting('address');
});

