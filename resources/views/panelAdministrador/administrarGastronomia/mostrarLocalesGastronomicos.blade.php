<?php

use App\Models\LocalGastronomico;

/** @var LocalGastronomico $localGastronomico */

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

<h2 class="text-control">Control de Locales Gastronómicos</h2>

<button><a href="{{ route('administrador.locales_gastronomicos.crear') }}">Cargar local gastronómico</a></button>

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
            @foreach($localesGastronomicos as $localGastronomico)
            <tr>
                <td>{{ $localGastronomico->id_local_gastronomico }}</td>
                <td>{{ $localGastronomico->nombre_local_gastronomico }}</td>
                <td>{{ $localGastronomico->provincia->nombre_provincia }}</td>
                <td class="buttons-cta">
                    <form action="{{ route('administrador.locales_gastronomicos.editar', $localGastronomico->id_local_gastronomico) }}" method="GET">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success">Modificar</button>
                    </form>
                    
                    <form action="{{ route('administrador.locales_gastronomicos.eliminar', $localGastronomico->id_local_gastronomico) }}" method="get">
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
