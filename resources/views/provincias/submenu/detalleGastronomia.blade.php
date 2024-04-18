<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Locales gastronómicos en {{ $provincia->nombre_provincia }}</h1>

<h1>Detalle del local gastronómico</h1>

<h2>{{ $gastronomia->nombre_local_gastronomico }}</h2>

<div>
    <img src="{{ $gastronomia->imagen_local_gastronomico }}" alt="{{ $gastronomia->nombre_local_gastronomico }}">
</div>

<p><strong>Tipo:</strong> {{ $gastronomia->tipo_local_gastronomico }}</p>

<p><strong>Horarios:</strong> {{ $gastronomia->horarios_local_gastronomico }}</p>

<p><strong>Ubicación:</strong> {{ $gastronomia->ubicacion_local_gastronomico }}</p>

<p><strong>Contacto:</strong> {{ $gastronomia->contacto_local_gastronomico }}</p>

@if ($gastronomia->url_sitio_web_local_gastronomico)
    <p><strong>Sitio web:</strong> <a href="{{ $gastronomia->url_sitio_web_local_gastronomico }}">{{ $gastronomia->url_sitio_web_local_gastronomico }}</a></p>
@endif

<p><strong>Descuentos/Ofertas:</strong> {{ $gastronomia->tiene_descuentos_ofertas ? 'Sí' : 'No' }}</p>

<p><strong>WiFi:</strong> {{ $gastronomia->tiene_wifi ? 'Sí' : 'No' }}</p>

<p><strong>Estacionamiento:</strong> {{ $gastronomia->tiene_estacionamiento ? 'Sí' : 'No' }}</p>

<p><strong>Acepta mascotas:</strong> {{ $gastronomia->acepta_mascotas ? 'Sí' : 'No' }}</p>

<p><strong>Acepta débito:</strong> {{ $gastronomia->acepta_debito ? 'Sí' : 'No' }}</p>

<p><strong>Acepta crédito:</strong> {{ $gastronomia->acepta_credito ? 'Sí' : 'No' }}</p>

<p><strong>Acepta medios digitales:</strong> {{ $gastronomia->acepta_medios_digitales ? 'Sí' : 'No' }}</p>

<p><strong>Apto vegetarianos:</strong> {{ $gastronomia->apto_vegetarianos ? 'Sí' : 'No' }}</p>

<p><strong>Apto veganos:</strong> {{ $gastronomia->apto_veganos ? 'Sí' : 'No' }}</p>

<p><strong>Apto sin TACC:</strong> {{ $gastronomia->apto_sin_tacc ? 'Sí' : 'No' }}</p>

<p><strong>Apto intolerantes a la lactosa:</strong> {{ $gastronomia->apto_intolerantes_lactosa ? 'Sí' : 'No' }}</p>
