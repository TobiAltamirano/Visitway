<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoGastronomia extends Model
{

    // Nombre de la tabla en la base de datos
    protected $table = 'tipos_gastronomia';

    // Nombre de la clave primaria
    protected $primaryKey = 'id_tipo_gastronomia';

    // Campos que se pueden asignar de forma masiva
    protected $fillable = [
        'id_tipo_gastronomia',
        'nombre_tipo_gastronomia'
    ];

    /**
     * Define la relación con el modelo Gastronomia
     */
    public function gastronomia()
    {

        return $this->hasMany(Gastronomia::class);
    }
}
