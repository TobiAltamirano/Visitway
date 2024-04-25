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

<div>
    <h2 class='provincias-h2'>Filtrar por: </h2>
    
    <form action="{{ route('provincia.filtrarAlojamientos', ['id' => $provincia->id_provincia, 'idTipoAlojamiento' => $idTipoAlojamiento]) }}" method="get" id="filtro-form">
    @csrf
    @method('GET')
    <div>
        <h2 class='provincias-h2'>Filtrar por: </h2>
        <div class='container-filtros'>
            <label>
                <input type="checkbox" name="acepta_mascotas" {{ request('acepta_mascotas') ? 'checked' : '' }}>
                <span class='span-label'>Apto Mascotas</span>
            </label>
            <label>
                <input type="checkbox" name="tiene_descuento" {{ request('tiene_descuento') ? 'checked' : '' }}>
                <span class='span-label'>Tiene Descuentos</span>
            </label>
        </div>
    </div>
    <!-- Campo oculto para el tipo de alojamiento -->
    <input type="hidden" name="id_tipo_alojamiento" value="{{ $idTipoAlojamiento }}">
    <button type="submit">FILTRAR</button>
</form>
    
    

</div>

<ul id="alojamientos-list">
    @foreach ($alojamientos as $alojamiento)
        <li id="alojamiento-{{ $alojamiento->id_alojamiento }}">
            <a href="{{ route('provincia.detalleAlojamiento', ['id' => $provincia->id_provincia, 'alojamientoId' => $alojamiento->id_alojamiento]) }}">
                {{ $alojamiento->nombre_alojamiento }}
            </a>
        </li>
    @endforeach
</ul>