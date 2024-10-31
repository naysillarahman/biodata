<?php

use App\Http\Controllers\JalurController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ini adalah route tanpa MVC
Route::get('/jalanbaru', function () {
    return 'Ini Jalan Baru Tanpa MVC'; 
});


// Ini adalah route menggunakan View
Route::get('/jalurview', function () {
    return view('Viewjalur');
});

// ini adalah route menggunakan view & controller
Route::get('/jalurcontroller',[JalurController::class,'index']);

// ini adalah route menggunakan view, controller & model
Route::get('/jalurmodel',[JalurController::class,'MemampilkanDataModel']);


// ini adalah route menggunakan view, controller & model
Route::get('/jalurbiodata',[BiodataController::class,'MemampilkanBiodata']);