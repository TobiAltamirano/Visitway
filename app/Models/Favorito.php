<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    // use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    
    // Nombre de la tabla
    protected $table = "favoritos";

    
    // Asignamos nombre de la PK.
    protected $primaryKey = "id";

    protected $fillable = [
        'id_usuario',
        'id_favorito',
        'tipo_favorito',
    ];
    
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function alojamiento()
    {
        return $this->belongsTo(Alojamiento::class, 'id_favorito')->where('tipo_favorito', 'alojamiento');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'id_favorito')->where('tipo_favorito', 'actividad');
    }

    public function gastronomia()
    {
        return $this->belongsTo(Gastronomia::class, 'id_favorito')->where('tipo_favorito', 'gastronomia');
    }
}