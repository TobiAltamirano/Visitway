<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Alojamientos en {{ $provincia->nombre_provincia }}</h1>

<h1>Alojamientos:</h1>

<ul id="alojamientos-list">
    @foreach ($alojamientos as $alojamiento)
        <li id="alojamiento-{{ $alojamiento->id_alojamiento }}">
            <a href="{{ route('provincia.detalleAlojamiento', ['id' => $provincia->id_provincia, 'alojamientoId' => $alojamiento->id_alojamiento]) }}">
                {{ $alojamiento->nombre_alojamiento }}
            </a>
        </li>
    @endforeach
</ul>