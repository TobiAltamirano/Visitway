<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\TipoGastronomia;
use App\Models\Gastronomia;

class GastronomiaController extends Controller
{
    // Mostrar todos los tipos de alojamiento
    public function mostrarTiposGastronomia($id){

        $provincia = Provincia::findOrFail($id);
        
        $tiposGastronomia = TipoGastronomia::all();

        return view('provincias.submenu.tiposGastronomia', ['tiposGastronomia' => $tiposGastronomia, 'provincia' => $provincia]);
    }

    public function mostrarGastronomiaPorTipo($idProvincia, $idTipoGastronomia) {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);
    
        // Obtener los locales gastronomicos de este tipo en esta provincia
        $localesGastronomicos = Gastronomia::where('provincia_id', $idProvincia)
                                    ->where('tipo_gastronomia_id', $idTipoGastronomia)
                                    ->get();
    
        return view('provincias.submenu.gastronomia', [
            'provincia' => $provincia,
            'localesGastronomicos' => $localesGastronomicos
        ]);
    }
    
    public function detalleGastronomia($id, $idLocales_gastronomicos){

        $provincia = Provincia::findOrFail($id);

        $gastronomia = Gastronomia::findOrFail($idLocales_gastronomicos);

        return view('provincias.submenu.detalles.detalleGastronomia', compact('provincia', 'gastronomia'));
    }
}