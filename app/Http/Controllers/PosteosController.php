<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Posteo;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PosteosController extends Controller
{

    public function mostrarPosteos()
    {
        $posteos = Posteo::paginate(8);

        return view('blog.posteos.mostrarPosteos', compact('posteos'));
    }

    public function formularioCreacionPosteo()
    {
        return view('blog.posteos.crearPosteo');
    }

    public function procesoCreacionPosteo(Request $request)
    {
        $request->validate(Posteo::REGLAS_VALIDACION, Posteo::MENSAJES_VALIDACION);

        $data = $request->except(['_token']);

        // Obtenemos el ID del usuario autenticado
        $idUsuario = auth()->id();

        // Asignamos el ID del usuario al campo correspondiente del posteo
        $data['id_usuario'] = $idUsuario;

        //Upload de la imagen del posteo
        if ($request->hasFile('archivo')) {
            // Guardamos el archivo en la carpeta "img"
            $data['imagen1'] = $request->file('archivo')->store('imagenes/posteos');
        }

        Posteo::create($data);

        return redirect('/blog/posteos')
            ->with('status.message', 'El posteo ' . $data['titulo'] . ' se publicó con exito');
    }

    public function formularioEdicionPosteo($id)
    {
        // Buscamos el posteo por su ID
        $posteo = Posteo::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $posteo->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        // Retornar la vista de formulario de edición con el posteo
        return view('blog.posteos.editarPosteo', compact('posteo'));
    }

    public function actualizacionPosteo(int $id, Request $request)
    {
        // Buscamos el posteo por su ID
        $posteo = Posteo::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $posteo->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        // Validación de los datos
        $request->validate(Posteo::REGLAS_VALIDACION, Posteo::MENSAJES_VALIDACION);

        // Tomamos solo la información necesaria
        $data = $request->except(['_token', '_method']);

        // Upload de la imagen del posteo
        if ($request->hasFile('archivo')) {
            // Guardamos el archivo en la carpeta "img"
            $data['imagen1'] = $request->file('archivo')->store('imagenes/posteos');
        }

        // Actualizar los datos del posteo con los datos del formulario
        $posteo->update($data);

        // Borramos la imagen anterior si es necesario
        if (isset($oldCover) && Storage::has($oldCover)) {
            Storage::delete($oldCover);
        }

        // Retornar la vista de formulario de edición con el posteo
        return redirect('/blog/posteos')
            ->with('success', 'El posteo ' . $posteo->titulo . ' ha sido actualizado con éxito.');
    }

    public function confirmacionEliminacionPosteo(int $id)
    {
        // Buscamos el posteo por su ID
        $posteo = Posteo::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $posteo->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        return view('blog.posteos.eliminarPosteo', [
            'posteo' => Posteo::findOrFail($id),
        ]);
    }

    public function procesoEliminacionPosteo(int $id)
    {
        // Buscamos el posteo por su ID
        $posteo = Posteo::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $posteo->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        // Si tiene una imagen, la borramos.
        if ($posteo->imagen1 !== null) {
            Storage::delete($posteo->imagen1);
        }

        // Eliminamos el posteo
        $posteo->delete();

        // Retornar la vista de lista de posteos con un mensaje de éxito
        return redirect('/blog/posteos')
            ->with('success', 'El posteo ha sido eliminado con éxito.');
    }

    public function mostrarPosteosPropios()
    {
        // Obtener el ID del usuario autenticado
        $idUsuario = auth()->id();

        // Obtener solo los posteos del usuario autenticado
        $posteos = Posteo::where('id_usuario', $idUsuario)->paginate(8);

        return view('blog.posteos.mostrarPosteosPropios', compact('posteos'));
    }
}
