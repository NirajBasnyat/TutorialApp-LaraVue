<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Auth::routes();

Route::get('/', function () {

    return view('welcome');
});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('register/confirm', [\App\Http\Controllers\ConfirmEmailController::class, 'index'])->name('confirm_email');

Route::get('/logout', function () {
    auth()->logout();
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::resource('series', SeriesController::class);
});

