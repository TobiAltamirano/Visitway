<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alojamiento;

class TipoAlojamiento extends Model
{

    // Nombre de la tabla en la base de datos
    protected $table = 'tipos_alojamientos'; 

    // Nombre de la clave primaria
    protected $primaryKey = 'id_tipo_alojamiento'; 

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'id_tipo_alojamiento',
        'nombre_tipo_alojamiento'
    ]; 

    /**
     * Define la relación con el modelo Alojamiento
     */
    public function alojamientos()
    {
        return $this->hasMany(Alojamiento::class, 'tipo_alojamiento_id');
    }
}
