<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/about', function () {
    return view('About Us');
})->name('about');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');
