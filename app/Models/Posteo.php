<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    // use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario',
        'titulo',
        'contenido',
        'provincia',
        'imagen1',
        'imagen2',
        'imagen3',
    ];

    // Creamos reglas y mensajes de validación

    public const REGLAS_VALIDACION = [
        'titulo' => 'required|min:2',
        'contenido' => 'required',
        // 'fecha_publicacion' => 'required',
    ];
    
    public const MENSAJES_VALIDACION = [
        'titulo.required' => 'El título no puede quedar vacío.',
        'titulo.min' => 'El título debe tener al menos :min caracteres.',
        'contenido.required' => 'El contenido no puede quedar vacío.',
        // 'fecha_publicacion.required' => 'La fecha de publicación no puede quedar vacía.',
    ];    

    /**
     * Obtiene el usuario que creó el post.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
