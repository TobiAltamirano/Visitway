@extends('layouts.main')

@section('title', 'Favoritos')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Sitios turísticos favoritos</h1>

    @include('components.lineas-secundarias')

    @include('components.toast-notification')

    @if ($alojamientosFavoritos->isEmpty() && $actividadesFavoritas->isEmpty() && $localesGastronomicosFavoritos->isEmpty())
    <p class="text-center text-lg mt-10 pl-4 pr-4 rojo-principal poppins-bold">No tienes sitios turísticos favoritos</p>
    <div class="flex flex-col items-center justify-center mt-6">
        <a class="inline-flex h-10 sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" href="{{ route('provincias.mostrar') }}">
            Explorar
        </a>
    </div>
    @else

    @if ($alojamientosFavoritos->isNotEmpty())
    <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 azul-principal poppins-semibold">Alojamientos favoritos:</h2>
    <div class="mx-6 mt-10 flex flex-wrap justify-center gap-8">
        @foreach($alojamientosFavoritos as $alojamiento)
        <div class="tarjeta rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a href="{{ route('provincia.detalleAlojamiento', ['id' => $alojamiento->provincia->id_provincia, 'alojamientoId' => $alojamiento->id_alojamiento, 'idTipoAlojamiento' => $alojamiento->tipo_alojamiento_id]) }}" class="block">
                @if($alojamiento->imagen_alojamiento)
                <img class="rounded-t-lg" src="<?= url('storage/imagenes/alojamientos/' . $alojamiento->imagen_alojamiento); ?>" alt="{{ $alojamiento->nombre_alojamiento }}" />
                @else
                <img class="rounded-t-lg" src="<?= url('storage/imagenes/default.jpg'); ?>" alt="Imagen por defecto - Visitway" />
                @endif
                <div class="p-4">
                    <h4 class="rojo-principal poppins-medium text-center text-base">{{ $alojamiento->provincia->nombre_provincia }}</h4>
                    <h3 class="text-2xl font-medium leading-tight text-center azul-principal poppins-medium">
                        {{ $alojamiento->nombre_alojamiento }}
                    </h3>
                </div>
            </a>
            <form action="{{ route('favoritos.eliminar', ['id' => $alojamiento->id_alojamiento, 'tipo' => 'alojamiento']) }}" method="post" class="text-center mb-4">
                @csrf
                @method('post')
                <button type="submit" class="text-sm roboto-flex rojo-principal hover:font-bold">Eliminar de favoritos</button>
            </form>
        </div>
        @endforeach
    </div>
    @endif

    @if ($actividadesFavoritas->isNotEmpty())
    <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 azul-principal poppins-semibold">Actividades favoritas:</h2>
    <div class="mx-6 mt-10 flex flex-wrap justify-center gap-8">
        @foreach($actividadesFavoritas as $actividad)
        <div class="tarjeta rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a href="{{ route('provincia.detalleActividad', ['id' => $actividad->provincia->id_provincia, 'actividadId' => $actividad->id_actividad, 'idTipoActividad' => $actividad->tipo_actividad_id]) }}" class="block">
                @if($actividad->imagen_actividad)
                <img class="rounded-t-lg" src="<?= url('storage/imagenes/actividades/' . $actividad->imagen_actividad); ?>" alt="{{ $actividad->nombre_actividad }}" />
                @else
                <img class="rounded-t-lg" src="<?= url('storage/imagenes/default.jpg'); ?>" alt="Imagen por defecto - Visitway" />
                @endif
                <div class="p-4">
                    <h4 class="rojo-principal poppins-medium text-center text-base">{{ $actividad->provincia->nombre_provincia }}</h4>
                    <h3 class="text-2xl font-medium leading-tight text-center azul-principal poppins-medium">
                        {{ $actividad->nombre_actividad }}
                    </h3>
                </div>
            </a>
            <form action="{{ route('favoritos.eliminar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post" class="text-center mb-4">
                @csrf
                @method('post')
                <button type="submit" class="text-sm roboto-flex rojo-principal hover:font-bold">Eliminar de favoritos</button>
            </form>
        </div>
        @endforeach
    </div>
    @endif

    @if ($localesGastronomicosFavoritos->isNotEmpty())
    <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 azul-principal poppins-semibold">Locales gastronómicos favoritos:</h2>
    <div class="mx-6 mt-10 flex flex-wrap justify-center gap-8">
        @foreach($localesGastronomicosFavoritos as $localGastronomico)
        <div class="tarjeta rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a href="{{ route('provincia.detalleGastronomia', ['id' => $localGastronomico->provincia->id_provincia, 'gastronomiaId' => $localGastronomico->id_local_gastronomico, 'idTipoGastronomia' => $localGastronomico->tipo_gastronomia_id]) }}" class="block">
                @if($localGastronomico->imagen_local_gastronomico)
                <img class="rounded-t-lg" src="<?= url('storage/imagenes/gastronomia/' . $localGastronomico->imagen_local_gastronomico); ?>" alt="{{ $localGastronomico->nombre_local_gastronomico }}" />
                @else
                <img class="rounded-t-lg" src="<?= url('storage/imagenes/default.jpg'); ?>" alt="Imagen por defecto - Visitway" />
                @endif
                <div class="p-4">
                    <h4 class="rojo-principal poppins-medium text-center text-base">{{ $localGastronomico->provincia->nombre_provincia }}</h4>
                    <h3 class="text-2xl font-medium leading-tight text-center azul-principal poppins-medium">
                        {{ $localGastronomico->nombre_local_gastronomico }}
                    </h3>
                </div>
            </a>
            <form action="{{ route('favoritos.eliminar', ['id' => $localGastronomico->id_local_gastronomico, 'tipo' => 'gastronomia']) }}" method="post" class="text-center mb-4">
                @csrf
                @method('post')
                <button type="submit" class="text-sm roboto-flex rojo-principal hover:font-bold">Eliminar de favoritos</button>
            </form>
        </div>
        @endforeach
    </div>
    @endif
    @endif

</section>

@endsection