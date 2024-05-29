@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Introducción <br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    <div class="flex justify-center mt-12 mb-8">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <div class="contenedor-lineas">
        <div class="primer-linea-superior"></div>
        <div class="segunda-linea-superior"></div>
    </div>

    <h2>Descripción</h2>
    <p>{{ $provincia->descripcion_provincia }}</p>

    <h2>Flora y Fauna</h2>
    <p>{{ $provincia->flora_fauna_provincia }}</p>
</section>

@endsection