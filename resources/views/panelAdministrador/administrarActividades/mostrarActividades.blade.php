<?php

use App\Models\Actividad;

/** @var Actividad $actividad */

?>

@if (session('status.message'))
    <div class="alert alert-success">
        {{ session('status.message') }}
    </div>
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

<h1 class="h1-panel">Panel Administrador</h1>

<h2 class="text-control">Control de Actividades</h2>

<button><a href="{{ route('administrador.actividades.crear') }}">Cargar actividad</a></button>

<div class="table-responsive">
    <table class="table table-dark table-striped text-control">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Provincia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actividades as $actividad)
            <tr>
                <td>{{ $actividad->id_actividad }}</td>
                <td>{{ $actividad->nombre_actividad }}</td>
                <td>{{ $actividad->provincia->nombre_provincia }}</td>
                <td class="buttons-cta">
                    <form action="{{ route('administrador.actividades.editar', $actividad->id_actividad) }}" method="GET">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success">Modificar</button>
                    </form>
                    
                    <form action="{{ route('administrador.actividades.eliminar', $actividad->id_actividad) }}" method="GET">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
