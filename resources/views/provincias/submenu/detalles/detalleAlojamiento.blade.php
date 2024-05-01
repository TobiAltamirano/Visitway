<?php

use App\Models\Provincia;
use App\Models\Alojamiento;

/** @var Provincia $provincia */
/** @var Alojamiento $alojamiento */

?>

<h1>Detalles del Alojamiento {{ $alojamiento->nombre_alojamiento }}</h1>

<div>
    <h2>{{ $alojamiento->nombre_alojamiento }}</h2>
    <p><strong>Tipo:</strong> {{ $alojamiento->tipo_alojamiento }}</p>
    <p><strong>Precio:</strong> {{ $alojamiento->precio_alojamiento }}</p>
    <p><strong>Horarios:</strong> {{ $alojamiento->horarios_alojamiento }}</p>
    <p><strong>Ubicación:</strong> {{ $alojamiento->ubicacion_alojamiento }}</p>
    <p><strong>Contacto:</strong> {{ $alojamiento->contacto_alojamiento }}</p>
    <p><strong>Descuentos/Ofertas:</strong> {{ $alojamiento->tiene_descuentos_ofertas ? 'Sí' : 'No' }}</p>
    <p><strong>Wifi:</strong> {{ $alojamiento->tiene_wifi ? 'Sí' : 'No' }}</p>
    <p><strong>Estacionamiento:</strong> {{ $alojamiento->tiene_estacionamiento ? 'Sí' : 'No' }}</p>
    <p><strong>Acepta Mascotas:</strong> {{ $alojamiento->acepta_mascotas ? 'Sí' : 'No' }}</p>
    <p><strong>Acepta Débito:</strong> {{ $alojamiento->acepta_debito ? 'Sí' : 'No' }}</p>
    <p><strong>Acepta Crédito:</strong> {{ $alojamiento->acepta_credito ? 'Sí' : 'No' }}</p>
    <p><strong>Acepta Medios Digitales:</strong> {{ $alojamiento->acepta_medios_digitales ? 'Sí' : 'No' }}</p>
    <p><strong>Sitio Web:</strong> <a href="{{ $alojamiento->url_sitio_web_alojamiento }}">{{ $alojamiento->url_sitio_web_alojamiento }}</a></p>
</div>

@if ($alojamiento->acepta_medios_digitales)
    <h1>GENIAL</h1> <!-- Icono de check -->
@else
    <h1>NOOO</h1> <!-- Icono de 'X' -->
@endif

@if ($favoritoExistente)
    <!-- Botón para eliminar de favoritos -->
    <form action="{{ route('favoritos.eliminar', ['id' => $alojamiento->id_alojamiento, 'tipo' => 'alojamiento']) }}" method="post">
        @csrf
        @method('post')
        <button type="submit">Eliminar de favoritos</button>
    </form>
@else
    <!-- Botón para agregar a favoritos -->
    <form action="{{ route('favoritos.agregar', ['id' => $alojamiento->id_alojamiento, 'tipo' => 'alojamiento']) }}" method="post">
        @csrf
        <button type="submit">Agregar a favoritos</button>
    </form>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif