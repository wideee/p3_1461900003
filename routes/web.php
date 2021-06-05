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

Route::get('/', 'PagesController@data');
Route::get('/siswa0003', 'PagesController@siswa');
Route::get('/guru0003', 'PagesController@guru');
Route::get('/kelas0003', 'PagesController@kelas');

//kontroller1
Route::get('/', 'JoinController@index');

//kontroller2
Route::get('/siswa0003', 'SiswaController@index');
Route::get('/tambahsiswa0003', 'SiswaController@create');
Route::post('/siswa0003', 'SiswaController@store');
Route::get('/editsiswa0003', 'SiswaController@edit');


//kontroller3
Route::get('/guru0003', 'GuruController@index');
Route::get('/tambahguru0003', 'GuruController@create');
Route::post('/guru0003', 'GuruController@store');

//kontroller4
Route::get('/kelas0003', 'KelasController@index');
Route::get('/tambahkelas0003', 'KelasController@create');
Route::post('/kelas0003', 'KelasController@store');
