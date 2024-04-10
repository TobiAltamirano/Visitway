<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Introducción {{ $provincia->nombre_provincia }}</h1>

<h2>Descripción</h2>
<p>{{ $provincia->descripcion_provincia }}</p>

<h2>Flora y Fauna</h2>
<p>{{ $provincia->flora_fauna_provincia }}</p>
