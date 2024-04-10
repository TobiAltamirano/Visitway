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
        "tipo_actividad",
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
        "id_provincia"
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