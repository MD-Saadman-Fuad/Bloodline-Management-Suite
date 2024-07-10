<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('donorsignup');
});
Route::get('/login', function () {
    return view('donorlogin');
})->name('login.index');
Route::get('/signup', function () {
    return view('donorsignup');
})->name('signup.index');