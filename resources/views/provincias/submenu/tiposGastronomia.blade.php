<?php

use App\Models\Provincia;
use App\Models\tipoGastronomia;

/** @var Provincia $provincia */
/** @var TiposGastronomia $tiposGastronomia */

?>

<h1>Locales gastronómicos en {{ $provincia->nombre_provincia }}</h1>

<h1>Tipos de locales gastronómicos:</h1>
<ul>
    @foreach ($tiposGastronomia as $tipoGastronomia)
        <li><a href="{{ route('provincia.gastronomia', ['id' => $provincia->id_provincia, 'idTipoGastronomia' => $tipoGastronomia->id_tipo_gastronomia]) }}">{{ $tipoGastronomia->nombre_tipo_gastronomia }}</a></li>
    @endforeach
</ul>