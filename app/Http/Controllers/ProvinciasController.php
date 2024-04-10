<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\Actividad;
use App\Models\Alojamiento;
use App\Models\Gastronomia;
use Illuminate\Support\Facades\Storage;

class ProvinciasController extends Controller
{
    // Mostrar todas las provincias
    public function mostrarProvincias(){

        // Obtener todas las provincias ordenadas por region
        $provincias = Provincia::orderBy('region_provincia')->get();

        return view('provincias.mostrarProvincias', ['provincias' => $provincias]);
    }

    // Mostrar introducción a provincia seleccionada
    public function mostrarIntroduccion($id){

        $provincia = Provincia::find($id);

        if (!$provincia) {
            // Manejar el caso donde la provincia no se encuentra
            abort(404);
        }

        return view('provincias.submenu.introduccion', ['provincia' => $provincia]);
    }

    public function mostrarActividades($id){

        $provincia = Provincia::findOrFail($id);
        $actividades = Actividad::where('provincia_id', $id)->get();
    
        if (!$provincia) {
            // Manejar el caso donde la provincia no se encuentra
            abort(404);
        }
    
        return view('provincias.submenu.actividades', ['provincia' => $provincia, 'actividades' => $actividades]);
    }
    
    // Mostrar gastronomia de la provincia seleccionada
    public function mostrarGastronomia($id){
    
        $provincia = Provincia::findOrFail($id);
        $gastronomia = Gastronomia::where('provincia_id', $id)->get();
    
        if (!$provincia) {
            // Manejar el caso donde la provincia no se encuentra
            abort(404);
        }
    
        return view('provincias.submenu.gastronomia', ['provincia' => $provincia, 'gastronomia' => $gastronomia]);
    }
    
    public function mostrarAlojamientos($id)
{
    $provincia = Provincia::findOrFail($id);
    $alojamientos = Alojamiento::where('provincia_id', $id)->get();

    if (!$provincia) {
        // Manejar el caso donde la provincia no se encuentra
        abort(404);
    }

    // Obtener los tipos de alojamientos únicos de los alojamientos de la provincia
    $tiposAlojamientos = Alojamiento::where('provincia_id', $id)->pluck('tipo_alojamiento')->unique();

    return view('provincias.submenu.alojamientos', ['provincia' => $provincia, 'tiposAlojamientos' => $tiposAlojamientos]);
}

public function mostrarAlojamientosPorTipo($id, $tipoAlojamiento)
{
    $provincia = Provincia::findOrFail($id);
    $alojamientos = Alojamiento::where('provincia_id', $id)
                                ->where('tipo_alojamiento', $tipoAlojamiento)
                                ->get();

    if (!$provincia) {
        // Manejar el caso donde la provincia no se encuentra
        abort(404);
    }

    // Obtener los tipos de alojamientos únicos de los alojamientos de la provincia
    $tiposAlojamientos = Alojamiento::where('provincia_id', $id)->pluck('tipo_alojamiento')->unique();

    return view('provincias.submenu.alojamientosPorTipo', ['provincia' => $provincia, 'alojamientos' => $alojamientos, 'tipoAlojamiento' => $tipoAlojamiento, 'tiposAlojamientos' => $tiposAlojamientos]);
} 

}