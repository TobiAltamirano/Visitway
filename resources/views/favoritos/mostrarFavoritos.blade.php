@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Sitios turísticos favoritos</h1>

    <div class="contenedor-lineas">
        <div class="primer-linea-superior"></div>
        <div class="segunda-linea-superior"></div>
    </div>

    <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 azul-principal poppins-semibold">Alojamientos favoritos:</h2>

    @if ($alojamientosFavoritos->isEmpty())
    <p class="text-center rojo-principal mb-12">No tienes ningún alojamiento guardado como favorito.</p>
    @else
    <div class="mx-6 mt-10">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach($alojamientosFavoritos as $alojamiento)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.detalleAlojamiento', ['id' => $alojamiento->provincia->id_provincia, 'alojamientoId' => $alojamiento->id_alojamiento]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                    <div class="p-4">
                        <h6 class="text-center mb-2">{{ $alojamiento->provincia->nombre_provincia }}</h6>
                        <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $alojamiento->nombre_alojamiento }}</h5>
                    </div>
                    </a>
                        <form action="{{ route('favoritos.eliminar', ['id' => $alojamiento->id_alojamiento, 'tipo' => 'alojamiento']) }}" method="post">
                            @csrf
                            @method('post')
                            <button type="submit">Eliminar de favoritos</button>
                        </form>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 azul-principal poppins-semibold">Actividades favoritas:</h2>

    @if ($actividadesFavoritas->isEmpty())
    <p class="text-center rojo-principal mb-12">No tienes ningún alojamiento guardado como favorito.</p>
    @else
    <div class="mx-6 mt-10">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach($actividadesFavoritas as $actividad)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.detalleActividad', ['id' => $actividad->provincia->id_provincia, 'actividadId' => $actividad->id_actividad]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                    <div class="p-4">
                        <h6 class="text-center mb-2">{{ $actividad->provincia->nombre_provincia }}</h6>
                        <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $actividad->nombre_actividad }}</h5>
                    </div>
                </a>
                <form action="{{ route('favoritos.eliminar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post">
                    @csrf
                    @method('post')
                    <button type="submit">Eliminar de favoritos</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 azul-principal poppins-semibold">Locales gastronómicos favoritos:</h2>

    @if ($localesGastronomicosFavoritos->isEmpty())
    <p class="text-center rojo-principal mb-12">No tienes ningún alojamiento guardado como favorito.</p>
    @else
    <div class="mx-6 mt-10">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach($localesGastronomicosFavoritos as $localGastronomico)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.detalleGastronomia', ['id' => $localGastronomico->provincia->id_provincia, 'gastronomiaId' => $localGastronomico->id_local_gastronomico]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                    <div class="p-4">
                        <h6 class="text-center mb-2">{{ $localGastronomico->provincia->nombre_provincia }}</h6>
                        <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $localGastronomico->nombre_local_gastronomico }}</h5>
                    </div>
                </a>
                <form action="{{ route('favoritos.eliminar', ['id' => $localGastronomico->id_local_gastronomico, 'tipo' => 'gastronomia']) }}" method="post">
                    @csrf
                    @method('post')
                    <button type="submit">Eliminar de favoritos</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
    @endif

</section>

@endsection