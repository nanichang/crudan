<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/individual', 'RegistrationController@individual')->name('individual');
Route::post('/individual', 'RegistrationController@storeIndividual')->name('individual.post');

Route::get('/corporate', 'RegistrationController@corporate')->name('corporate');
Route::post('/corporate', 'RegistrationController@createCorporate')->name('corporate.post');

