@extends('layouts.main')

@section('title', 'Actividades')

@section('content')
<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Gastronomia en<br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    <div class="flex justify-center mt-12 mb-8">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <div class="contenedor-lineas">
        <div class="primer-linea-superior"></div>
        <div class="segunda-linea-superior"></div>
    </div>

    <!-- Eliminar filtros -->

    <div class="mx-6 mt-10">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach ($localesGastronomicos as $localGastronomico)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.detalleGastronomia', ['id' => $provincia->id_provincia, 'gastronomiaId' => $localGastronomico->id_local_gastronomico]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                    <div class="p-4">
                        <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $localGastronomico->nombre_local_gastronomico }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
</section>

@endsection