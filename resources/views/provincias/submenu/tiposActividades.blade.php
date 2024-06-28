@extends('layouts.main')

@section('title', 'Actividades')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Actividades en<br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-6 mb-6">
        <x-boton-volver url="{{ route('provincias.mostrar') }}">Ir a Provincias</x-boton-volver>
    </div>

    <div class="flex justify-center mt-6 mb-6">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <div class="mx-6 mt-10 mb-6">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach ($tiposActividades as $tipoActividad)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.actividades', ['id' => $provincia->id_provincia, 'idTipoActividad' => $tipoActividad->id_tipo_actividad]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                    <div class="p-4">
                        <h2 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $tipoActividad->nombre_tipo_actividad }}</h2>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</section>

@endsection