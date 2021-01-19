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
    return view('auth.login');
});

Route::resource('docente', 'docenteController')->middleware('auth');
Route::resource('materia', 'MateriaController')->middleware('auth');
Route::resource('reportes', 'ReportesController')->middleware('auth');
Route::resource('horario', 'HorarioController')->middleware('auth');
Route::resource('bitacora', 'BitacoraController')->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
