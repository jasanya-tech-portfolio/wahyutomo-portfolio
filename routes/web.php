<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/project', function () {
    return view('pages.project');
});

Route::get('/cek-setting', function () {
    return \App\Helpers\SettingHelper::getSetting('address');
});

//route untyuk get data
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/project/{id}', [ProjectController::class, 'showProject'])->name('project.show');

// create data contact
Route::post('/submit-contact', [HomeController::class, 'contact'])->name('contact');
