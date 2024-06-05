@extends('layouts.main')

@section('title', 'Introducción')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Introducción <br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-12 mb-12">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <h2>Descripción</h2>
    <p>{{ $provincia->descripcion_provincia }}</p>

    <h2>Flora y Fauna</h2>
    <p>{{ $provincia->flora_fauna_provincia }}</p>
</section>

@endsection