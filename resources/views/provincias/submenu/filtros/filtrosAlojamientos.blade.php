@extends('layouts.main')

@section('title', 'Alojamientos')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Alojamientos en<br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-12 mb-12">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <!-- Filtros activos -->
    <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base azul-principal roboto-flex">Filtros activos:</p>
    <ul class="mt-4 flex justify-center flex-col text-center gap-2 roboto-flex azul-principal">
        @foreach($filtros as $nombre => $activo)
        @if($activo)
        <li>
            @switch($nombre)
            @case('acepta_mascotas')
            Acepta Mascotas
            @break
            @case('tiene_descuentos_ofertas')
            Ofrece Promociones
            @break
            @case('es_accesible')
            Movilidad Reducida
            @break
            @case('es_gratis')
            Actividades Gratuitas 
            @break
            @default
            {{ ucfirst(str_replace('_', ' ', $nombre)) }}
            @endswitch
        </li>
        @endif
        @endforeach
    </ul>
    <!-- Eliminar filtros -->
    <p class="text-center mt-4 roboto-flex rojo-principal hover:font-bold"><a href="{{ url()->previous() }}">Eliminar filtros</a></p>

    <div class="mx-6 mt-14 mb-8">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach ($alojamientos as $alojamiento)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.detalleAlojamiento', ['id' => $provincia->id_provincia, 'alojamientoId' => $alojamiento->id_alojamiento]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                    <div class="p-4">
                        <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $alojamiento->nombre_alojamiento }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</section>

@endsection