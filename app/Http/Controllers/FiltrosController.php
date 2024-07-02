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
        $filtros = [
            'acepta_mascotas' => $request->input('acepta_mascotas', false),
            'tiene_descuentos_ofertas' => $request->input('tiene_descuentos_ofertas', false),
            'tiene_estacionamiento' => $request->input('tiene_estacionamiento', false),
            'tiene_wifi' => $request->input('tiene_wifi', false),
        ];

        // Consulta inicial para obtener todos los alojamientos de la provincia con el tipo de alojamiento especificado
        $query = Alojamiento::where('provincia_id', $idProvincia)
            ->where('tipo_alojamiento_id', $idTipoAlojamiento);

        // Aplicar los filtros según lo seleccionado por el usuario
        foreach ($filtros as $filtro => $valor) {
            if ($valor) {
                $query->where($filtro, true);
            }
        }

        // Obtener los alojamientos filtrados
        $alojamientos = $query->paginate(8);

        // Devolver la vista con los alojamientos filtrados y los filtros activos
        return view('provincias.submenu.filtros.filtrosAlojamientos', [
            'provincia' => $provincia,
            'alojamientos' => $alojamientos,
            'filtros' => $filtros,
        ]);
    }

    public function filtrarActividades(Request $request, $idProvincia, $idTipoActividad)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);

        // Obtener los filtros enviados por el usuario
        $filtros = [
            'es_accesible' => $request->input('es_accesible', false),
            'tiene_descuentos_ofertas' => $request->input('tiene_descuentos_ofertas', false),
            'es_gratis' => $request->input('es_gratis', false),
            'acepta_mascotas' => $request->input('acepta_mascotas', false),
        ];

        // Consulta inicial para obtener todas las actividades de la provincia
        $query = Actividad::where('provincia_id', $idProvincia)
            ->where('tipo_actividad_id', $idTipoActividad);

        // Aplicar los filtros según lo seleccionado por el usuario
        foreach ($filtros as $filtro => $valor) {
            if ($valor) {
                $query->where($filtro, true);
            }
        }

        // Obtener las actividades filtradas
        $actividades = $query->paginate(8);

        // Devolver la vista con las actividades filtradas y los filtros activos
        return view('provincias.submenu.filtros.filtrosActividades', [
            'provincia' => $provincia,
            'actividades' => $actividades,
            'filtros' => $filtros,
        ]);
    }

    public function filtrarGastronomia(Request $request, $idProvincia, $idTipoGastronomia)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);

        // Obtener los filtros enviados por el usuario
        $filtros = [
            'apto_veganos' => $request->input('apto_veganos', false),
            'apto_vegetarianos' => $request->input('apto_vegetarianos', false),
            'apto_sin_tacc' => $request->input('apto_sin_tacc', false),
            'apto_intolerantes_lactosa' => $request->input('apto_intolerantes_lactosa', false),
        ];

        // Consulta inicial para obtener todas las actividades de la provincia
        $query = Gastronomia::where('provincia_id', $idProvincia)
            ->where('tipo_gastronomia_id', $idTipoGastronomia);

        // Aplicar los filtros según lo seleccionado por el usuario
        foreach ($filtros as $filtro => $valor) {
            if ($valor) {
                $query->where($filtro, true);
            }
        }

        // Obtener los locales gastronómicos filtrados
        $localesGastronomicos = $query->paginate(8);

        // Devolver la vista con los locales gastronómicos filtrados y los filtros activos
        return view('provincias.submenu.filtros.filtrosGastronomia', [
            'provincia' => $provincia,
            'localesGastronomicos' => $localesGastronomicos,
            'filtros' => $filtros,
        ]);
    }

    public function filtrarPosteos(Request $request)
    {
        $provinciasSeleccionadas  = $request->input('provincias');
        $posteos = Posteo::whereIn('provincia', $provinciasSeleccionadas)->paginate(8);

        return view('blog.posteos.mostrarPosteosPorProvincia', compact('posteos', 'provinciasSeleccionadas'));
    }

    public function filtrarActividadesAlternativas(Request $request)
    {
        $provinciasSeleccionadas  = $request->input('provincias');
        $actividadesAlternativas = ActividadAlternativa::whereIn('provincia', $provinciasSeleccionadas)->paginate(8);

        return view('blog.actividadesAlternativas.mostrarAlternativasPorProvincia', compact('actividadesAlternativas', 'provinciasSeleccionadas'));
    }
}
