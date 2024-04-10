<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoGastronomia extends Model
{
    public function gastronomias(){
        
        return $this->hasMany(Gastronomia::class);
    }
}
