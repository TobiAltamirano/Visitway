<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\TipoAlojamiento;
use App\Models\Alojamiento;
use App\Models\Favorito;

class AlojamientosController extends Controller
{
    // Mostrar todos los tipos de alojamiento
    public function mostrarTiposAlojamientos($id)
    {

        $provincia = Provincia::findOrFail($id);

        $tiposAlojamientos = TipoAlojamiento::all();

        return view('provincias.submenu.tiposAlojamientos', ['tiposAlojamientos' => $tiposAlojamientos, 'provincia' => $provincia]);
    }

    public function mostrarAlojamientosPorTipo($idProvincia, $idTipoAlojamiento)
    {
        // Obtener la provincia
        $provincia = Provincia::findOrFail($idProvincia);

        // Obtener los alojamientos de este tipo en esta provincia
        $alojamientos = Alojamiento::where('provincia_id', $idProvincia)
            ->where('tipo_alojamiento_id', $idTipoAlojamiento)
            ->paginate(8);

        return view('provincias.submenu.alojamientos', [
            'provincia' => $provincia,
            'alojamientos' => $alojamientos,
            'idTipoAlojamiento' => $idTipoAlojamiento // Pasamos el ID del tipo de alojamiento a la vista
        ]);
    }

    public function detalleAlojamiento($id, $idTipoAlojamiento, $idAlojamientos)
    {

        $idUsuario = Auth::id();

        // Verificar si el alojamiento ya está en favoritos para este usuario
        $favoritoExistente = Favorito::where('id_usuario', $idUsuario)
            ->where('id_favorito', $idAlojamientos)
            ->where('tipo_favorito', 'alojamiento')
            ->exists();

        $provincia = Provincia::findOrFail($id);

        $alojamiento = Alojamiento::findOrFail($idAlojamientos);

        // Obtenemos el tipo de alojamiento para retornar al usuario atrás, de ser necesario
        $tipoAlojamiento = TipoAlojamiento::findOrFail($idTipoAlojamiento);

        return view('provincias.submenu.detalles.detalleAlojamiento', compact('provincia', 'alojamiento', 'favoritoExistente', 'tipoAlojamiento'));
    }
}
