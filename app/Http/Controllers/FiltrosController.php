<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alojamiento;
use App\Models\Actividad;
use App\Models\Gastronomia;
use App\Models\Provincia;
use App\Models\Posteo;
use App\Models\ActividadAlternativa;

class FiltrosController extends Controller
{

    public function filtrarAlojamientos(Request $request, $idProvincia, $idTipoAlojamiento)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);

        // Obtener los filtros enviados por el usuario
        $filtroAceptaMascotas = $request->input('acepta_mascotas', false);
        $filtroTieneDescuento = $request->input('tiene_descuento', false);
        $filtroTieneEstacionamiento = $request->input('tiene_estacionamiento', false);
        $filtroTieneWifi = $request->input('tiene_wifi', false);


        // Agrega más filtros según necesites

        // Consulta inicial para obtener todos los alojamientos de la provincia con el tipo de alojamiento especificado
        $query = Alojamiento::where('provincia_id', $idProvincia)
                            ->where('tipo_alojamiento_id', $idTipoAlojamiento);

        // Aplicar los filtros según lo seleccionado por el usuario
        if ($filtroAceptaMascotas) {
            $query->where('acepta_mascotas', true);
        }

        if ($filtroTieneDescuento) {
            $query->where('tiene_descuentos_ofertas', true);
        }

        if ($filtroTieneEstacionamiento) {
            $query->where('tiene_estacionamiento', true);
        }

        if ($filtroTieneWifi) {
            $query->where('tiene_wifi', true);
        }

        // Agrega más condiciones según los otros filtros

        // Obtener los alojamientos filtrados
        $alojamientos = $query->get();

        // Devolver la vista con los alojamientos filtrados
        return view('provincias.submenu.filtros.filtrosAlojamientos', [
            'provincia' => $provincia,
            'alojamientos' => $alojamientos
        ]);
    }

    public function filtrarActividades(Request $request, $idProvincia, $idTipoActividad)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);

        // Obtener los filtros enviados por el usuario
        $filtroAptoDiscapacitados = $request->input('es_accesible', false);
        $filtroTieneDescuento = $request->input('tiene_descuento', false);
        $filtroEsGratis = $request->input('es_gratis', false);
        $filtroAceptaMascotas = $request->input('acepta_mascotas', false);

        // Consulta inicial para obtener todas las actividades de la provincia
        $query = Actividad::where('provincia_id', $idProvincia)
                        ->where('tipo_actividad_id', $idTipoActividad);

        // Aplicar los filtros según lo seleccionado por el usuario
        if ($filtroAptoDiscapacitados) {
            $query->where('es_accesible', true);
        }

        if ($filtroTieneDescuento) {
            $query->where('tiene_descuentos_ofertas', true);
        }

        if ($filtroEsGratis) {
            $query->where('es_gratis', true);
        }

        if ($filtroAceptaMascotas) {
            $query->where('acepta_mascotas', true);
        }

        // Obtener las actividades filtradas
        $actividades = $query->get();

        // Devolver la vista con las actividades filtradas
        return view('provincias.submenu.filtros.filtrosActividades', [
            'provincia' => $provincia,
            'actividades' => $actividades
        ]);
    }

    public function filtrarGastronomia(Request $request, $idProvincia, $idTipoGastronomia)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);

        // Obtener los filtros enviados por el usuario
        $filtroOpcionesVeganas = $request->input('apto_veganos', false);
        $filtroOpcionesVegetarianas = $request->input('apto_vegetarianos', false);
        $filtroOpcionesSinTacc = $request->input('apto_sin_tacc', false);
        $filtroOpcionesIntolerantesLactosa = $request->input('apto_intolerantes_lactosa', false);

        // Consulta inicial para obtener todas las actividades de la provincia
        $query = Gastronomia::where('provincia_id', $idProvincia)
                        ->where('tipo_gastronomia_id', $idTipoGastronomia);

        // Aplicar los filtros según lo seleccionado por el usuario
        if ($filtroOpcionesVeganas) {
            $query->where('apto_veganos', true);
        }

        if ($filtroOpcionesVegetarianas) {
            $query->where('apto_vegetarianos', true);
        }

        if ($filtroOpcionesSinTacc) {
            $query->where('apto_sin_tacc', true);
        }

        if ($filtroOpcionesIntolerantesLactosa) {
            $query->where('apto_intolerantes_lactosa', true);
        }

        // Obtener las actividades filtradas
        $localesGastronomicos = $query->get();

        // Devolver la vista con las actividades filtradas
        return view('provincias.submenu.filtros.filtrosGastronomia', [
            'provincia' => $provincia,
            'localesGastronomicos' => $localesGastronomicos
        ]);
    }

    public function filtrarPosteos(Request $request)
    {
        $provinciasSeleccionadas  = $request->input('provincias');
        $posteos = Posteo::whereIn('provincia', $provinciasSeleccionadas )->get();

        return view('blog.posteos.mostrarPosteosPorProvincia', compact('posteos', 'provinciasSeleccionadas'));
    }

    public function filtrarActividadesAlternativas(Request $request)
    {
        $provinciasSeleccionadas  = $request->input('provincias');
        $actividadesAlternativas = ActividadAlternativa::whereIn('provincia', $provinciasSeleccionadas )->get();

        return view('blog.actividadesAlternativas.mostrarAlternativasPorProvincia', compact('actividadesAlternativas', 'provinciasSeleccionadas'));
    }
}