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

use App\Http\Controllers\VendedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vistas.inicio');
});

Auth::routes();

Route::resource('gasto','GastoController');
Route::get('/ini','GastoController@index');

Route::resource('pago-e','PagoEfectivoController');

Route::resource('pago-t','PagoTarjetaController');

Route::resource('vendedor','VendedoresController');
Route::get('/ven', 'VendedoresController@index');

Route::resource('apro','AprovacionController');

Route::resource('tarje','TarjetaController');
Route::get('/mon', 'TarjetaController@index');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forma-pago',function(){
    return view('vistas.tipo_pago');
})->name('pago');

Route::get('/forma-pago_efec',function(){
    return view('vistas.tipo_pago');
})->name('efectivo');

Route::get('/forma-pago_tarjeta',function(){
    return view('vistas.tipos_pagos');
})->name('targeta');

Route::get('/forma-pago_gastos',function(){
    return view('vistas.Registro_gastos');
})->name('gastos');



