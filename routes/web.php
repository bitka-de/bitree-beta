<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

# Legal Pages
Route::view('/impressum', 'pages.legal.imprint')->name('imprint');
Route::view('/datenschutz', 'pages.legal.privacy')->name('privacy');
Route::view('/agb', 'pages.legal.agb')->name('agb');
