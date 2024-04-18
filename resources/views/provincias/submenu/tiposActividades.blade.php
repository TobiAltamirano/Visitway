<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Actividades en {{ $provincia->nombre_provincia }}</h1>

<h1>Tipos de Actividades:</h1>
<ul>
    @foreach ($tiposActividades as $tipoActividad)
    <li><a href="{{ route('provincia.actividades', ['id' => $provincia->id_provincia, 'idTipoActividad' => $tipoActividad->id_tipo_actividad]) }}">{{ $tipoActividad->nombre_tipo_actividad }}</a></li>
    @endforeach
</ul>