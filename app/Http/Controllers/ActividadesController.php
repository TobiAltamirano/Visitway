<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\TipoActividad;
use App\Models\Actividad;

class ActividadesController extends Controller
{
    // Mostrar todos los tipos de alojamiento
    public function mostrarTiposActividades($id){

        $provincia = Provincia::findOrFail($id);
        
        $tiposActividades = TipoActividad::all();

        return view('provincias.submenu.tiposActividades', ['tiposActividades' => $tiposActividades, 'provincia' => $provincia]);
    }

    public function mostrarActividadesPorTipo($idProvincia, $idTipoActividad) {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);
    
        // Obtener las actividades de este tipo en esta provincia
        $actividades = Actividad::where('provincia_id', $idProvincia)
                                    ->where('tipo_actividad_id', $idTipoActividad)
                                    ->get();
    
        return view('provincias.submenu.actividades', [
            'provincia' => $provincia,
            'actividades' => $actividades
        ]);
    }

    public function detalleActividad($id, $idActividades){

        // Obtenemos la provincia específica
        $provincia = Provincia::findOrFail($id);

        // Obtenemos la actividad específica
        $actividad = Actividad::findOrFail($idActividades);

        return view('provincias.submenu.detalles.detalleActividad', compact('provincia', 'actividad'));
    }
}
