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

// Route::get('/home', function () {
//     $data = ["manga" => config("storeprova")];
       
//     return view('home', $data);
// });

Route::get('/home', function () {
    $data = config("store");
    return view('home', $data);
});

Route::get('/about', function () {
    $data = config("store");
    return view('altro', $data);
});
