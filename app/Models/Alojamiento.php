<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    // use HasFactory;

    // Nombre de la tabla
    protected $table = "alojamientos";

    // Asignamos nombre de la PK.
    protected $primaryKey = "id_alojamiento";

    protected $fillable = [
        "nombre_alojamiento",
        "imagen_alojamiento",
        "precio_alojamiento",
        "horarios_alojamiento",
        "ubicacion_alojamiento",
        "contacto_alojamiento",
        "url_sitio_web_alojamiento",
        "tiene_descuentos_ofertas",
        "tiene_wifi",
        "tiene_estacionamiento",
        "acepta_mascotas",
        "acepta_debito",
        "acepta_credito",
        "acepta_medios_digitales",
        "provincia_id",
        "tipo_alojamiento_id"
    ];

    // Creamos reglas y mensajes de validación
    public const REGLAS_VALIDACION = [
        'nombre_alojamiento' => 'required|min:5',
        'imagen_alojamiento' => 'required',
        'precio_alojamiento' => 'required',
        'horarios_alojamiento' => 'required',
        'ubicacion_alojamiento' => 'required',
        'contacto_alojamiento' => 'required|min:11',
        'tiene_descuentos_ofertas' => 'required',
        'tiene_wifi' => 'required',
        'tiene_estacionamiento' => 'required',
        'acepta_mascotas' => 'required',
        'acepta_debito' => 'required',
        'acepta_credito' => 'required',
        'acepta_medios_digitales' => 'required',
        'provincia_id' => 'required',
        'tipo_alojamiento_id' => 'required',
    ];

    public const MENSAJES_VALIDACION = [
        'nombre_alojamiento.required' => 'El nombre es obligatorio.',
        'nombre_alojamiento.min' => 'El nombre debe tener al menos :min caracteres.',
        'imagen_alojamiento.required' => 'La imagen es obligatoria.',
        'precio_alojamiento.required' => 'El precio es obligatorio.',
        'horarios_alojamiento.required' => 'Los horarios son obligatorios.',
        'ubicacion_alojamiento.required' => 'La ubicación es obligatoria.',
        'contacto_alojamiento.required' => 'El contacto es obligatorio.',
        'contacto_alojamiento.min' => 'El contacto debe tener al menos :min caracteres.',
        'provincia_id.required' => 'El campo de provincia es obligatorio.',
        'tipo_alojamiento_id.required' => 'El campo de tipo de alojamiento es obligatorio.',
    ];

    // Relación con la tabla Provincias
    public function provincia()
    {
        // Pasamos por parametro el FQN, nombre de foreing key y owner key
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id_provincia');
    }

    // Relación con la tabla Tipo Alojamientos
    public function tipoAlojamiento()
    {
        return $this->belongsTo(TipoAlojamiento::class);
    }
}
