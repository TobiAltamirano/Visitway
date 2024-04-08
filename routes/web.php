<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// // Provincias
// Route::get('/provincias', [\App\Http\Controllers\ProvinciasController::class, 'provincias']);

// // Introducción
// Route::get('/provincias/{id}/introduccion', [\App\Http\Controllers\ProvinciasController::class, 'introduccionProvincia']);
    
//     // Actividades
// Route::get('/provincias/{id}/actividades', [\App\Http\Controllers\ProvinciasController::class, 'actividadesProvincia']);

//     // Gastronomia
// Route::get('/provincias/{id}/gastronomia', [\App\Http\Controllers\ProvinciasController::class, 'gastronomiaProvincia']);

//     // Alojamientos
// Route::get('/provincias/{id}/alojamientos', [\App\Http\Controllers\ProvinciasController::class, 'alojamientosProvincia']);

// // Detalle del servicio - Actividad
// Route::get('/provincias/{id}/actividades/{actividadId}', [\App\Http\Controllers\ProvinciasController::class, 'detalleActividad']);

// // Detalle del servicio - Gastronomía
// Route::get('/provincias/{id}/gastronomia/{actividadId}', [\App\Http\Controllers\ProvinciasController::class, 'detalleGastronomia']);

// // Detalle del servicio - Alojamiento
// Route::get('/provincias/{id}/alojamientos/{alojamientoId}', [\App\Http\Controllers\ProvinciasController::class, 'detalleAlojamiento']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
