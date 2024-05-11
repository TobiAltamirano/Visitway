<?php

use App\Models\Provincia;

/** @var Provincia $provincia */

?>

<h1>Actividades en {{ $provincia->nombre_provincia }}</h1>

<h1>Detalle de la actividad</h1>

<h2>{{ $actividad->nombre_actividad }}</h2>

<div>
    <img src="{{ $actividad->imagen_actividad }}" alt="{{ $actividad->nombre_actividad }}">
</div>

<p><strong>Descripción:</strong> {{ $actividad->descripcion_actividad }}</p>

<p><strong>Precio:</strong> {{ $actividad->precio_actividad }}</p>

<p><strong>Horarios:</strong> {{ $actividad->horarios_actividad }}</p>

<p><strong>Ubicación:</strong> {{ $actividad->ubicacion_actividad }}</p>

<p><strong>Contacto:</strong> {{ $actividad->contacto_actividad }}</p>

@if ($actividad->url_sitio_web_actividad)
    <p><strong>Sitio web:</strong> <a href="{{ $actividad->url_sitio_web_actividad }}">{{ $actividad->url_sitio_web_actividad }}</a></p>
@endif

<p><strong>Duración:</strong> {{ $actividad->duracion_actividad }}</p>

<p><strong>Descuentos/Ofertas:</strong> {{ $actividad->tiene_descuentos_ofertas ? 'Sí' : 'No' }}</p>

<p><strong>Es accesible:</strong> {{ $actividad->es_accesible ? 'Sí' : 'No' }}</p>

<p><strong>Es gratis:</strong> {{ $actividad->es_gratis ? 'Sí' : 'No' }}</p>

<p><strong>Acepta mascotas:</strong> {{ $actividad->acepta_mascotas ? 'Sí' : 'No' }}</p>

<p><strong>Acepta débito:</strong> {{ $actividad->acepta_debito ? 'Sí' : 'No' }}</p>

<p><strong>Acepta crédito:</strong> {{ $actividad->acepta_credito ? 'Sí' : 'No' }}</p>

<p><strong>Acepta medios digitales:</strong> {{ $actividad->acepta_medios_digitales ? 'Sí' : 'No' }}</p>

@if ($favoritoExistente)
    <!-- Botón para eliminar de favoritos -->
    <form action="{{ route('favoritos.eliminar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post">
        @csrf
        @method('post')
        <button type="submit">Eliminar de favoritos</button>
    </form>
@else
    <!-- Botón para agregar a favoritos -->
    <form action="{{ route('favoritos.agregar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post">
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

<h2> Gestionar actividad en el cronograma </h2>

<form action="{{ route('cronograma.agregar', ['id' => $actividad->id_actividad]) }}" method="post">
    @csrf

    <!-- Dropdown para seleccionar el día de la semana -->
    <label for="dia_semana">Día de la semana:</label>
    <select name="dia_semana" id="dia_semana">
        <option value="1">Lunes</option>
        <option value="2">Martes</option>
        <option value="3">Miércoles</option>
        <option value="4">Jueves</option>
        <option value="5">Viernes</option>
        <option value="6">Sábado</option>
        <option value="7">Domingo</option>
    </select>

    <!-- Dropdown para seleccionar la hora de inicio -->
    <label for="hora_inicio">Hora de inicio:</label>
    <input type="time" name="hora_inicio" id="hora_inicio" required>

    <!-- Dropdown para seleccionar la hora de fin -->
    <label for="hora_fin">Hora de fin:</label>
    <input type="time" name="hora_fin" id="hora_fin" required>

    <!-- Condición para mostrar el botón dependiendo de si la actividad ya está en el cronograma -->

        <button type="submit" formaction="{{ route('cronograma.eliminar', ['id' => $actividad->id_actividad]) }}">Eliminar del cronograma</button>
    
        <button type="submit">Agregar al cronograma</button>

</form>
