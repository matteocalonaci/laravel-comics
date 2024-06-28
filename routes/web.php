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
        "titolo" => "WELCOME LARAVEL COMICS",
        "fumetto1" => [
            "Titolo: Oshi No Ko",
            "Autore: Aka Akasaka",
            "Prezzo: €9.90",
        ],
        "fumetto2" => 
        [
            "Titolo: Berserk",
            "Autore: Kentaro Miura",
            "Prezzo: €5.50",
         
        ],
        "fumetto3" => [
            "Titolo: The Climber",
            "Autore: Shin'ickìhi Sakamoto",
            "Prezzo: €6.90",
           

        ],
        "fumetto4" => [
            "Titolo: 20th Century Boys Ultimate Deluxe",
            "Autore: Naoki Urasawa",
            "Prezzo: €14.90",
        ],
        "fumetto5" => [
            "Titolo: Monster Deluxe",
            "Autore: Naoki Urasawa",
            "Prezzo: €13.90",
        ],
        "fumetto6" => [
            "Titolo: Hirayasumi",
            "Autore: Keigo Shinzo",
            "Prezzo: €6.90",
        ],
        
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        "titolo" => "WELCOME LARAVEL COMICS pg2"
    ];
    return view('altro', $data);
});
