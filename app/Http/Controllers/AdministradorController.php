<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alojamiento;
use App\Models\Actividad;
use App\Models\Provincia;
use App\Models\Gastronomia;
use App\Models\Posteo;
use App\Models\ActividadAlternativa;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\TipoAlojamiento;
use App\Models\TipoActividad;
use App\Models\TipoGastronomia;
use Symfony\Component\Mime\Part\Multipart\AlternativePart;
use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
    // Alojamientos
    public function mostrarAlojamientos()
    {
        $alojamientos = Alojamiento::paginate(15);

        return view('panelAdministrador.administrarAlojamientos.mostrarAlojamientos', ['alojamientos' => $alojamientos]);
    }

    public function editarAlojamiento(int $id)
    {
        $alojamiento = Alojamiento::findOrFail($id);

        $provincias = Provincia::all();
        $tipoAlojamientos = TipoAlojamiento::all();

        return view('panelAdministrador.administrarAlojamientos.editarAlojamiento', [
            'alojamiento' => $alojamiento,
            'provincias' => $provincias,
            'tipoAlojamientos' => $tipoAlojamientos
        ]);
    }

    public function procesoEdicionAlojamiento(int $id, Request $request)
    {
        // Buscar la noticia por su ID
        $alojamiento = Alojamiento::findOrFail($id);

        // Validación de los datos, igual que la función createProcess
        $request->validate(Alojamiento::REGLAS_VALIDACION, Alojamiento::MENSAJES_VALIDACION);

        // Tomamos solo la información necesaria
        $data = $request->except(['_token', '_method']);

        // Guardamos la imagen anterior para poder eliminarla si se sube una nueva
        $oldImage = $alojamiento->imagen_alojamiento;

        //Upload de la imagen de las noticias
        if ($request->hasFile('imagen_alojamiento')) {
            // Guardamos el archivo en la carpeta "img"
            $data['imagen_alojamiento'] = $request->file('imagen_alojamiento')->store('imagenes/alojamientos');

            // Borramos la imagen anterior si es necesario
            if (isset($oldImage) && Storage::has($oldImage)) {
                Storage::delete($oldImage);
            }
        }

        // Actualizar los datos de la noticia con los datos del formulario
        $alojamiento->update($data);

        return redirect('/panel-administrador/alojamientos')
            ->with('success', 'El alojamiento ' . $data['nombre_alojamiento'] . ' ha sido actualizado con éxito.');
    }

    public function eliminarAlojamiento($id)
    {
        $alojamiento = Alojamiento::findOrFail($id);

        return view('panelAdministrador.administrarAlojamientos.eliminarAlojamiento', [
            'alojamiento' => $alojamiento,
        ]);
    }

    public function procesoEliminacionAlojamiento($id)
    {
        $alojamiento = Alojamiento::findOrFail($id);

        // Si tiene una imagen, la borramos.
        if ($alojamiento->imagen_alojamiento !== null) {
            Storage::delete($alojamiento->imagen_alojamiento);
        }

        $alojamiento->delete();

        return redirect('/panel-administrador/alojamientos')
            ->with('success', 'El alojamiento ha sido eliminado correctamente.');
    }

    public function crearAlojamiento()
    {
        $provincias = Provincia::all();
        $tipoAlojamientos = TipoAlojamiento::all();

        return view('panelAdministrador.administrarAlojamientos.crearAlojamiento', compact('provincias', 'tipoAlojamientos'));
    }

    public function procesoCreacionAlojamiento(Request $request)
    {
        $request->validate(Alojamiento::REGLAS_VALIDACION, Alojamiento::MENSAJES_VALIDACION);

        $data = $request->except(['_token']);

        if ($request->hasFile('imagen_alojamiento')) {
            $data['imagen_alojamiento'] = $request->file('imagen_alojamiento')->store('imagenes/alojamientos');
        }

        Alojamiento::create($data);

        return redirect('/panel-administrador/alojamientos')
            ->with('success', 'El alojamiento se ha creado correctamente.');
    }

    // Actividades
    public function mostrarActividades()
    {

        $actividades = Actividad::paginate(15);

        return view('panelAdministrador.administrarActividades.mostrarActividades', ['actividades' => $actividades]);
    }

    public function editarActividad(int $id)
    {
        $actividad = Actividad::findOrFail($id);

        $provincias = Provincia::all();
        $tipoActividades = TipoActividad::all();

        return view('panelAdministrador.administrarActividades.editarActividad', [
            'actividad' => $actividad,
            'provincias' => $provincias,
            'tipoActividades' => $tipoActividades
        ]);
    }

    public function procesoEdicionActividad(int $id, Request $request)
    {
        // Buscar la actividad por su ID
        $actividad = Actividad::findOrFail($id);

        // Validación de los datos
        $request->validate(Actividad::REGLAS_VALIDACION, Actividad::MENSAJES_VALIDACION);

        // Tomamos solo la información necesaria
        $data = $request->except(['_token', '_method']);

        // Guardamos la imagen anterior para poder eliminarla si se sube una nueva
        $oldImage = $actividad->imagen_actividad;

        // Upload de la imagen de la actividad
        if ($request->hasFile('imagen_actividad')) {
            // Guardamos el archivo en la carpeta "img"
            $data['imagen_actividad'] = $request->file('imagen_actividad')->store('imagenes/actividades');

            // Borramos la imagen anterior si es necesario
            if (isset($oldImage) && Storage::has($oldImage)) {
                Storage::delete($oldImage);
            }
        }

        // Actualizar los datos de la actividad con los datos del formulario
        $actividad->update($data);

        return redirect('/panel-administrador/actividades')
            ->with('success', 'La actividad ' . $data['nombre_actividad'] . ' ha sido actualizada con éxito.');
    }

    public function eliminarActividad($id)
    {
        $actividad = Actividad::findOrFail($id);

        return view('panelAdministrador.administrarActividades.eliminarActividad', [
            'actividad' => $actividad,
        ]);
    }

    public function procesoEliminacionActividad($id)
    {
        $actividad = Actividad::findOrFail($id);

        // Si tiene una imagen, la borramos.
        if ($actividad->imagen_actividad !== null) {
            Storage::delete($actividad->imagen_actividad);
        }

        $actividad->delete();
        return redirect('/panel-administrador/actividades')
            ->with('success', 'La actividad ha sido eliminada correctamente.');
    }

    public function crearActividad()
    {
        $provincias = Provincia::all();
        $tiposActividad = TipoActividad::all();

        return view('panelAdministrador.administrarActividades.crearActividad', compact('provincias', 'tiposActividad'));
    }

    public function procesoCreacionActividad(Request $request)
    {
        $request->validate(Actividad::REGLAS_VALIDACION, Actividad::MENSAJES_VALIDACION);

        $data = $request->except(['_token']);

        if ($request->hasFile('imagen_actividad')) {
            $data['imagen_actividad'] = $request->file('imagen_actividad')->store('imagenes/actividades/');
        }

        Actividad::create($data);

        return redirect('/panel-administrador/actividades')
            ->with('success', 'La actividad se ha creado correctamente.');
    }

    // Gastronomia
    public function mostrarLocalesGastronomicos()
    {
        $localesGastronomicos = Gastronomia::paginate(15);

        return view('panelAdministrador.administrarGastronomia.mostrarLocalesGastronomicos', ['localesGastronomicos' => $localesGastronomicos]);
    }

    public function editarLocalGastronomico(int $id)
    {
        $localGastronomico = Gastronomia::findOrFail($id);
        $provincias = Provincia::all();
        $tiposGastronomia = TipoGastronomia::all();

        return view('panelAdministrador.administrarGastronomia.editarLocalGastronomico', ['localGastronomico' => $localGastronomico, 'provincias' => $provincias, 'tiposGastronomia' => $tiposGastronomia]);
    }

    public function procesoEdicionLocalGastronomico(int $id, Request $request)
    {
        $localGastronomico = Gastronomia::findOrFail($id);

        $request->validate(Gastronomia::REGLAS_VALIDACION, Gastronomia::MENSAJES_VALIDACION);

        $data = $request->except(['_token', '_method']);

        // Guardamos la imagen anterior para poder eliminarla si se sube una nueva
        $oldImage = $localGastronomico->imagen_local_gastronomico;

        if ($request->hasFile('imagen_local_gastronomico')) {
            $data['imagen_local_gastronomico'] = $request->file('imagen_local_gastronomico')->store('imagenes/gastronomia');

            // Borramos la imagen anterior si es necesario
            if (isset($oldImage) && Storage::has($oldImage)) {
                Storage::delete($oldImage);
            }
        }

        $localGastronomico->update($data);

        return redirect('/panel-administrador/locales-gastronomicos')->with('success', 'El local gastronómico ' . $data['nombre_local_gastronomico'] . ' ha sido actualizado con éxito.');
    }

    public function eliminarLocalGastronomico($id)
    {
        $localGastronomico = Gastronomia::findOrFail($id);

        return view('panelAdministrador.administrarGastronomia.eliminarLocalGastronomico', ['localGastronomico' => $localGastronomico]);
    }

    public function procesoEliminacionLocalGastronomico($id)
    {
        $localGastronomico = Gastronomia::findOrFail($id);

        // Si tiene una imagen, la borramos.
        if ($localGastronomico->imagen_alojamiento !== null) {
            Storage::delete($localGastronomico->imagen_alojamiento);
        }

        $localGastronomico->delete();

        return redirect('/panel-administrador/locales-gastronomicos')->with('success', 'El local gastronómico ha sido eliminado correctamente.');
    }

    public function crearLocalGastronomico()
    {
        $provincias = Provincia::all();
        $tiposGastronomia = TipoGastronomia::all();
        return view('panelAdministrador.administrarGastronomia.crearLocalGastronomico', compact('provincias', 'tiposGastronomia'));
    }

    public function procesoCreacionLocalGastronomico(Request $request)
    {
        $request->validate(Gastronomia::REGLAS_VALIDACION, Gastronomia::MENSAJES_VALIDACION);
        $data = $request->except(['_token']);

        if ($request->hasFile('imagen_local_gastronomico')) {
            $data['imagen_local_gastronomico'] = $request->file('imagen_local_gastronomico')->store('imagenes/gastronomia');
        }

        Gastronomia::create($data);

        return redirect('/panel-administrador/locales-gastronomicos')->with('success', 'El local gastronómico se ha creado correctamente.');
    }

    // Posteos
    public function mostrarPosteos()
    {
        $posteos = Posteo::paginate(15);

        return view('panelAdministrador.administrarPosteos.mostrarPosteos', compact('posteos'));
    }

    public function verPosteo(int $id)
    {
        $posteo = Posteo::findOrFail($id);

        return view('panelAdministrador.administrarPosteos.verPosteo', compact('posteo'));
    }

    public function eliminarPosteo(int $id)
    {
        // Buscamos el posteo por su ID
        $posteo = Posteo::findOrFail($id);

        // Si tiene una imagen, la borramos.
        if ($posteo->imagen !== null) {
            Storage::delete($posteo->imagen);
        }

        // Eliminamos el posteo
        $posteo->delete();

        // Retornar la vista de lista de posteos con un mensaje de éxito
        return redirect('/panel-administrador/posteos')
            ->with('success', 'El posteo ha sido eliminado con éxito.');
    }

    // Actividades Alternativas
    public function mostrarActividadesAlternativas()
    {
        $actividadesAlternativas = ActividadAlternativa::paginate(15);

        return view('panelAdministrador.administrarAlternativas.mostrarActividadesAlternativas', compact('actividadesAlternativas'));
    }

    public function verActividadAlternativa(int $id)
    {
        $actividadAlternativa = ActividadAlternativa::findOrFail($id);

        return view('panelAdministrador.administrarAlternativas.verActividadAlternativa', compact('actividadAlternativa'));
    }

    public function eliminarActividadAlternativa(int $id)
    {
        // Buscamos la actividad alternativa por su ID
        $actividadAlternativa = ActividadAlternativa::findOrFail($id);

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

        // Eliminamos la actividad
        $actividadAlternativa->delete();

        // Retornar la vista de lista de posteos con un mensaje de éxito
        return redirect('/panel-administrador/actividades-alternativas')
            ->with('success', 'La actividad alternativa ha sido eliminada con éxito.');
    }

    // Usuarios
    public function mostrarUsuarios()
    {
        $usuarios = User::paginate(15);

        return view('panelAdministrador.administrarUsuarios.mostrarUsuarios', compact('usuarios'));
    }

    public function eliminarUsuario($id)
    {
        // Obtener el usuario al que se le quieren quitar los privilegios
        $usuario = User::findOrFail($id);

        // Verificar si el usuario actual es uno de los root protegidos
        if ($usuario->email === 'lucia@visitway.com' || $usuario->email === 'tobias@visitway.com') {
            return redirect()->back()->with('error', 'No puedes eliminar a este usuario.');
        }

        $usuario->delete();

        return redirect()->back()->with('success', 'El usuario ' . $usuario['name'] . ' Ha sido eliminado con éxito');
    }

    public function otorgarPrivilegiosAdmin($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->usuario_administrador = true;
        $usuario->save();

        return redirect()->back()->with('success', 'Privilegios de administrador otorgados con éxito.');
    }

    public function quitarPrivilegiosAdmin($id)
    {
        // Obtener el usuario autenticado actual
        $usuarioActual = Auth::user();

        // Obtener el usuario al que se le quieren quitar los privilegios
        $usuario = User::findOrFail($id);

        // Verificar si el usuario actual es uno de los root protegidos
        if ($usuario->email === 'lucia@visitway.com' || $usuario->email === 'tobias@visitway.com') {
            return redirect()->back()->with('error', 'No puedes quitarle los privilegios de administrador a este usuario.');
        }

        // Verificar si el usuario actual está intentando quitarse sus propios privilegios
        if ($usuarioActual->id == $id) {
            return redirect()->back()->with('error', 'No puedes quitarte tus propios privilegios de administrador.');
        }

        // Quitar los privilegios de administrador
        $usuario->usuario_administrador = false;
        $usuario->save();

        return redirect()->back()->with('success', 'Privilegios de administrador eliminados con éxito.');
    }
}
