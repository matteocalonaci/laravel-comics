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
  $data = [
    "titolo"=>"WELCOME LARAVEL COMICS"
  ];
    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        "titolo"=>"WELCOME LARAVEL COMICS pg2"
      ];
        return view('altro', $data);
  });

