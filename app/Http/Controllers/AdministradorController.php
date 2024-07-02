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

class AdministradorController extends Controller
{
    // Alojamientos

    // Mostrar
    public function mostrarAlojamientos()
    {

        $alojamientos = Alojamiento::all();

        return view('panelAdministrador.administrarAlojamientos.mostrarAlojamientos', ['alojamientos' => $alojamientos]);
    }

    // Editar
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
        // Validación de los datos, igual que la función createProcess
        $request->validate(Alojamiento::REGLAS_VALIDACION, Alojamiento::MENSAJES_VALIDACION);

        // Tomamos solo la información necesaria
        $data = $request->except(['_token', '_method']);

        // Buscar la noticia por su ID
        $alojamiento = Alojamiento::findOrFail($id);

        //Upload de la imagen de las noticias
        if ($request->hasFile('file')) {
            // Guardamos el archivo en la carpeta "img"
            $data['imagen_alojamiento'] = $request->file('file')->store('imagenes');
            $oldCover = $alojamiento->imagen_alojamiento;
        }

        // Actualizar los datos de la noticia con los datos del formulario
        $alojamiento->update($data);

        // Borramos la imagen anterior si es necesario
        if (isset($oldCover) && Storage::has($oldCover)) {
            Storage::delete($oldCover);
        }

        return redirect('/panel-administrador/alojamientos')
            ->with('success', 'El alojamiento ' . $data['nombre_alojamiento'] . ' ha sido actualizado con éxito.');
    }

    // Eliminar alojamiento
    public function eliminarAlojamiento($id)
    {
        $alojamiento = Alojamiento::findOrFail($id);

        return view('panelAdministrador.administrarAlojamientos.eliminarAlojamiento', [
            'alojamiento' => $alojamiento,
        ]);
    }

    // Eliminar alojamiento
    public function procesoEliminacionAlojamiento($id)
    {
        $alojamiento = Alojamiento::findOrFail($id);
        $alojamiento->delete();
        return redirect('/panel-administrador/alojamientos')
            ->with('success', 'El alojamiento ha sido eliminado correctamente.');
    }

    // Crear alojamiento
    public function crearAlojamiento()
    {
        $provincias = Provincia::all();
        $tipoAlojamientos = TipoAlojamiento::all(); // Agrega esta línea si también necesitas los tipos de alojamiento
        return view('panelAdministrador.administrarAlojamientos.crearAlojamiento', compact('provincias', 'tipoAlojamientos'));
    }

    // Proceso de creación de alojamiento
    public function procesoCreacionAlojamiento(Request $request)
    {
        $request->validate(Alojamiento::REGLAS_VALIDACION, Alojamiento::MENSAJES_VALIDACION);

        $data = $request->except(['_token']);

        if ($request->hasFile('archivo')) {
            $data['imagen_alojamiento'] = $request->file('archivo')->store('imagenes');
        }

        // dd($request->all());

        Alojamiento::create($data);

        return redirect('/panel-administrador/alojamientos')
            ->with('success', 'El alojamiento se ha creado correctamente.');
    }










    // Actividades

    // Mostrar
    public function mostrarActividades()
    {

        $actividades = Actividad::all();

        return view('panelAdministrador.administrarActividades.mostrarActividades', ['actividades' => $actividades]);
    }

    // Editar
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
        // Validación de los datos
        $request->validate(Actividad::REGLAS_VALIDACION, Actividad::MENSAJES_VALIDACION);

        // Tomamos solo la información necesaria
        $data = $request->except(['_token', '_method']);

        // Buscar la actividad por su ID
        $actividad = Actividad::findOrFail($id);

        // Upload de la imagen de la actividad
        if ($request->hasFile('file')) {
            // Guardamos el archivo en la carpeta "img"
            $data['imagen_actividad'] = $request->file('file')->store('imagenes');
            $oldImage = $actividad->imagen_actividad;
        }

        // Actualizar los datos de la actividad con los datos del formulario
        $actividad->update($data);

        // Borramos la imagen anterior si es necesario
        if (isset($oldImage) && Storage::has($oldImage)) {
            Storage::delete($oldImage);
        }

        return redirect('/panel-administrador/actividades')
            ->with('success', 'La actividad ' . $data['nombre_actividad'] . ' ha sido actualizada con éxito.');
    }

    // Eliminar actividad
    public function eliminarActividad($id)
    {
        $actividad = Actividad::findOrFail($id);

        return view('panelAdministrador.administrarActividades.eliminarActividad', [
            'actividad' => $actividad,
        ]);
    }

    // Proceso de eliminación de actividad
    public function procesoEliminacionActividad($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();
        return redirect('/panel-administrador/actividades')
            ->with('success', 'La actividad ha sido eliminada correctamente.');
    }

    // Crear actividad
    public function crearActividad()
    {
        $provincias = Provincia::all();
        $tiposActividad = TipoActividad::all(); // Si también necesitas los tipos de actividad
        return view('panelAdministrador.administrarActividades.crearActividad', compact('provincias', 'tiposActividad'));
    }

    // Proceso de creación de actividad
    public function procesoCreacionActividad(Request $request)
    {
        $request->validate(Actividad::REGLAS_VALIDACION, Actividad::MENSAJES_VALIDACION);

        $data = $request->except(['_token']);

        if ($request->hasFile('archivo')) {
            $data['imagen_actividad'] = $request->file('archivo')->store('imagenes');
        }

        Actividad::create($data);

        return redirect('/panel-administrador/actividades')
            ->with('success', 'La actividad se ha creado correctamente.');
    }










    // Gastronomia

    // Locales Gastronómicos

    // Mostrar
    public function mostrarLocalesGastronomicos()
    {
        $localesGastronomicos = Gastronomia::all();

        return view('panelAdministrador.administrarGastronomia.mostrarLocalesGastronomicos', ['localesGastronomicos' => $localesGastronomicos]);
    }

    // Editar
    public function editarLocalGastronomico(int $id)
    {
        $localGastronomico = Gastronomia::findOrFail($id);
        $provincias = Provincia::all();
        $tiposGastronomia = TipoGastronomia::all();

        return view('panelAdministrador.administrarGastronomia.editarLocalGastronomico', ['localGastronomico' => $localGastronomico, 'provincias' => $provincias, 'tiposGastronomia' => $tiposGastronomia]);
    }

    public function procesoEdicionLocalGastronomico(int $id, Request $request)
    {
        $request->validate(Gastronomia::REGLAS_VALIDACION, Gastronomia::MENSAJES_VALIDACION);
        $data = $request->except(['_token', '_method']);
        $localGastronomico = Gastronomia::findOrFail($id);

        if ($request->hasFile('file')) {
            $data['imagen_local_gastronomico'] = $request->file('file')->store('imagenes');
            $oldCover = $localGastronomico->imagen_local_gastronomico;
        }

        $localGastronomico->update($data);

        if (isset($oldCover) && Storage::has($oldCover)) {
            Storage::delete($oldCover);
        }

        return redirect('/panel-administrador/locales-gastronomicos')->with('success', 'El local gastronómico ' . $data['nombre_local_gastronomico'] . ' ha sido actualizado con éxito.');
    }

    // Eliminar local gastronómico
    public function eliminarLocalGastronomico($id)
    {
        $localGastronomico = Gastronomia::findOrFail($id);

        return view('panelAdministrador.administrarGastronomia.eliminarLocalGastronomico', ['localGastronomico' => $localGastronomico]);
    }

    // Proceso eliminar local gastronómico
    public function procesoEliminacionLocalGastronomico($id)
    {
        $localGastronomico = Gastronomia::findOrFail($id);
        $localGastronomico->delete();
        return redirect('/panel-administrador/locales-gastronomicos')->with('success', 'El local gastronómico ha sido eliminado correctamente.');
    }

    // Crear local gastronómico
    public function crearLocalGastronomico()
    {
        $provincias = Provincia::all();
        $tiposGastronomia = TipoGastronomia::all();
        return view('panelAdministrador.administrarGastronomia.crearLocalGastronomico', compact('provincias', 'tiposGastronomia'));
    }

    // Proceso de creación de local gastronómico
    public function procesoCreacionLocalGastronomico(Request $request)
    {
        $request->validate(Gastronomia::REGLAS_VALIDACION, Gastronomia::MENSAJES_VALIDACION);
        $data = $request->except(['_token']);

        if ($request->hasFile('archivo')) {
            $data['imagen_local_gastronomico'] = $request->file('archivo')->store('imagenes');
        }

        Gastronomia::create($data);

        return redirect('/panel-administrador/locales-gastronomicos')->with('success', 'El local gastronómico se ha creado correctamente.');
    }

    // Posteos

    public function mostrarPosteos()
    {
        $posteos = Posteo::all();

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
        if ($posteo->imagen1 !== null) {
            Storage::delete($posteo->imagen1);
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
        $actividadesAlternativas = ActividadAlternativa::all();

        return view('panelAdministrador.administrarAlternativas.mostrarActividadesAlternativas', compact('actividadesAlternativas'));
    }

    public function verActividadAlternativa(int $id)
    {

        $actividadAlternativa = ActividadAlternativa::findOrFail($id);

        return view('panelAdministrador.administrarAlternativas.verActividadAlternativa', compact('actividadAlternativa'));
    }

    public function eliminarActividadAlternativa(int $id)
    {

        // Buscamos el posteo por su ID
        $actividadAlternativa = ActividadAlternativa::findOrFail($id);

        // Si tiene una imagen, la borramos.
        if ($actividadAlternativa->imagen1 !== null) {
            Storage::delete($actividadAlternativa->imagen1);
        }

        // Eliminamos el posteo
        $actividadAlternativa->delete();

        // Retornar la vista de lista de posteos con un mensaje de éxito
        return redirect('/panel-administrador/actividades-alternativas')
            ->with('success', 'La actividad alternativa ha sido eliminada con éxito.');
    }








    // USUARIOS

    public function mostrarUsuarios()
    {

        $usuarios = User::all();

        return view('panelAdministrador.administrarUsuarios.mostrarUsuarios', compact('usuarios'));
    }

    public function eliminarUsuario($id)
    {

        $usuario = User::findOrFail($id);

        $usuario->delete();

        return redirect()->back()->with('success', 'El usuario' . $usuario['name'] . 'Ha sido eliminado con exito');
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
        $usuario = User::findOrFail($id);
        $usuario->usuario_administrador = false;
        $usuario->save();

        return redirect()->back()->with('success', 'Privilegios de administrador eliminados con éxito.');
    }
}
