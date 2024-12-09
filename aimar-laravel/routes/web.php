<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Eran rutas estaticas como create about sevices.... poniamos la uri concreta. Pero ahora queremos dinamizarlo. por 
//ejemplo no queremos ir a prodct sino que queremos que el controlador identifique el 18 del product para acceder 
//directamente ahi 
//Route::get('/product/18', [Controller::class, 'function'])->name('example');
//para eso con las  {} identificamos el nombre del argumento dinamico de la ruta que estamos contrullendo.
//Route::get('/product/{id}', [Controller::class, 'function'])->name('example');
//podria no ser obligatorio el tener una variable para eso pondiamos la ? 
//Route::get('/product/{id?}', [Controller::class, 'function'])->name('example');

Route::get('/product/{id}', [Controller::class, 'function'])->name('example');
