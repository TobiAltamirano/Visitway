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
        "tipo_alojamiento",
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
        "id_provincia"
    ];

    // Relación con la tabla Provincias
    public function provincia(){
        // Pasamos por parametro el FQN, nombre de foreing key y owner key
        return $this->belongsTo(Provincia::class, 'provincia_id', 'idProvincias');
    }
}