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

}