<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    // use HasFactory;

    // Nombre de la tabla
    protected $table = "provincias";

    // Nombre de la PK
    protected $primaryKey = "id_provincia";

    protected $fillable = [
        "id_provincia",
        "region_provincia",
        "nombre_provincia",
        "imagen_provincia",
        "descripcion_provincia",
        "ubicacion_provincia",
        "imagen_ubicacion_provincia",
        "cultura_caracteristicas_provincia",
        "flora_fauna",
        "historia",
        "id_caracteristicas_principales",
        "id_datos_interesantes" 
    ];
    
}