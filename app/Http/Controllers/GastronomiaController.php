<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\TipoGastronomia;
use App\Models\Gastronomia;
use App\Models\Favorito;

class GastronomiaController extends Controller
{
    // Mostrar todos los tipos de locales gastronómicos
    public function mostrarTiposGastronomia($id)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($id);

        $tiposGastronomia = TipoGastronomia::all();

        return view('provincias.submenu.tiposGastronomia', ['tiposGastronomia' => $tiposGastronomia, 'provincia' => $provincia]);
    }

    public function mostrarGastronomiaPorTipo($idProvincia, $idTipoGastronomia)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);

        // Obtener los locales gastronomicos de este tipo en esta provincia
        $localesGastronomicos = Gastronomia::where('provincia_id', $idProvincia)
            ->where('tipo_gastronomia_id', $idTipoGastronomia)
            ->paginate(8);

        return view('provincias.submenu.gastronomia', [
            'provincia' => $provincia,
            'localesGastronomicos' => $localesGastronomicos,
            'idTipoGastronomia' => $idTipoGastronomia
        ]);
    }

    public function detalleGastronomia($id, $idTipoGastronomia, $idLocales_gastronomicos)
    {
        // Obtenemos el id del usuario
        $idUsuario = Auth::id();

        // Verificar si el local ya está en favoritos para este usuario
        $favoritoExistente = Favorito::where('id_usuario', $idUsuario)
            ->where('id_favorito', $idLocales_gastronomicos)
            ->where('tipo_favorito', 'gastronomia')
            ->exists();

        $provincia = Provincia::findOrFail($id);

        $gastronomia = Gastronomia::findOrFail($idLocales_gastronomicos);

        // Obtenemos el tipo de gastronomia para retornar al usuario atrás, de ser necesario
        $tipoGastronomia = TipoGastronomia::findOrFail($idTipoGastronomia);

        return view('provincias.submenu.detalles.detalleGastronomia', compact('provincia', 'gastronomia', 'favoritoExistente', 'tipoGastronomia'));
    }
}
