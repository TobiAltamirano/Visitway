@extends('layouts.main')

@section('title', 'Gastronomía')

@section('content')
<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Gastronomia en<br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-12 mb-12">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <div class="bg-white dark:bg-gray-950 rounded-lg shadow-sm max-w-4xl mx-auto p-6 space-y-6">
        <div class="flex items-center justify-between">
            <p class="text-lg roboto-flex font-bold azul-principal">Filtros activos:</p>
            <p class="rojo-principal roboto-flex hover:font-bold inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"><a href="{{ url()->previous() }}">
                    Eliminar filtros
                </a>
            </p>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($filtros as $nombre => $activo)
            @if($activo)
            <span class="span-filtros rounded-md px-3 py-2 flex items-center justify-between">
                <span class="text-sm font-medium">
                    @switch($nombre)
                    @case('apto_veganos')
                    Opciones Veganas
                    @break
                    @case('apto_vegetarianos')
                    Opciones vegetarianas
                    @break
                    @case('apto_intolerantes_lactosa')
                    Opciones Intolerantes Lactosa
                    @break
                    @case('apto_sin_tacc')
                    Opciones sin TACC
                    @break
                    @default
                    {{ ucfirst(str_replace('_', ' ', $nombre)) }}
                    @endswitch
                </span>
            </span>
            @endif
            @endforeach
        </div>
    </div>

    <div class="mx-6 mt-14 mb-8">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach ($localesGastronomicos as $localGastronomico)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.detalleGastronomia', ['id' => $provincia->id_provincia, 'gastronomiaId' => $localGastronomico->id_local_gastronomico, 'idTipoGastronomia' => $localGastronomico->tipo_gastronomia_id]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="{{ $localGastronomico->nombre_local_gastronomico }}" />
                    <div class="p-4">
                        <h2 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $localGastronomico->nombre_local_gastronomico }}</h2>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</section>

@endsection