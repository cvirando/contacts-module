<?php

/**
 * Made by CV. IRANDO
 * https://irando.co.id ©2023
 * info@irando.co.id
 */

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

Route::prefix('contacts')->group(function() {
    Route::get('/', 'ContactsController@index')->name('ContactsIndex');
    Route::get('/create', 'ContactsController@create')->name('ContactsCreate');
    Route::post('/store', 'ContactsController@store')->name('ContactsStore');
    Route::get('/edit/{id}', 'ContactsController@edit')->name('ContactsEdit');
    Route::put('/update/{id}', 'ContactsController@update')->name('ContactsUpdate');
    Route::delete('/delete/{id}', 'ContactsController@destroy')->name('ContactsDelete');
});
