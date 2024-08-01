<?php

use App\Http\Controllers\Auth\Authcontroller;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UiController;
use Illuminate\Support\Facades\Route;



// Get Routes

//Auth Get
Route::get('/login', [UiController::class, 'loginui'])->name('loginui');
Route::get('/register', [UiController::class, 'registerui'])->name('registerui');
Route::get('/logout', [Authcontroller::class, 'Logout'])->name('logout');
// Auth POST Login
Route::post('/user-log', [Authcontroller::class, 'Login'])->name('Login');
Route::post('/user-reg', [Authcontroller::class, 'Register'])->name('Register');


//public Route
Route::get('/', [UiController::class, 'indexui'])->name('indexui');

//User routes
Route::get('/home', [UiController::class, 'homeui'])->name('homeui')->middleware('isUser');
Route::get('/template', [UiController::class, 'templatesui'])->name('templatesui')->middleware('isUser');
Route::get('/new', [UiController::class, 'newupdatesui'])->name('newupdatesui')->middleware('isUser');
Route::get('/data', [UiController::class, 'dataui'])->name('dataui')->middleware('isUser');
Route::get('/edit-data', [PortfolioController::class, 'GetUserdata'])->name('getdataui')->middleware('isUser');


//update Data
Route::post('/data-store', [PortfolioController::class, 'Storedata'])->name('storedata');
Route::post('/data-update', [PortfolioController::class, 'Updatedata'])->name('updatedata');


//Api for validation
Route::post('/username', [PortfolioController::class, 'ValidateUsername']);


Route::get('/test', [PortfolioController::class, 'test']);


Route::get('/template1', function () {
    return view('templates.template1');
});
