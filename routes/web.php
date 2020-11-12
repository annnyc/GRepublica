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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perfil', function () {
    return view('perfil');
})->name('GRepublica.perfil');

Route::get('/encerrarconta', function () {
    return view('encerrarconta');
})->name('GRepublica.encerrarconta');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::get('/encerrarconta', 'EncerrarcontaController@index')->name('encerrarconta');
