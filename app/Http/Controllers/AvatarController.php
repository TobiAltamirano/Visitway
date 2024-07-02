<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\User;

class AvatarController extends Controller
{

    public function mostrarAvatar()
    {
        // Obtener el usuario actualmente autenticado
        $user = Auth::user();

        // Pasar la ruta del avatar a la vista
        return view('profile.partial.showAvatar', ['user' => $user]);
    }

    public function actualizarAvatar(Request $request)
    {
        // Obtener el usuario actualmente autenticado
        $user = Auth::user();

        // Obtener el nombre del nuevo avatar seleccionado
        $nuevoAvatar = $request->avatar;

        // Actualizar el avatar del usuario en la base de datos
        $user->update(['avatar' => $nuevoAvatar]);

        // Retornar la vista del perfil con un mensaje de éxito
        return redirect('/profile')->with('success', 'Avatar actualizado con éxito.');
    }
}
