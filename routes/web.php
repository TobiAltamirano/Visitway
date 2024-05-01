<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Provincias
Route::get('/provincias', [\App\Http\Controllers\ProvinciasController::class, 'mostrarProvincias']);

    // Introducción
Route::get('/provincias/{id}/introduccion', [\App\Http\Controllers\ProvinciasController::class, 'mostrarIntroduccion'])
    ->Name('provincia.introduccion');
    
    // Actividades
Route::get('/provincias/{id}/tipos-actividades', [\App\Http\Controllers\ActividadesController::class, 'mostrarTiposActividades'])
    ->name('provincia.tipos-actividades');

        // Actividades por "Tipo Gastronomia"
        Route::get('/provincias/{id}/actividades/{idTipoActividad}', [\App\Http\Controllers\ActividadesController::class, 'mostrarActividadesPorTipo'])->name('provincia.actividades');

    // Gastronomia
Route::get('/provincias/{id}/tipos-gastronomia', [\App\Http\Controllers\GastronomiaController::class, 'mostrarTiposGastronomia'])
    ->name('provincia.tipos-gastronomia');

        // Gastronomia por "Tipo Gastronomia"
        Route::get('/provincias/{id}/gastronomia/{idTipoGastronomia}', [\App\Http\Controllers\GastronomiaController::class, 'mostrarGastronomiaPorTipo'])->name('provincia.gastronomia');

    // Alojamientos
Route::get('/provincias/{id}/tipos-alojamientos', [\App\Http\Controllers\AlojamientosController::class, 'mostrarTiposAlojamientos'])
    ->name('provincia.tipos-alojamientos');

        // Alojamientos por "Tipo Alojamientos"
Route::get('/provincias/{id}/alojamientos/{idTipoAlojamiento}', [\App\Http\Controllers\AlojamientosController::class, 'mostrarAlojamientosPorTipo'])
    ->name('provincia.alojamientos');

// Detalle del servicio - Alojamiento
Route::get('/provincias/{id}/alojamientos/{alojamientoId}/detalle', [\App\Http\Controllers\AlojamientosController::class, 'detalleAlojamiento'])
    ->name('provincia.detalleAlojamiento');

// Detalle del servicio - Actividad
Route::get('/provincias/{id}/actividades/{actividadId}/detalle', [\App\Http\Controllers\ActividadesController::class, 'detalleActividad'])
    ->name('provincia.detalleActividad');

// Detalle del servicio - Gastronomía
Route::get('/provincias/{id}/gastronomia/{actividadId}/detalle', [\App\Http\Controllers\GastronomiaController::class, 'detalleGastronomia'])
    ->name('provincia.detalleGastronomia');

    // Filtrado especial de alojamientos
Route::get('/provincias/{id}/alojamientos/{idTipoAlojamiento}/filtrar-alojamientos', [\App\Http\Controllers\FiltrosController::class, 'filtrarAlojamientos'])
    ->name('provincia.filtrarAlojamientos');

    // Filtrado especial de actividades
Route::get('/provincias/{id}/actividades/{idTipoActividad}/filtrar-actividad', [\App\Http\Controllers\FiltrosController::class, 'filtrarActividades'])
->name('provincia.filtrarActividades');

    // Filtrado especial de locales gastronomicos
Route::get('/provincias/{id}/gastronomia/{idTipoGastronomia}/filtrar-gastronomia', [\App\Http\Controllers\FiltrosController::class, 'filtrarGastronomia'])
    ->name('provincia.filtrarGastronomia');

    // Agregar a favoritos
Route::get('/favoritos', [\App\Http\Controllers\FavoritosController::class, 'mostrarFavoritos'])
    ->name('favoritos.mostrar');

Route::post('/favoritos/agregar/{id}/{tipo}', [\App\Http\Controllers\FavoritosController::class, 'agregarFavoritos'])
    ->name('favoritos.agregar');

    // Eliminar de favoritos
Route::post('/favoritos/eliminar/{id}/{tipo}', [\App\Http\Controllers\FavoritosController::class, 'eliminarFavoritos'])
    ->name('favoritos.eliminar');
















    // Posteos

    // Mostrar posteos
Route::get('/blog/posteos', [\App\Http\Controllers\PosteosController::class, 'mostrarPosteos'])
    ->name('posteos.mostrar');

        // Formulario para crear posteo
Route::get('/blog/posteos/crear', [\App\Http\Controllers\PosteosController::class, 'formularioCreacionPosteo'])
    ->name('posteos.crear');

    // Proceso creación de posteo
Route::post('/blog/posteos/procesar', [\App\Http\Controllers\PosteosController::class, 'procesoCreacionPosteo'])
    ->name('posteos.crear.proceso');

    // Formulario edición posteo
Route::get('/posteos/{id}/editar', [\App\Http\Controllers\PosteosController::class, 'formularioEdicionPosteo'])
    ->name('posteos.editar');

    // Actualización de posteo
Route::post('/posteos/{id}/actualizar', [\App\Http\Controllers\PosteosController::class, 'actualizacionPosteo'])
    ->name('posteos.actualizar');

        // Confirmación eliminación de posteo
Route::get('/posteos/{id}/eliminar', [\App\Http\Controllers\PosteosController::class, 'confirmacionEliminacionPosteo'])
->name('posteos.eliminar');

        // Proceso eliminación posteo
Route::post('/posteos/{id}/eliminar/procesar', [\App\Http\Controllers\PosteosController::class, 'procesoEliminacionPosteo'])
        ->name('posteos.eliminar.procesos');

                // Filtrar posteos por provincia
Route::get('/posteos/filtrar', [\App\Http\Controllers\FiltrosController::class, 'filtrarPosteos'])
->name('posteos.filtrar');














// Actividades Alternativas

    // Mostrar posteos
Route::get('/blog/actividades-alternativas', [\App\Http\Controllers\AlternativasController::class, 'mostrarActividadesAlternativas'])
    ->name('alternativas.mostrar');

        // Formulario para crear actividades alternativas
Route::get('/blog/actividades-alternativas/crear', [\App\Http\Controllers\AlternativasController::class, 'formularioCreacionActividadAlternativa'])
    ->name('alternativas.crear');

    // Proceso creación de actividades alternativas
Route::post('/blog/actividades-alternativas/procesar', [\App\Http\Controllers\AlternativasController::class, 'procesoCreacionActividadAlternativa'])
    ->name('alternativas.crear.proceso');

    // Formulario edición pact. alternativa
Route::get('/actividades-alternativas/{id}/editar', [\App\Http\Controllers\AlternativasController::class, 'formularioEdicionActividadAlternativa'])
    ->name('alternativas.editar');

    // Actualización de alternativa
Route::post('/actividades-alternativas/{id}/actualizar', [\App\Http\Controllers\AlternativasController::class, 'actualizacionActividadAlternativa'])
    ->name('alternativas.actualizar');

        // Confirmación eliminación alternativa
Route::get('/actividades-alternativas/{id}/eliminar', [\App\Http\Controllers\AlternativasController::class, 'confirmacionEliminacionActividadAlternativa'])
->name('alternativas.eliminar');

        // Proceso eliminación alternativa
Route::post('/actividades-alternativas/{id}/eliminar/procesar', [\App\Http\Controllers\AlternativasController::class, 'procesoEliminacionActividadAlternativa'])
        ->name('alternativas.eliminar.proceso');

                // Filtrar actividades alternativas por provincia
Route::get('/actividades-alternativas/filtrar', [\App\Http\Controllers\FiltrosController::class, 'filtrarActividadesAlternativas'])
->name('alternativas.filtrar');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
