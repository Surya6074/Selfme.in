<?php

use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/template', function () {
    return view('template');
});
Route::get('/new', function () {
    return view('new');
});
Route::get('/data', function () {
    return view('data');
});
