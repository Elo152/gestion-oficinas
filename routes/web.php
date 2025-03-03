<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oficinas', [OficinaController::class, 'index'])->name('oficinas');
Route::get('/oficinas/create', [OficinaController::class, 'create'])->name('oficinas.create');
Route::post('/oficinas', [OficinaController::class, 'store'])->name('oficinas.store');
Route::get('/empleados/{id}', [EmpleadoController::class, 'index'])->name('empleados');
Route::get('/empleados/create/{id}', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');