<?php

use App\Models\Alojamiento;

/** @var Alojamiento $alojamiento */

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

<h2 class="text-control">Control de Alojamientos</h2>

<button><a href="{{route('administrador.alojamientos.crear')}}">Cargar alojamiento</a></button>

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
            @foreach($alojamientos as $alojamiento)
            <tr>
                <td>{{ $alojamiento->id_alojamiento }}</td>
                <td>{{ $alojamiento->nombre_alojamiento }}</td>
                <td>{{ $alojamiento->provincia->nombre_provincia }}</td>
                <td class="buttons-cta">
                    <form action="{{ route('administrador.alojamientos.editar', $alojamiento->id_alojamiento) }}" method="GET">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success">Modificar</button>
                    </form>
                    
                    <form action="{{ route('administrador.alojamientos.eliminar', $alojamiento->id_alojamiento) }}" method="get">
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


