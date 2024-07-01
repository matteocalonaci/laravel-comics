<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/home', function () {
     $data = config("store");
     return view('home', $data);
 })->name("home");;

 Route::get('/personaggi', function () {
     $data = config("store");
     return view('personaggi', $data);
 }) ->name("personaggi");

 Route::get('/comics', function () {
    $data = config("store");
    return view('comics', $data);
})->name("comics");
