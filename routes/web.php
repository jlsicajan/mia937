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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/cine/', ['as'   => 'cinema', 'uses' => 'MainControllers\CinemaController@index']);
Route::get('/programacion/', ['as'   => 'pro', 'uses' => 'MainControllers\ProgrammationController@index']);
Route::get('/staff/', ['as'   => 'staff', 'uses' => 'MainControllers\StaffController@index']);
Route::get('/fotos/', ['as'   => 'photos', 'uses' => 'MainControllers\PhotosController@index']);
Route::get('/los20/', ['as'   => 'the20', 'uses' => 'MainControllers\The20Controller@index']);