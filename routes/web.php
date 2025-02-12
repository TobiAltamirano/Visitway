<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CronogramaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdministradorMiddleware;

// Página de inicio
Route::get('/', function () {
    return view('index');
})->Name('index');

// Página institucional
Route::get('/sobre-visitway', function () {
    return view('institucional');
})->Name('institucional');

// Provincias e introducción
// --------------------------------------------------------------
Route::get('/provincias', [\App\Http\Controllers\ProvinciasController::class, 'mostrarProvincias'])
    ->Name('provincias.mostrar');

// Introducción
Route::get('/provincias/{id}/introduccion', [\App\Http\Controllers\ProvinciasController::class, 'mostrarIntroduccion'])
    ->Name('provincia.introduccion');

// Actividades
// --------------------------------------------------------------
Route::get('/provincias/{id}/tipos-actividades', [\App\Http\Controllers\ActividadesController::class, 'mostrarTiposActividades'])
    ->name('provincia.tipos-actividades');

// Actividades por "Tipo Actividad"
Route::get('/provincias/{id}/actividades/{idTipoActividad}', [\App\Http\Controllers\ActividadesController::class, 'mostrarActividadesPorTipo'])
    ->name('provincia.actividades');

// Gastronomia
// --------------------------------------------------------------
Route::get('/provincias/{id}/tipos-gastronomia', [\App\Http\Controllers\GastronomiaController::class, 'mostrarTiposGastronomia'])
    ->name('provincia.tipos-gastronomia');

// Gastronomia por "Tipo Gastronomia"
Route::get('/provincias/{id}/gastronomia/{idTipoGastronomia}', [\App\Http\Controllers\GastronomiaController::class, 'mostrarGastronomiaPorTipo'])->name('provincia.gastronomia');

// Alojamientos
// --------------------------------------------------------------
Route::get('/provincias/{id}/tipos-alojamientos', [\App\Http\Controllers\AlojamientosController::class, 'mostrarTiposAlojamientos'])
    ->name('provincia.tipos-alojamientos');

// Alojamientos por "Tipo Alojamientos"
Route::get('/provincias/{id}/alojamientos/{idTipoAlojamiento}', [\App\Http\Controllers\AlojamientosController::class, 'mostrarAlojamientosPorTipo'])
    ->name('provincia.alojamientos');

// Detalles del servicio
// --------------------------------------------------------------
// Detalle del servicio - Alojamiento
Route::get('/provincias/{id}/alojamientos/{idTipoAlojamiento}/detalle/{alojamientoId}', [\App\Http\Controllers\AlojamientosController::class, 'detalleAlojamiento'])
    ->name('provincia.detalleAlojamiento');

// Detalle del servicio - Actividad
Route::get('/provincias/{id}/actividades/{idTipoActividad}/detalle/{actividadId}', [\App\Http\Controllers\ActividadesController::class, 'detalleActividad'])
    ->name('provincia.detalleActividad');

// Detalle del servicio - Gastronomía
Route::get('/provincias/{id}/gastronomia/{idTipoGastronomia}/detalle/{gastronomiaId}', [\App\Http\Controllers\GastronomiaController::class, 'detalleGastronomia'])
    ->name('provincia.detalleGastronomia');

// Filtrado 
// --------------------------------------------------------------
// Filtrado de alojamientos
Route::get('/provincias/{id}/alojamientos/{idTipoAlojamiento}/filtrar-alojamientos', [\App\Http\Controllers\FiltrosController::class, 'filtrarAlojamientos'])
    ->name('provincia.filtrarAlojamientos');

// Filtrado de actividades
Route::get('/provincias/{id}/actividades/{idTipoActividad}/filtrar-actividad', [\App\Http\Controllers\FiltrosController::class, 'filtrarActividades'])
    ->name('provincia.filtrarActividades');

// Filtrado de locales gastronomicos
Route::get('/provincias/{id}/gastronomia/{idTipoGastronomia}/filtrar-gastronomia', [\App\Http\Controllers\FiltrosController::class, 'filtrarGastronomia'])
    ->name('provincia.filtrarGastronomia');

// Favoritos
// --------------------------------------------------------------
Route::get('/favoritos', [\App\Http\Controllers\FavoritosController::class, 'mostrarFavoritos'])
    ->name('favoritos.mostrar');

// Agregar a favoritos
Route::post('/favoritos/agregar/{id}/{tipo}', [\App\Http\Controllers\FavoritosController::class, 'agregarFavoritos'])
    ->name('favoritos.agregar')
    ->middleware('auth');

// Eliminar de favoritos
Route::post('/favoritos/eliminar/{id}/{tipo}', [\App\Http\Controllers\FavoritosController::class, 'eliminarFavoritos'])
    ->name('favoritos.eliminar')
    ->middleware('auth');

// Posteos
// --------------------------------------------------------------
// Mostrar posteos
Route::get('/blog/posteos', [\App\Http\Controllers\PosteosController::class, 'mostrarPosteos'])
    ->name('posteos.mostrar');

// Formulario para crear posteo
Route::get('/blog/posteos/crear', [\App\Http\Controllers\PosteosController::class, 'formularioCreacionPosteo'])
    ->name('posteos.crear')
    ->middleware('auth');

// Proceso creación de posteo
Route::post('/blog/posteos/procesar', [\App\Http\Controllers\PosteosController::class, 'procesoCreacionPosteo'])
    ->name('posteos.crear.proceso')
    ->middleware('auth');

// Formulario edición posteo
Route::get('/posteos/{id}/editar', [\App\Http\Controllers\PosteosController::class, 'formularioEdicionPosteo'])
    ->name('posteos.editar')
    ->middleware('auth');

// Actualización de posteo
Route::post('/posteos/{id}/actualizar', [\App\Http\Controllers\PosteosController::class, 'actualizacionPosteo'])
    ->name('posteos.actualizar')
    ->middleware('auth');

// Confirmación eliminación de posteo
Route::get('/posteos/{id}/eliminar', [\App\Http\Controllers\PosteosController::class, 'confirmacionEliminacionPosteo'])
    ->name('posteos.eliminar')
    ->middleware('auth');

// Proceso eliminación posteo
Route::post('/posteos/{id}/eliminar/procesar', [\App\Http\Controllers\PosteosController::class, 'procesoEliminacionPosteo'])
    ->name('posteos.eliminar.procesos')
    ->middleware('auth');

// Filtrar posteos por provincia
Route::get('/posteos/filtrar', [\App\Http\Controllers\FiltrosController::class, 'filtrarPosteos'])
    ->name('posteos.filtrar');

// Mostrar posteos propios
Route::get('/posteos/propios', [\App\Http\Controllers\PosteosController::class, 'mostrarPosteosPropios'])
    ->name('posteos.propios');

// Actividades Alternativas
// --------------------------------------------------------------
// Mostrar actividades alternativas
Route::get('/blog/actividades-alternativas', [\App\Http\Controllers\AlternativasController::class, 'mostrarActividadesAlternativas'])
    ->name('alternativas.mostrar');

// Formulario para crear actividades alternativas
Route::get('/blog/actividades-alternativas/crear', [\App\Http\Controllers\AlternativasController::class, 'formularioCreacionActividadAlternativa'])
    ->name('alternativas.crear')
    ->middleware('auth');

// Proceso creación de actividades alternativas
Route::post('/blog/actividades-alternativas/procesar', [\App\Http\Controllers\AlternativasController::class, 'procesoCreacionActividadAlternativa'])
    ->name('alternativas.crear.proceso')
    ->middleware('auth');

// Formulario edición actividad alternativa
Route::get('/actividades-alternativas/{id}/editar', [\App\Http\Controllers\AlternativasController::class, 'formularioEdicionActividadAlternativa'])
    ->name('alternativas.editar')
    ->middleware('auth');

// Actualización de actividad alternativa
Route::post('/actividades-alternativas/{id}/actualizar', [\App\Http\Controllers\AlternativasController::class, 'actualizacionActividadAlternativa'])
    ->name('alternativas.actualizar')
    ->middleware('auth');

// Confirmación eliminación actividad alternativa
Route::get('/actividades-alternativas/{id}/eliminar', [\App\Http\Controllers\AlternativasController::class, 'confirmacionEliminacionActividadAlternativa'])
    ->name('alternativas.eliminar')
    ->middleware('auth');

// Proceso eliminación actividad alternativa
Route::post('/actividades-alternativas/{id}/eliminar/procesar', [\App\Http\Controllers\AlternativasController::class, 'procesoEliminacionActividadAlternativa'])
    ->name('alternativas.eliminar.proceso')
    ->middleware('auth');

// Filtrar actividades alternativas por provincia
Route::get('/actividades-alternativas/filtrar', [\App\Http\Controllers\FiltrosController::class, 'filtrarActividadesAlternativas'])
    ->name('alternativas.filtrar');

// Mostrar actividades alternativas propias
Route::get('/actividades-alternativas/propias', [\App\Http\Controllers\AlternativasController::class, 'mostrarActividadesAlternativasPropias'])
    ->name('alternativas.propias');

// Panel Administrador
// Alojamientos
// --------------------------------------------------------------
// Mostrar alojamiento en panel
Route::get('/panel-administrador/alojamientos', [\App\Http\Controllers\AdministradorController::class, 'mostrarAlojamientos'])
    ->name('administrador.alojamientos')
    ->middleware('auth', 'checkAdmin');

// Formulario edición
Route::get('/panel-administrador/alojamiento/{id}/editar', [\App\Http\Controllers\AdministradorController::class, 'editarAlojamiento'])
    ->name('administrador.alojamientos.editar')
    ->middleware('auth', 'checkAdmin');

// Proceso edicion
Route::post('/panel-administrador/alojamiento/{id}/editar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEdicionAlojamiento'])
    ->name('administrador.alojamientos.editar.proceso')
    ->middleware('auth', 'checkAdmin');

// Formulario de creación de alojamiento
Route::get('/panel-administrador/alojamientos/crear', [\App\Http\Controllers\AdministradorController::class, 'crearAlojamiento'])
    ->name('administrador.alojamientos.crear')
    ->middleware('auth', 'checkAdmin');

// Proceso de creación de alojamiento
Route::post('/panel-administrador/alojamientos/crear/proceso', [\App\Http\Controllers\AdministradorController::class, 'procesoCreacionAlojamiento'])
    ->name('administrador.alojamientos.crear.proceso')
    ->middleware('auth', 'checkAdmin');

// Confirmacion eliminar alojamiento
Route::get('/panel-administrador/alojamiento/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarAlojamiento'])
    ->name('administrador.alojamientos.eliminar')
    ->middleware('auth', 'checkAdmin');

// Proceso eliminar alojamiento
Route::post('/panel-administrador/alojamiento/{id}/eliminar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEliminacionAlojamiento'])
    ->name('administrador.alojamientos.eliminar.procesar')
    ->middleware('auth', 'checkAdmin');

// Actividades
// --------------------------------------------------------------
// Mostrar actividades en panel
Route::get('/panel-administrador/actividades', [\App\Http\Controllers\AdministradorController::class, 'mostrarActividades'])
    ->name('administrador.actividades')
    ->middleware('auth', 'checkAdmin');

// Formulario de edición de actividad
Route::get('/panel-administrador/actividad/{id}/editar', [\App\Http\Controllers\AdministradorController::class, 'editarActividad'])
    ->name('administrador.actividades.editar')
    ->middleware('auth', 'checkAdmin');

// Proceso de edición de actividad
Route::post('/panel-administrador/actividad/{id}/editar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEdicionActividad'])
    ->name('administrador.actividades.editar.proceso')
    ->middleware('auth', 'checkAdmin');

// Formulario de creación de actividad
Route::get('/panel-administrador/actividades/crear', [\App\Http\Controllers\AdministradorController::class, 'crearActividad'])
    ->name('administrador.actividades.crear')
    ->middleware('auth', 'checkAdmin');

// Proceso de creación de actividad
Route::post('/panel-administrador/actividades/crear/proceso', [\App\Http\Controllers\AdministradorController::class, 'procesoCreacionActividad'])
    ->name('administrador.actividades.crear.proceso')
    ->middleware('auth', 'checkAdmin');

// Confirmación de eliminación de actividad
Route::get('/panel-administrador/actividad/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarActividad'])
    ->name('administrador.actividades.eliminar')
    ->middleware('auth', 'checkAdmin');

// Proceso de eliminación de actividad
Route::post('/panel-administrador/actividad/{id}/eliminar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEliminacionActividad'])
    ->name('administrador.actividades.eliminar.procesar')
    ->middleware('auth', 'checkAdmin');

// Gastronomia
// --------------------------------------------------------------
// Mostrar locales gastronómicos en panel
Route::get('/panel-administrador/locales-gastronomicos', [\App\Http\Controllers\AdministradorController::class, 'mostrarLocalesGastronomicos'])
    ->name('administrador.locales_gastronomicos')
    ->middleware('auth', 'checkAdmin');

// Formulario de edición de local gastronómico
Route::get('/panel-administrador/local-gastronomico/{id}/editar', [\App\Http\Controllers\AdministradorController::class, 'editarLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.editar')
    ->middleware('auth', 'checkAdmin');

// Proceso de edición de local gastronómico
Route::post('/panel-administrador/local-gastronomico/{id}/editar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEdicionLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.editar.proceso')
    ->middleware('auth', 'checkAdmin');

// Formulario de creación de local gastronómico
Route::get('/panel-administrador/locales-gastronomicos/crear', [\App\Http\Controllers\AdministradorController::class, 'crearLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.crear')
    ->middleware('auth', 'checkAdmin');

// Proceso de creación de local gastronómico
Route::post('/panel-administrador/locales-gastronomicos/crear/proceso', [\App\Http\Controllers\AdministradorController::class, 'procesoCreacionLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.crear.proceso')
    ->middleware('auth', 'checkAdmin');

// Confirmación de eliminación de local gastronómico
Route::get('/panel-administrador/local-gastronomico/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.eliminar')
    ->middleware('auth', 'checkAdmin');

// Proceso de eliminación de local gastronómico
Route::post('/panel-administrador/local-gastronomico/{id}/eliminar/procesar', [\App\Http\Controllers\AdministradorController::class, 'procesoEliminacionLocalGastronomico'])
    ->name('administrador.locales_gastronomicos.eliminar.procesar')
    ->middleware('auth', 'checkAdmin');

// Posteos
// --------------------------------------------------------------
// Mostrar todos los posteos
Route::get('/panel-administrador/posteos', [\App\Http\Controllers\AdministradorController::class, 'mostrarPosteos'])
    ->name('administrador.posteos.mostrar')
    ->middleware('auth', 'checkAdmin');

// Ver un posteo específico
Route::get('/panel-administrador/posteo/{id}/ver', [\App\Http\Controllers\AdministradorController::class, 'verPosteo'])
    ->name('administrador.posteos.ver')
    ->middleware('auth', 'checkAdmin');

// Eliminar un posteo
Route::post('/panel-administrador/posteo/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarPosteo'])
    ->name('administrador.posteos.eliminar')
    ->middleware('auth', 'checkAdmin');

// Actividades Alternativas
// --------------------------------------------------------------
// Mostrar todas las alternativas
Route::get('/panel-administrador/actividades-alternativas', [\App\Http\Controllers\AdministradorController::class, 'mostrarActividadesAlternativas'])
    ->name('administrador.actividades-alternativas.mostrar')
    ->middleware('auth', 'checkAdmin');

// Ver una act. alternativa específica
Route::get('/panel-administrador/actividad-alternativa/{id}/ver', [\App\Http\Controllers\AdministradorController::class, 'verActividadAlternativa'])
    ->name('administrador.actividades-alternativas.ver')
    ->middleware('auth', 'checkAdmin');

// Eliminar una actividad alternativa
Route::post('/panel-administrador/actividad-alternativa/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarActividadAlternativa'])
    ->name('administrador.actividades-alternativas.eliminar')
    ->middleware('auth', 'checkAdmin');

// Usuarios
// --------------------------------------------------------------
// Mostrar
Route::get('/panel-administrador/usuarios', [\App\Http\Controllers\AdministradorController::class, 'mostrarUsuarios'])
    ->name('administrador.usuarios.mostrar')
    ->middleware('auth', 'checkAdmin');

// Convertir en administrador
Route::post('/panel-administrador/usuarios/{id}/convertir-administrador', [\App\Http\Controllers\AdministradorController::class, 'otorgarPrivilegiosAdmin'])
    ->name('administrador.usuarios.otorgar-privilegios')
    ->middleware('auth', 'checkAdmin');

// Convertir en usuario estandar
Route::post('/panel-administrador/usuarios/{id}/quitar-administrador', [\App\Http\Controllers\AdministradorController::class, 'quitarPrivilegiosAdmin'])
    ->name('administrador.usuarios.quitar-privilegios')
    ->middleware('auth', 'checkAdmin');

// Eliminar usuario
Route::post('/panel-administrador/usuarios/{id}/eliminar', [\App\Http\Controllers\AdministradorController::class, 'eliminarUsuario'])
    ->name('administrador.usuarios.eliminar')
    ->middleware('auth', 'checkAdmin');

// CRONOGRAMA
// --------------------------------------------------------------
// MOSTRAR CRONOGRAMA ORDENADO POR DÍAS
Route::get('/cronograma', [\App\Http\Controllers\CronogramaController::class, 'mostrarCronograma'])
    ->name('cronograma.mostrar');

// AGREGAR ACTIVIDAD AL CRONOGRAMA
Route::post('/cronograma/{id}/agregar', [\App\Http\Controllers\CronogramaController::class, 'agregarAlCronograma'])
    ->name('cronograma.agregar')
    ->middleware('auth');

// ELIMINAR ACTIVIDAD DEL CRONOGRAMA
Route::post('/cronograma/{id}/eliminar', [\App\Http\Controllers\CronogramaController::class, 'eliminarDelCronograma'])
    ->name('cronograma.eliminar')
    ->middleware('auth');

// EDITAR ACTIVIDAD DEL CRONOGRAMA
Route::post('/cronograma/{id}/editar', [\App\Http\Controllers\CronogramaController::class, 'editarActividadDelCronograma'])
    ->name('cronograma.editar')
    ->middleware('auth');

// DUPLICAR ACTIVIDAD DEL CRONOGRAMA
Route::post('/cronograma/{id}/duplicar/{idActividad}', [\App\Http\Controllers\CronogramaController::class, 'duplicarActividadDelCronograma'])
    ->name('cronograma.duplicar')
    ->middleware('auth');

// Perfil de usuario
// --------------------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [AvatarController::class, 'actualizarAvatar'])->name('avatar.actualizar');
});

require __DIR__ . '/auth.php';
