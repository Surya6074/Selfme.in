<?php

use App\Http\Controllers\Auth\Authcontroller;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UiController;
use Illuminate\Support\Facades\Route;



// Get routes
Route::get('/login', [UiController::class, 'loginui'])->name('loginui');
Route::get('/register', [UiController::class, 'registerui'])->name('registerui');
Route::get('/home', [UiController::class, 'homeui'])->name('homeui');
Route::get('/template', [UiController::class, 'templatesui'])->name('templatesui');
Route::get('/new', [UiController::class, 'newupdatesui'])->name('newupdatesui');
Route::get('/data', [UiController::class, 'dataui'])->name('dataui');
Route::get('/', [UiController::class, 'indexui'])->name('indexui');

// Auth Login
Route::post('/user-log', [Authcontroller::class, 'Login'])->name('Login');
Route::post('/user-reg', [Authcontroller::class, 'Register'])->name('Register');

//update Data
Route::post('/data-update', [PortfolioController::class, 'Storedata'])->name('storedata');


//Api for validation
Route::post('/username', [PortfolioController::class, 'ValidateUsername']);
