@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Mis actividades alternativas<br></h1>

    <div class="contenedor-lineas">
        <div class="primer-linea-superior"></div>
        <div class="segunda-linea-superior"></div>
    </div>

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

    <div class="flex justify-center gap-12">
        <div>
            <a href="{{route('alternativas.crear')}}" class="roboto-flex azul-principal flex justify-center mt-12 mb-12 hover:font-bold">Crear alt</a></button>
        </div>
    </div>

    <div class="container mx-auto px-4">
        <div class="grid gap-6 lg:grid-cols-3">
            @foreach($actividadesAlternativas as $actividadAlternativa)
            <div class="flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white md:max-w-xl md:flex-row">
                @if($actividadAlternativa->imagen1 !== null)
                <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Imagen Noticia - {{$actividadAlternativa->titulo }}" class="card-img-top">
                @else
                No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
                @endif
                <div class="flex flex-col justify-start p-6">
                    <p><strong>Usuario:</strong>{{ $actividadAlternativa->usuario->name }}</p>
                    <h5 class="mb-2 text-xl font-medium">{{ $actividadAlternativa->titulo }}</h5>
                    <p class="mb-4 text-base">
                        {{ $actividadAlternativa->descripcion }}
                    </p>
                    <p class="text-xs text-surface/75 dark:text-neutral-300">
                        {{ $actividadAlternativa->provincia }}
                    </p>
                    <div class="mt-4 flex justify-center gap-4">
                        @if($actividadAlternativa->id_usuario === auth()->id())
                        <button><a href="{{ route('alternativas.editar', $actividadAlternativa->id) }}">Editar posteo</a></button>
                        @endif

                        @if($actividadAlternativa->id_usuario === auth()->id())
                        <button><a href="{{ route('alternativas.eliminar', $actividadAlternativa->id) }}">Eliminar posteo</a></button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection