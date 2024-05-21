<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Provincias:</h1>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css">
<script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

<button
  type="button"
  data-ripple-light="true"
  class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
>
  Button
</button>

@foreach($provincias as $provincia)
    <h2>{{ $provincia->region_provincia }}</h2>
    <ul>
        <h3><a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia]) }}">{{ $provincia->nombre_provincia }}</li>
    </ul>
@endforeach



