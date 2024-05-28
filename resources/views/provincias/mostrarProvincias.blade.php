<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Provincias:</h1>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css">
<script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

@foreach($provincias as $provincia)
    <h2>{{ $provincia->region_provincia }}</h2>
    <ul>
        <h3><a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia]) }}">{{ $provincia->nombre_provincia }}</li>
    </ul>
@endforeach



