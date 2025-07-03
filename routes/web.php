<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/cek-setting', function () {
    return \App\Helpers\SettingHelper::getSetting('address');
});

//route untyuk get data
Route::get('/', [HomeController::class, 'index'])->name('home');
