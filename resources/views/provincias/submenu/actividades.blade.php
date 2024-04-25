<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Actividades en {{ $provincia->nombre_provincia }}</h1>


<h1>Actividades:</h1>

<div>
    <h2 class='provincias-h2'>Filtrar por: </h2>
    
    <form action="{{ route('provincia.filtrarActividades', ['id' => $provincia->id_provincia, 'idTipoActividad' => $idTipoActividad]) }}" method="get" id="filtro-form">
        @csrf
        @method('GET')
        <div class='container-filtros'>
            <label>
                <input type="checkbox" name="es_accesible" {{ request('es_accesible') ? 'checked' : '' }}>
                <span class='span-label'>Apto Discapacitados</span>
            </label>
            <label>
                <input type="checkbox" name="tiene_descuento" {{ request('tiene_descuento') ? 'checked' : '' }}>
                <span class='span-label'>Tiene Descuentos</span>
            </label>
            <label>
                <input type="checkbox" name="es_gratis" {{ request('es_gratis') ? 'checked' : '' }}>
                <span class='span-label'>Actividades Gratuitas</span>
            </label>
            <label>
                <input type="checkbox" name="acepta_mascotas" {{ request('acepta_mascotas') ? 'checked' : '' }}>
                <span class='span-label'>Permite Mascotas</span>
            </label>
        </div>
        <!-- Campo oculto para el tipo de actividad -->
        <input type="hidden" name="idTipoActividad" value="{{ $idTipoActividad }}">
        <button type="submit">FILTRAR</button>
    </form>
</div>


<ul>
    @foreach ($actividades as $actividad)
    <li><a href="{{ route('provincia.detalleActividad', ['id' => $provincia->id_provincia, 'actividadId' => $actividad->id_actividad]) }}">{{ $actividad->nombre_actividad }}</li>
    @endforeach
</ul>