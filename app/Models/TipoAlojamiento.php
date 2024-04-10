<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAlojamiento extends Model
{
    public function alojamientos()
    {
        return $this->hasMany(Alojamiento::class);
    }
}
