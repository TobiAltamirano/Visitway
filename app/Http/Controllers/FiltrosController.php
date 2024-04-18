<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alojamiento;

class FiltrosController extends Controller
{
    public function filtrarAlojamientos(Request $request)
    {
        // Obtener el valor del filtro de acepta mascotas
        $aceptaMascotas = $request->input('acepta_mascotas');

        // Consulta para obtener los alojamientos
        $query = Alojamiento::query();

        // Aplicar filtro de acepta mascotas si está activado
        if ($aceptaMascotas) {
            $query->where('acepta_mascotas', true);
        }

        // Obtener los alojamientos filtrados
        $alojamientos = $query->get();

        // Devolver los alojamientos filtrados como respuesta JSON
        return response()->json($alojamientos);
    }
}