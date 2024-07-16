<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use Illuminate\Http\Request;
use App\Models\Favorito;
use App\Models\Alojamiento;
use App\Models\Gastronomia;
use Illuminate\Support\Facades\Auth;

class FavoritosController extends Controller
{

    public function mostrarFavoritos()
    {
        // Tomamos el id del usuario
        $idUsuario = auth()->id();

        // Obtener los IDs de los alojamientos favoritos del usuario
        $idsAlojamientosFavoritos = Favorito::where('id_usuario', $idUsuario)
            ->where('tipo_favorito', 'alojamiento')
            ->pluck('id_favorito');

        // Obtener los alojamientos correspondientes a los IDs obtenidos
        $alojamientosFavoritos = Alojamiento::whereIn('id_alojamiento', $idsAlojamientosFavoritos)->get();


        // ACTIVIDADES
        $idsActividadesFavoritas = Favorito::where('id_usuario', $idUsuario)
            ->where('tipo_favorito', 'actividad')
            ->pluck('id_favorito');

        // Obtener las actividades correspondientes a los IDs obtenidos
        $actividadesFavoritas = Actividad::whereIn('id_actividad', $idsActividadesFavoritas)->get();


        // LOCALES GASTRONOMICOS
        $idsLocalesGastronomicosFavoritos = Favorito::where('id_usuario', $idUsuario)
            ->where('tipo_favorito', 'gastronomia')
            ->pluck('id_favorito');

        // Obtener las actividades correspondientes a los IDs obtenidos
        $localesGastronomicosFavoritos = Gastronomia::whereIn('id_local_gastronomico', $idsLocalesGastronomicosFavoritos)->get();

        return view('favoritos.mostrarFavoritos', compact(
            'alojamientosFavoritos',
            'actividadesFavoritas',
            'localesGastronomicosFavoritos'
        ));
    }

    public function agregarFavoritos(Request $request, $id, $tipo)
    {
        // Tomamos el id del usuario
        $idUsuario = Auth::id();

        // Verificar si el alojamiento ya está en favoritos
        $favoritoExistente = Favorito::where('id_usuario', $idUsuario)
            ->where('id_favorito', $id)
            ->where('tipo_favorito', $tipo)
            ->exists();

        // Si el alojamiento no está en favoritos, agregarlo
        if (!$favoritoExistente) {
            Favorito::create([
                'id_usuario' => $idUsuario,
                'id_favorito' => $id,
                'tipo_favorito' => $tipo,
            ]);

            return back()->with('success', 'Agregado a favoritos.');
        }
    }

    public function eliminarFavoritos($id, $tipo)
    {
        // Tomamos el id del usuario
        $idUsuario = Auth::id();

        // Buscar y eliminar el favorito
        Favorito::where('id_usuario', $idUsuario)
            ->where('id_favorito', $id)
            ->where('tipo_favorito', $tipo)
            ->delete();

        return back()->with('success', 'Eliminado de favoritos.');
    }
}
