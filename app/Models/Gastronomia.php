<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastronomia extends Model
{
    // use HasFactory;

    // Nombre de la tabla
    protected $table = "gastronomia";

    // Asignamos nombre de la PK.
    protected $primaryKey = "id_local_gastronomico";

    protected $fillable = [
        "nombre_local_gastronomico",
        "tipo_local_gastronomico",
        "imagen_local_gastronomico",
        "horarios_local_gastronomico",
        "ubicacion_local_gastronomico",
        "contacto_local_gastronomico",
        "url_sitio_web_local_gastronomico",
        "tiene_descuentos_ofertas",
        "tiene_wifi",
        "tiene_estacionamiento",
        "acepta_mascotas",
        "acepta_debito",
        "acepta_credito",
        "acepta_medios_digitales",
        "apto_vegetarianos",
        "apto_veganos",
        "apto_sin_tacc",
        "apto_intolerantes_lactosa",
        "provincia_id",
        "tipo_gastronomia_id"
    ];

    // Creamos reglas y mensajes de validación
    public const REGLAS_VALIDACION = [
        'nombre_local_gastronomico' => 'required|min:5',
        'imagen_local_gastronomico' => 'required',
        'horarios_local_gastronomico' => 'required',
        'ubicacion_local_gastronomico' => 'required|min:3',
        'contacto_local_gastronomico' => 'required|digits:11',
        'tiene_descuentos_ofertas' => 'required',
        'tiene_wifi' => 'required',
        'tiene_estacionamiento' => 'required',
        'acepta_mascotas' => 'required',
        'acepta_debito' => 'required',
        'acepta_credito' => 'required',
        'acepta_medios_digitales' => 'required',
        'apto_vegetarianos' => 'required',
        'apto_veganos' => 'required',
        'apto_sin_tacc' => 'required',
        'apto_intolerantes_lactosa' => 'required',
        'provincia_id' => 'required',
        'tipo_gastronomia_id' => 'required',
    ];

    public const MENSAJES_VALIDACION = [
        'nombre_local_gastronomico.required' => 'El nombre es obligatorio.',
        'nombre_local_gastronomico.min' => 'El nombre debe tener al menos :min caracteres.',
        'imagen_local_gastronomico.required' => 'La imagen es obligatoria.',
        'horarios_local_gastronomico.required' => 'Los horarios son obligatorios.',
        'ubicacion_local_gastronomico.required' => 'La ubicación es obligatoria.',
        'ubicacion_local_gastronomico.min' => 'La ubicación debe tener al menos :min caracteres.',
        'contacto_local_gastronomico.required' => 'El contacto es obligatorio.',
        'contacto_local_gastronomico.digits' => 'El contacto debe tener :digits dígitos.',
        'provincia_id.required' => 'Debe ingresar un valor valido',
        'tipo_gastronomia_id.required' => 'Debe ingresar un valor valido'
    ];


    // Relación con la tabla Provincias
    public function provincia()
    {
        // Pasamos por parametro el FQN, nombre de foreing key y owner key
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id_provincia');
    }

    // Relación con la tabla tipo Gastronomía
    public function tipoGastronomia()
    {
        return $this->belongsTo(TipoGastronomia::class);
    }
}
