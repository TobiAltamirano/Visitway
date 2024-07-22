<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ActividadAlternativa;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AlternativasController extends Controller
{
    // Reglas de validación
    protected array $createRules = [
        'titulo' => 'required|min:2',
        'contenido' => 'required',
        'publication_date' => 'required',
    ];

    public function mostrarActividadesAlternativas()
    {
        $actividadesAlternativas = ActividadAlternativa::paginate(8);

        return view('blog.actividadesAlternativas.mostrarAlternativas', compact('actividadesAlternativas'));
    }

    public function formularioCreacionActividadAlternativa()
    {
        return view('blog.actividadesAlternativas.crearAlternativa');
    }

    public function procesoCreacionActividadAlternativa(Request $request)
    {
        $request->validate(ActividadAlternativa::REGLAS_VALIDACION, ActividadAlternativa::MENSAJES_VALIDACION);

        $data = $request->except(['_token']);

        // Obtenemos el ID del usuario autenticado
        $idUsuario = auth()->id();

        // Asignamos el ID del usuario al campo correspondiente del posteo
        $data['id_usuario'] = $idUsuario;

        // Array de nombres de los campos de imagen
        $imagenes = ['imagen1', 'imagen2', 'imagen3'];

        // Subimos las imágenes si existen
        foreach ($imagenes as $imagen) {
            if ($request->hasFile($imagen)) {
                $data[$imagen] = $request->file($imagen)->store('imagenes/actividades-alternativas');
            }
        }

        ActividadAlternativa::create($data);

        return redirect('/blog/actividades-alternativas')
            ->with('status.message', 'La actividad alternativa ' . $data['titulo'] . ' se publicó con exito');
    }

    public function formularioEdicionActividadAlternativa($id)
    {
        // Buscamos el posteo por su ID
        $actividadAlternativa = ActividadAlternativa::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $actividadAlternativa->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        // Retornar la vista de formulario de edición con el posteo
        return view('blog.actividadesAlternativas.editarAlternativa', compact('actividadAlternativa'));
    }

    public function actualizacionActividadAlternativa(int $id, Request $request)
    {
        // Buscamos el posteo por su ID
        $actividadAlternativa = ActividadAlternativa::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $actividadAlternativa->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        // Validación de los datos, igual que la función createProcess
        $request->validate(ActividadAlternativa::REGLAS_VALIDACION,             ActividadAlternativa::MENSAJES_VALIDACION);

        // Tomamos solo la información necesaria
        $data = $request->except(['_token', '_method']);

        // Array de nombres de los campos de imagen
        $imagenes = ['imagen1', 'imagen2', 'imagen3'];

        // Subimos las imágenes si existen
        foreach ($imagenes as $imagen) {
            if ($request->hasFile($imagen)) {
                $data[$imagen] = $request->file($imagen)->store('imagenes/actividades-alternativas');
            }
        }

        // Actualizar los datos de la actividad con los datos del formulario
        $actividadAlternativa->update($data);

        // Borramos la imagen anterior si es necesario
        if (isset($oldCover) && Storage::has($oldCover)) {
            Storage::delete($oldCover);
        }

        // Retornar la vista de formulario de edición con el posteo
        return redirect('/blog/actividades-alternativas')
            ->with('success', 'La actividad alternativa ' . $actividadAlternativa->titulo . ' ha sido actualizada con éxito.');
    }

    public function confirmacionEliminacionActividadAlternativa(int $id)
    {
        // Buscamos el posteo por su ID
        $ActividadAlternativa = ActividadAlternativa::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $ActividadAlternativa->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        return view('blog.actividadesAlternativas.eliminarAlternativa', [
            'actividadAlternativa' => ActividadAlternativa::findOrFail($id),
        ]);
    }

    public function procesoEliminacionActividadAlternativa(int $id)
    {
        // Buscamos el posteo por su ID
        $actividadAlternativa = ActividadAlternativa::findOrFail($id);

        // Verificamos si el usuario autenticado es el propietario del posteo
        if (Auth::id() !== $actividadAlternativa->id_usuario) {
            abort(403, 'Acceso no autorizado'); // Mostrar error 403 si no es el propietario
        }

        // Si tiene una imagen, la borramos.
        if ($actividadAlternativa->imagen1 !== null) {
            Storage::delete($actividadAlternativa->imagen1);
        }

        // Si tiene una imagen, la borramos.
        if ($actividadAlternativa->imagen2 !== null) {
            Storage::delete($actividadAlternativa->imagen2);
        }

        // Si tiene una imagen, la borramos.
        if ($actividadAlternativa->imagen3 !== null) {
            Storage::delete($actividadAlternativa->imagen3);
        }

        // Eliminamos el posteo
        $actividadAlternativa->delete();

        // Retornar la vista de lista de posteos con un mensaje de éxito
        return redirect('/blog/actividades-alternativas')
            ->with('success', 'La actividad alternativa ha sido eliminada con éxito.');
    }

    public function mostrarActividadesAlternativasPropias()
    {
        // Obtener el ID del usuario autenticado
        $idUsuario = auth()->id();

        // Obtener solo las actividades alternativas del usuario autenticado
        $actividadesAlternativas = ActividadAlternativa::where('id_usuario', $idUsuario)->paginate(8);

        return view('blog.actividadesAlternativas.mostrarAlternativasPropias', compact('actividadesAlternativas'));
    }
}
