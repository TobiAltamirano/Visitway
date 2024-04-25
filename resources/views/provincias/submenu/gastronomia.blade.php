<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Locales Gastronómicos en {{ $provincia->nombre_provincia }}</h1>

<div>
    <h2 class='provincias-h2'>Filtrar por: </h2>
    
    <form action="{{ route('provincia.filtrarGastronomia', ['id' => $provincia->id_provincia, 'idTipoGastronomia' => $idTipoGastronomia]) }}" method="get" id="filtro-form">
    @csrf
    @method('GET')
    <div>
        <h2 class='provincias-h2'>Filtrar por: </h2>
        <div class='container-filtros'>
            <label>
                <input type="checkbox" name="apto_veganos" {{ request('apto_veganos') ? 'checked' : '' }}>
                <span class='span-label'>Apto Veganos</span>
            </label>
            <label>
                <input type="checkbox" name="apto_vegetarianos" {{ request('apto_vegetarianos') ? 'checked' : '' }}>
                <span class='span-label'>Apto Vegetarianos</span>
            </label>
            <label>
                <input type="checkbox" name="apto_sin_tacc" {{ request('apto_sin_tacc') ? 'checked' : '' }}>
                <span class='span-label'>Apto Sin Tacc</span>
            </label>
            <label>
                <input type="checkbox" name="apto_intolerantes_lactosa" {{ request('apto_intolerantes_lactosa') ? 'checked' : '' }}>
                <span class='span-label'>Apto Intolerantes Lactosa</span>
            </label>
        </div>
    </div>
    <!-- Campo oculto para el tipo de gastronomia -->
    <input type="hidden" name="id_tipo_gastronomia" value="{{ $idTipoGastronomia }}">
    <button type="submit">FILTRAR</button>
</form>

<h1>Locales gastronomicos:</h1>
<ul>
    @foreach ($localesGastronomicos as $localGastronomico)
    <li><a href="{{ route('provincia.detalleGastronomia', ['id' => $provincia->id_provincia, 'actividadId' => $localGastronomico->id_local_gastronomico]) }}">{{ $localGastronomico->nombre_local_gastronomico }}</li>
    @endforeach
</ul>