<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CronogramaController;
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











// Panel Administrador

// Alojamientos

// Mostrar alojamiento en panel
Route::get('/panel-administrador/alojamientos', [\App\Http\Controllers\AdministradorController::class, 'mostrarAlojamientos'])
->name('administrador.alojamientos');

// Form edit
Route::get('/panel-administrador/alojamiento/{id}/editar', [\App\Http\Controllers\AdministradorController::class, 'editarAlojamiento'])
->name('administrador.alojamientos.editar');

// proceso edicion
Route::post('/panel-administrador/alojamiento/{id}/editar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEdicionAlojamiento'])
->name('administrador.alojamientos.editar.proceso');



// Formulario de creación de alojamiento
Route::get('/panel-administrador/alojamientos/crear', [\App\Http\Controllers\AdministradorController::class, 'crearAlojamiento'])
    ->name('administrador.alojamientos.crear');

// Proceso de creación de alojamiento
Route::post('/panel-administrador/alojamientos/crear/proceso', [\App\Http\Controllers\AdministradorController::class, 'procesoCreacionAlojamiento'])
    ->name('administrador.alojamientos.crear.proceso');


    // Confirmacion eliminar alojamiento
Route::get('/panel-administrador/alojamiento/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarAlojamiento'])
->name('administrador.alojamientos.eliminar');

// Proceso eliminar alojamiento
Route::post('/panel-administrador/alojamiento/{id}/eliminar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEliminacionAlojamiento'])
    ->name('administrador.alojamientos.eliminar.procesar');




// ADMINISTRAR ACTIVIDADES

// Mostrar actividades en panel
Route::get('/panel-administrador/actividades', [\App\Http\Controllers\AdministradorController::class, 'mostrarActividades'])
    ->name('administrador.actividades');

// Formulario de edición de actividad
Route::get('/panel-administrador/actividad/{id}/editar', [\App\Http\Controllers\AdministradorController::class, 'editarActividad'])
    ->name('administrador.actividades.editar');

// Proceso de edición de actividad
Route::post('/panel-administrador/actividad/{id}/editar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEdicionActividad'])
    ->name('administrador.actividades.editar.proceso');

// Formulario de creación de actividad
Route::get('/panel-administrador/actividades/crear', [\App\Http\Controllers\AdministradorController::class, 'crearActividad'])
    ->name('administrador.actividades.crear');

// Proceso de creación de actividad
Route::post('/panel-administrador/actividades/crear/proceso', [\App\Http\Controllers\AdministradorController::class, 'procesoCreacionActividad'])
    ->name('administrador.actividades.crear.proceso');

// Confirmación de eliminación de actividad
Route::get('/panel-administrador/actividad/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarActividad'])
    ->name('administrador.actividades.eliminar');

// Proceso de eliminación de actividad
Route::post('/panel-administrador/actividad/{id}/eliminar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEliminacionActividad'])
    ->name('administrador.actividades.eliminar.procesar');


















// Gastronomia

// ADMINISTRAR LOCALES GASTRONÓMICOS

// Mostrar locales gastronómicos en panel
Route::get('/panel-administrador/locales-gastronomicos', [\App\Http\Controllers\AdministradorController::class, 'mostrarLocalesGastronomicos'])
    ->name('administrador.locales_gastronomicos');

// Formulario de edición de local gastronómico
Route::get('/panel-administrador/local-gastronomico/{id}/editar', [\App\Http\Controllers\AdministradorController::class, 'editarLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.editar');

// Proceso de edición de local gastronómico
Route::post('/panel-administrador/local-gastronomico/{id}/editar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEdicionLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.editar.proceso');

// Formulario de creación de local gastronómico
Route::get('/panel-administrador/locales-gastronomicos/crear', [\App\Http\Controllers\AdministradorController::class, 'crearLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.crear');

// Proceso de creación de local gastronómico
Route::post('/panel-administrador/locales-gastronomicos/crear/proceso', [\App\Http\Controllers\AdministradorController::class, 'procesoCreacionLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.crear.proceso');

// Confirmación de eliminación de local gastronómico
Route::get('/panel-administrador/local-gastronomico/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.eliminar');

// Proceso de eliminación de local gastronómico
Route::post('/panel-administrador/local-gastronomico/{id}/eliminar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEliminacionLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.eliminar.procesar');



    // PANEL :: POSTEOS

    // Mostrar todos los posteos
Route::get('/panel-administrador/posteos', [\App\Http\Controllers\AdministradorController::class, 'mostrarPosteos'])
->name('administrador.posteos.mostrar');

// Ver un posteo específico
Route::get('/panel-administrador/posteo/{id}/ver', [\App\Http\Controllers\AdministradorController::class, 'verPosteo'])
->name('administrador.posteos.ver');

// Eliminar un posteo
Route::post('/panel-administrador/posteo/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarPosteo'])
->name('administrador.posteos.eliminar');





// PANEL :: ALTERNATIVAS

// Mostrar todas las alternativas
Route::get('/panel-administrador/actividades-alternativas', [\App\Http\Controllers\AdministradorController::class, 'mostrarActividadesAlternativas'])
    ->name('administrador.actividades-alternativas.mostrar');
    
// Ver una act. alternativa específica
Route::get('/panel-administrador/actividad-alternativa/{id}/ver', [\App\Http\Controllers\AdministradorController::class, 'verActividadAlternativa'])
    ->name('administrador.actividades-alternativas.ver');
    
// Eliminar una actividad alternativa
Route::post('/panel-administrador/actividad-alternativa/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarActividadAlternativa'])
    ->name('administrador.actividades-alternativas.eliminar');


// PANEL :: USUARIOS

// Mostrar
Route::get('/panel-administrador/usuarios', [\App\Http\Controllers\AdministradorController::class, 'mostrarUsuarios'])
    ->name('administrador.usuarios.mostrar');

// Convertir en administrador
Route::post('/panel-administrador/usuarios/{id}/convertir-administrador', [\App\Http\Controllers\AdministradorController::class, 'otorgarPrivilegiosAdmin'])
    ->name('administrador.usuarios.otorgar-privilegios');

// Convertir en usuario comun
Route::post('/panel-administrador/usuarios/{id}/quitar-administrador', [\App\Http\Controllers\AdministradorController::class, 'quitarPrivilegiosAdmin'])
    ->name('administrador.usuarios.quitar-privilegios');

// Eliminar usuario
Route::post('/panel-administrador/usuarios/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarUsuario'])
    ->name('administrador.usuarios.eliminar');


// CRONOGRAMA

// MOSTRAR CRONOGRAMA ORDENADO POR DÍAS
Route::get('/cronograma', [\App\Http\Controllers\CronogramaController::class, 'mostrarCronograma'])
    ->name('cronograma.mostrar');

// AGREGAR ACTIVIDAD AL CRONOGRAMA
Route::post('/cronograma/{id}/agregar', [\App\Http\Controllers\CronogramaController::class, 'agregarAlCronograma'])
    ->name('cronograma.agregar');

// ELIMINAR ACTIVIDAD DEL CRONOGRAMA
Route::post('/cronograma/{id}/eliminar', [\App\Http\Controllers\CronogramaController::class, 'eliminarDelCronograma'])
    ->name('cronograma.eliminar');

// EDITAR ACTIVIDAD DEL CRONOGRAMA
Route::post('/cronograma/{id}/editar', [\App\Http\Controllers\CronogramaController::class, 'editarActividadDelCronograma'])
->name('cronograma.editar');

// DUPLICAR ACTIVIDAD DEL CRONOGRAMA
Route::post('/cronograma/{id}/duplicar/{idActividad}', [\App\Http\Controllers\CronogramaController::class, 'duplicarActividadDelCronograma'])
->name('cronograma.duplicar');

// // EDITAR DIA/HORA CRONOGRAMA
// Route::post('/cronograma/{id}/editar', [\App\Http\Controllers\CronogramaController::class, 'editarDelCronograma'])
//     ->name('cronograma.eliminar');

// Route::get('/cronograma/{id}/agregar', [\App\Http\Controllers\CronogramaController::class, 'agregarAlCronograma'])
//     ->name('cronograma.mostrar');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [AvatarController::class, 'actualizarAvatar'])->name('avatar.actualizar');
});

require __DIR__.'/auth.php';
