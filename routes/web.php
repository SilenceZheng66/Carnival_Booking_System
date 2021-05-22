<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\Home\IndexController@index');

Route::get('/dashboard','App\Http\Controllers\Dashboard\IndexController@index')->middleware(['auth'])->name('dashboard');

Route::get('/logout','App\Http\Controllers\Dashboard\IndexController@logout')->middleware(['auth']);

Route::prefix('dashboard')->namespace('App\Http\Controllers\Dashboard')->group(function () {
    Route::get('reserve', 'IndexController@newReservation')->middleware(['auth']);
    Route::get('checkin', 'IndexController@checkin')->middleware(['auth']);
});

Route::prefix('reservation')->namespace('App\Http\Controllers\Dashboard')->group(function () {
        Route::get('cancel', 'ReservationController@cancel')->middleware(['auth']);
        Route::post('add', 'ReservationController@store')->middleware(['auth']);
        Route::post('checkin', 'ReservationController@checkin')->middleware(['auth']);
});

require __DIR__.'/auth.php';
