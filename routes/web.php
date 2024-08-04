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
// Route::get('/home', [UiController::class, 'homeui'])->name('homeui')->middleware('isUser');
// Route::get('/template', [UiController::class, 'templatesui'])->name('templatesui')->middleware('isUser');
// Route::get('/new', [UiController::class, 'newupdatesui'])->name('newupdatesui')->middleware('isUser');
// Route::get('/data', [UiController::class, 'dataui'])->name('dataui')->middleware('isUser');
// Route::get('/edit-data', [PortfolioController::class, 'GetUserdata'])->name('getdataui')->middleware('isUser');



Route::group(['prefix' => 'admin'], function () {
    //user
    Route::get('/home', [UiController::class, 'homeui'])->name('homeui')->middleware('isUser');
    Route::get('/template', [UiController::class, 'templatesui'])->name('templatesui')->middleware('isUser');
    Route::get('/new', [UiController::class, 'newupdatesui'])->name('newupdatesui')->middleware('isUser');
    Route::get('/data', [UiController::class, 'dataui'])->name('dataui')->middleware('isUser');
    Route::get('/edit-data', [PortfolioController::class, 'GetUserdata'])->name('getdataui')->middleware('isUser');
    Route::get('/profile', [UiController::class, 'profile'])->name('profileui')->middleware('isUser');

    //update Data
    Route::post('/data-store', [PortfolioController::class, 'Storedata'])->name('storedata')->middleware('isUser');
    Route::post('/data-update', [PortfolioController::class, 'Updatedata'])->name('updatedata')->middleware('isUser');
    Route::post('/deleteuser', [PortfolioController::class, 'DeleteUser'])->name('deleteuser')->middleware('isUser');
});


//Api Routes
Route::post('/username', [PortfolioController::class, 'ValidateUsername']);
Route::post('/ChangeVisibility', [PortfolioController::class, 'ChangeVisibility']);

Route::get('/test', [PortfolioController::class, 'test']);


Route::get('preview/{id}', function ($id) {
    return view('templates.template1');
})->name('template1');

//portfolio
Route::get('/{username}', [PortfolioController::class, 'ShowPortfolio'])->name('ShowPortfolio')->middleware('isUser');
