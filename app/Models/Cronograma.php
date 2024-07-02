<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    // use HasFactory;

    // Nombre de la tabla
    protected $table = "cronograma";

    // Asignamos nombre de la PK.
    protected $primaryKey = "id";

    protected $fillable = [
        'id_actividad',
        'id_usuario',
        'dia_semana',
        'hora_inicio',
        'hora_fin',
    ];

    // Creamos reglas y mensajes de validación
    public const REGLAS_VALIDACION = [
        'id_usuario' => 'required|exists:users,id',
        'id_actividad' => 'required|exists:actividades,id_actividad',
        'dia_semana' => 'required|numeric|between:1,7',
        'hora_inicio' => 'required|date_format:H:i',
        'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
    ];

    public const MENSAJES_VALIDACION = [
        'id_usuario.required' => 'El campo de ID de usuario es requerido.',
        'id_usuario.exists' => 'El ID de usuario especificado no es válido.',
        'id_actividad.required' => 'El campo de ID de actividad es requerido.',
        'id_actividad.exists' => 'El ID de actividad especificado no es válido.',
        'dia_semana.required' => 'El campo de día de la semana es requerido.',
        'dia_semana.numeric' => 'El campo de día de la semana debe ser un valor numérico.',
        'dia_semana.between' => 'El campo de día de la semana debe estar entre :min y :max.',
        'hora_inicio.required' => 'El campo de hora de inicio es requerido.',
        'hora_inicio.date_format' => 'El campo de hora de inicio debe tener el formato HH:MM.',
        'hora_fin.required' => 'El campo de hora de fin es requerido.',
        'hora_fin.date_format' => 'El campo de hora de fin debe tener el formato HH:MM.',
        'hora_fin.after' => 'La hora de fin debe ser posterior a la hora de inicio.',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'id_actividad');
    }
}
