<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// We need to use MVC pattern
// M = Model
// V = View
// C = Controller

Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/', [CustomerController::class, 'store'])->name('customers.store');
});

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers', 'as' => 'admin.'], function () {
    Route::resource('photos', 'PhotoController')->except(["show"]);
    Route::resource('movies', 'PhotoController');

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::resource('catagories', 'PhotoController');
    });
});
