<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Locales Gastronómicos en {{ $provincia->nombre_provincia }}</h1>

<h1>Tipos de Locales gastronomicos:</h1>
<ul>
    @foreach ($localesGastronomicos as $localGastronomico)
    <li><a href="{{ route('provincia.detalleGastronomia', ['id' => $provincia->id_provincia, 'actividadId' => $localGastronomico->id_local_gastronomico]) }}">{{ $localGastronomico->nombre_local_gastronomico }}</li>
    @endforeach
</ul>