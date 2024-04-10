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
        "id_provincia"
    ];

    // Relación con la tabla Provincias
    public function provincia(){
        // Pasamos por parametro el FQN, nombre de foreing key y owner key
        return $this->belongsTo(Provincia::class, 'provincia_id', 'idProvincias');
    }

    // Relación con la tabla tipo Gastronomía
    public function tipoGastronomia()
    {
        return $this->belongsTo(TipoGastronomia::class);
    }
}