<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// We need to use MVC pattern
// M = Model
// V = View
// C = Controller

Route::group(['prefix' => 'customers', 'namespace' => 'App\Http\Controllers', 'as' => 'customers.'], function () {
    //dd(CustomerController::class, 'App\Http\Controllers'. '\CustomerController');

    Route::get('/', 'CustomerController@index')->name('index');
    Route::get('/create', 'CustomerController@create')->name('create');
    Route::post('/', 'CustomerController@store')->name('store');
    Route::get('/show/{id}', 'CustomerController@show')->name('show');
    Route::get('/edit/{id}', 'CustomerController@show')->name('edit');
    Route::get('/update/{id}', 'CustomerController@show')->name('update');
    Route::get('/destroy/{id}', 'CustomerController@destroy')->name('destroy');
});

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers', 'as' => 'admin.'], function () {
    Route::resource('photos', 'PhotoController')->except(["show"]);
    Route::resource('movies', 'PhotoController');

    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::resource('catagories', 'PhotoController');
    });
});
