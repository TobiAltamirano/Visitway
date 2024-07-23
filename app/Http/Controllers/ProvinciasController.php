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
    public function mostrarProvincias()
    {
        // Obtener todas las provincias ordenadas por región
        $provincias = Provincia::orderBy('region_provincia')->orderBy('nombre_provincia')->get();

        // Inicializar variables para almacenar las provincias por región
        $provinciasNordeste = [];
        $provinciasNoroeste = [];
        $provinciasCuyo = [];
        $provinciasPampeanas = [];
        $provinciasPatagonicas = [];
        $provinciaBuenosAires = [];

        // Separar las provincias por región
        foreach ($provincias as $provincia) {
            switch ($provincia->region_provincia) {
                case 'Nordeste':
                    $provinciasNordeste[] = $provincia;
                    break;
                case 'Noroeste':
                    $provinciasNoroeste[] = $provincia;
                    break;
                case 'Cuyo':
                    $provinciasCuyo[] = $provincia;
                    break;
                case 'Pampeanas':
                    $provinciasPampeanas[] = $provincia;
                    break;
                case 'Patagonicas':
                    $provinciasPatagonicas[] = $provincia;
                    break;
                case 'Buenos Aires':
                    $provinciaBuenosAires[] = $provincia;
                    break;
                default:
                    break;
            }
        }

        // Pasar las provincias a la vista
        return view('provincias.mostrarProvincias', compact('provinciasNordeste', 'provinciasNoroeste', 'provinciasCuyo', 'provinciasPampeanas', 'provinciasPatagonicas', 'provinciaBuenosAires'));
    }

    // Mostrar introducción a provincia seleccionada
    public function mostrarIntroduccion($id)
    {
        $provincia = Provincia::find($id);

        if (!$provincia) {
            // Manejar el caso donde la provincia no se encuentra
            abort(404);
        }

        return view('provincias.submenu.introduccion', ['provincia' => $provincia]);
    }
}
