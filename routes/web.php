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
    return view('/principal/index');
});

Route::get('/contacto', function () {
    return view('/principal/contacto');
});

Route::get('/acerca_de', function () {
    return view('/principal/acercade');
});

Route::get('/prueba', function () {
    return view('/principal/prueba');
});

Route::get('/audio', function () {
    return view('/principal/audio');
});

Route::get('/clasico', function () {
    return view('/principal/clasico');
});

Route::get('/frase', function () {
    return view('/principal/frase');
});

//Route::get('/galeria', function () {
//    return view('/principal/galeria');
//});

Route::get('/link', function () {
    return view('/principal/link');
});


Route::get('/video', function () {
    return view('/principal/video');
});