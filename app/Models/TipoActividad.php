<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{

    // Nombre de la tabla en la base de datos
    protected $table = 'tipos_actividades';

    // Nombre de la clave primaria
    protected $primaryKey = 'id_tipo_actividad';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'id_tipo_actividad',
        'nombre_tipo_actividad'
    ];

    /**
     * Define la relación con el modelo Actividad
     */
    public function actividades()
    {

        return $this->hasMany(Actividad::class);
    }
}
