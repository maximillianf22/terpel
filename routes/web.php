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
    return view('recepcion.add');
});

Route::get('flota', function () {
    return view('flota.index');
});

Route::get('equipo', function () {
    return view('equipo.index');
});

Route::get('clientes', function () {
    return view('clientes.index');
});