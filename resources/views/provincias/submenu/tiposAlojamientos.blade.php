<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>


<h1>Alojamientos en {{ $provincia->nombre_provincia }}</h1>

<h1>Tipos de Alojamientos:</h1>
<ul>
    @foreach ($tiposAlojamientos as $tipoAlojamiento)
    <li><a href="{{ route('provincia.alojamientos', ['id' => $provincia->id_provincia, 'idTipoAlojamiento' => $tipoAlojamiento->id_tipo_alojamiento]) }}">{{ $tipoAlojamiento->nombre_tipo_alojamiento }}</a></li>
    @endforeach
</ul>