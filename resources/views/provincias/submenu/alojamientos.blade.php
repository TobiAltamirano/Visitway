<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Tu página</title>
</head>
<body>


    <script src="{{ asset('js/filtros.js') }}"></script>
</body>
</html> -->


<h1>Alojamientos en {{ $provincia->nombre_provincia }}</h1>

<h1>Alojamientos:</h1>

<!-- <input type="checkbox" id="acepta-mascotas">
<label for="">Acepta Mascotas</label> -->

<ul id="alojamientos-list">
    @foreach ($alojamientos as $alojamiento)
    <li><a href="{{ route('provincia.detalleAlojamiento', ['id' => $provincia->id_provincia, 'alojamientoId' => $alojamiento->id_alojamiento]) }}">{{ $alojamiento->nombre_alojamiento }}</li>
    @endforeach
</ul>