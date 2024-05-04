<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    // use HasFactory;

    // Nombre de la tabla
    protected $table = "actividades";

    // Asignamos nombre de la PK.
    protected $primaryKey = "id_actividad";

    protected $fillable = [
        "nombre_actividad",
        "imagen_actividad",
        "descripcion_actividad",
        "precio_actividad",
        "horarios_actividad",
        "ubicacion_actividad",
        "contacto_actividad",
        "url_sitio_web_actividad",
        "duracion_actividad",
        "tiene_descuentos_ofertas",
        "es_accesible",
        "es_gratis",
        "acepta_mascotas",
        "acepta_debito",
        "acepta_credito",
        "acepta_medios_digitales",
        "provincia_id",
        "tipo_actividad_id"
    ];

    // Creamos reglas y mensajes de validación
    public const REGLAS_VALIDACION = [
        'nombre_actividad' => 'required|min:5',
        'imagen_actividad' => 'required',
        'descripcion_actividad' => 'required',
        'precio_actividad' => 'required',
        'horarios_actividad' => 'required',
        'ubicacion_actividad' => 'required|min:3',
        'contacto_actividad' => 'required|digits:11',
        'url_sitio_web_actividad' => 'nullable',
        'duracion_actividad' => 'nullable',
        'tiene_descuentos_ofertas' => 'required',
        'es_accesible' => 'required',
        'es_gratis' => 'required',
        'acepta_mascotas' => 'required',
        'acepta_debito' => 'required',
        'acepta_credito' => 'required',
        'acepta_medios_digitales' => 'required',
        'provincia_id' => 'required',
        'tipo_actividad_id' => 'required',
    ];

    public const MENSAJES_VALIDACION = [
        'nombre_actividad.required' => 'El nombre es obligatorio.',
        'nombre_actividad.min' => 'El nombre debe tener al menos :min caracteres.',
        'imagen_actividad.required' => 'La imagen es obligatoria.',
        'descripcion_actividad.required' => 'La descripción es obligatoria.',
        'precio_actividad.required' => 'El precio es obligatorio.',
        'horarios_actividad.required' => 'Los horarios son obligatorios.',
        'ubicacion_actividad.required' => 'La ubicación es obligatoria.',
        'ubicacion_actividad.min' => 'La ubicación debe tener al menos :min caracteres.',
        'contacto_actividad.required' => 'El contacto es obligatorio.',
        'contacto_actividad.digits' => 'El contacto debe tener :digits dígitos.',
        'provincia_id.required' => 'Debe ingresar un valor valido',
        'tipo_actividad_id.required' => 'Debe ingresar un valor valido'
        // No se agregan mensajes para los campos opcionales
    ];

    // Relación con la tabla Provincias
    public function provincia(){
        // Pasamos por parametro el FQN, nombre de foreing key y owner key
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id_provincia');
    }

    // Relación con la tabla Tipo Actividades
    public function tipoActividad()
    {
        return $this->belongsTo(TipoActividad::class);
    }
}