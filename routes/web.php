<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'dashboard'])->name('home');
Route::get('/peserta',[HomeController::class,'peserta'])->name('data.peserta');

Route::get('/instruktur',[HomeController::class,'instruktur'])->name('data.instruktur');
Route::get('/import-data-instruktur',[HomeController::class,'importdata_instruktur'])->name('importdata.instruktur');

Route::get('/data_event',[HomeController::class,'data_event'])->name('data.event');
Route::get('/tambahdata_event',[HomeController::class,'tambahdata_event'])->name('tambahData.event');


