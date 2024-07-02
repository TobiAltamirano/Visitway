<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cronograma;
use Illuminate\Support\Facades\Auth;

class CronogramaController extends Controller
{
    // Mostrar cronograma ordenado por días de la semana

    public function mostrarCronograma()
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Obtener todas las actividades del cronograma del usuario actual
        $actividades = Cronograma::where('id_usuario', $userId)->get();

        // Inicializar variables para almacenar las actividades por día
        $actividadesLunes = [];
        $actividadesMartes = [];
        $actividadesMiercoles = [];
        $actividadesJueves = [];
        $actividadesViernes = [];
        $actividadesSabado = [];
        $actividadesDomingo = [];

        // Separar las actividades por día
        foreach ($actividades as $actividad) {
            switch ($actividad->dia_semana) {
                case 1:
                    $actividadesLunes[] = $actividad;
                    break;
                case 2:
                    $actividadesMartes[] = $actividad;
                    break;
                case 3:
                    $actividadesMiercoles[] = $actividad;
                    break;
                case 4:
                    $actividadesJueves[] = $actividad;
                    break;
                case 5:
                    $actividadesViernes[] = $actividad;
                    break;
                case 6:
                    $actividadesSabado[] = $actividad;
                    break;
                case 7:
                    $actividadesDomingo[] = $actividad;
                    break;
                default:
                    break;
            }
        }

        // Pasar las actividades a la vista
        return view('cronograma.mostrarCronograma', compact('actividadesLunes', 'actividadesMartes', 'actividadesMiercoles', 'actividadesJueves', 'actividadesViernes', 'actividadesSabado', 'actividadesDomingo'));
    }

    public function agregarAlCronograma(Request $request, int $id)
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Verificar si la actividad ya fue agregada para el mismo usuario, día, hora de inicio y hora de fin
        $actividadExistente = Cronograma::where('id_usuario', $userId)
            ->where('id_actividad', $id)
            ->where('dia_semana', $request->dia_semana)
            ->where('hora_inicio', $request->hora_inicio)
            ->where('hora_fin', $request->hora_fin)
            ->exists();

        if ($actividadExistente) {
            return redirect()->back()->with('error', 'La actividad ya fue agregada previamente en un mismo día y horario.');
        }

        // Si la actividad no está en el cronograma, agregarla
        Cronograma::create([
            'id_usuario' => $userId,
            'id_actividad' => $id,
            'dia_semana' => $request->dia_semana,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
        ]);

        // Pasar la variable $actividadEnCronograma a la vista
        return redirect()->back()->with('success', 'Actividad agregada al cronograma correctamente.');
    }

    public function eliminarDelCronograma($id)
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Buscar la actividad por el ID y el ID del usuario autenticado
        $actividad = Cronograma::where('id', $id)
            ->where('id_usuario', $userId)
            ->first();

        // Verificar si la actividad existe y pertenece al usuario actual
        if ($actividad) {
            // Eliminar la actividad
            $actividad->delete();
            return redirect()->back()->with('success', 'La actividad ha sido eliminada correctamente.');
        } else {
            return redirect()->back()->with('error', 'No se pudo encontrar la actividad para eliminar.');
        }
    }

    public function editarActividadDelCronograma(Request $request, $id)
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Buscar la actividad por el ID y el ID del usuario autenticado
        $actividad = Cronograma::where('id', $id)
            ->where('id_usuario', $userId)
            ->first();

        // Verificar si la actividad existe y pertenece al usuario actual
        if ($actividad) {
            // Validar los datos del formulario
            $request->validate([
                'nuevo_dia' => 'required|integer|min:1|max:7',
                'nueva_hora_inicio' => 'required|date_format:H:i',
                'nueva_hora_fin' => 'required|date_format:H:i|after:nueva_hora_inicio',
            ]);

            // Actualizar la actividad con los nuevos datos
            $actividad->dia_semana = $request->nuevo_dia;
            $actividad->hora_inicio = $request->nueva_hora_inicio;
            $actividad->hora_fin = $request->nueva_hora_fin;
            $actividad->save();

            return redirect()->back()->with('success', 'La actividad ha sido editada correctamente.');
        } else {
            return redirect()->back()->with('error', 'No se pudo encontrar la actividad para editar.');
        }
    }

    public function duplicarActividadDelCronograma(Request $request, $id, $idActividad)
    {
        // Obtener el ID del usuario autenticado
        $userId = Auth::id();

        // Verificar si el usuario es el mismo que creó la actividad
        $actividadExistente = Cronograma::where('id', $id)
            ->where('id_usuario', $userId)
            ->first();

        if ($actividadExistente) {
            // Crear una nueva entrada en el cronograma con los detalles actualizados
            $nuevaActividad = new Cronograma();
            $nuevaActividad->id_usuario = $userId;
            $nuevaActividad->id_actividad = $idActividad;
            $nuevaActividad->dia_semana = $request->dia_semana;
            $nuevaActividad->hora_inicio = $request->hora_inicio;
            $nuevaActividad->hora_fin = $request->hora_fin;
            $nuevaActividad->save();

            return redirect()->back()->with('success', 'La actividad ha sido duplicada correctamente.');
        } else {
            return redirect()->back()->with('error', 'No se pudo duplicar la actividad.');
        }
    }
}
