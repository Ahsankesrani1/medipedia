<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\SearchController::class, 'index'])->name('client.search');
Route::get('medicines', [App\Http\Controllers\SearchController::class, 'medicines'])->name('client.medicines');

Route::view('/about' , 'pages.about');
Route::view('/info' , 'pages.info');
Route::view('/admin' , 'pages.admin');
