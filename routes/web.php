<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard');
Route::view('/cuenta', 'banca/cuenta-saldo');
Route::view('/agregarfondos', 'banca/agregar-fondos');
Route::view('/transferencias', 'transferencias');
Route::view('/viajes', 'viajes');
Route::view('/historial', 'historial/historial');
Route::view('/detalles/transferencia', 'historial/detalles-trans'); // agregar {id} 
Route::view('/detalles/viaje', 'historial/detalles-viajes');// agregar {id} 
Route::view('/pagosyservicios', 'pagosyservicios');
Route::view('/soporte', 'soporte');
Route::view('/perfil', 'perfil');
Route::view('/configuraciones', 'configuraciones');