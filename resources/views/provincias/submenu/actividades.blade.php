<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Actividades en {{ $provincia->nombre_provincia }}</h1>

<h1>Actividades:</h1>
<ul>
    @foreach ($actividades as $actividad)
    <li><a href="{{ route('provincia.detalleActividad', ['id' => $provincia->id_provincia, 'actividadId' => $actividad->id_actividad]) }}">{{ $actividad->nombre_actividad }}</li>
    @endforeach
</ul>