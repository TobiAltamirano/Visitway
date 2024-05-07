<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Provincias:</h1>

@foreach($provincias as $provincia)
    <h2>{{ $provincia->region_provincia }}</h2>
    <ul>
        <h3><a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia]) }}">{{ $provincia->nombre_provincia }}</li>
    </ul>
@endforeach



