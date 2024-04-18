<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\TipoAlojamiento;
use App\Models\Alojamiento;

class AlojamientosController extends Controller
{
    // Mostrar todos los tipos de alojamiento
    public function mostrarTiposAlojamientos($id){

        $provincia = Provincia::findOrFail($id);
        
        $tiposAlojamientos = TipoAlojamiento::all();

        return view('provincias.submenu.tiposAlojamientos', ['tiposAlojamientos' => $tiposAlojamientos, 'provincia' => $provincia]);
    }

    public function mostrarAlojamientosPorTipo($idProvincia, $idTipoAlojamiento) {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);
    
        // Obtener los alojamientos de este tipo en esta provincia
        $alojamientos = Alojamiento::where('provincia_id', $idProvincia)
                                    ->where('tipo_alojamiento_id', $idTipoAlojamiento)
                                    ->get();
    
        return view('provincias.submenu.alojamientos', [
            'provincia' => $provincia,
            'alojamientos' => $alojamientos
        ]);
    }

    public function detalleAlojamiento($id, $idAlojamientos){

        $provincia = Provincia::findOrFail($id);

        $alojamiento = Alojamiento::findOrFail($idAlojamientos);

        return view('provincias.submenu..detalles.detalleAlojamiento', compact('provincia', 'alojamiento'));
    }
    
}