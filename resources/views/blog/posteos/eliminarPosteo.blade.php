@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Editar posteo<br><span class="azul-principal">"{{$posteo->titulo}}"</span></h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <div class="contenedor-lineas">
        <div class="primer-linea-superior"></div>
        <div class="segunda-linea-superior"></div>
    </div>

    <div class="container mx-auto px-4">
        <div class="grid gap-6 lg:grid-cols-3">
            <div class="flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white md:max-w-xl md:flex-row">
                @if($posteo->imagen1 !== null)
                <img src="{{ asset('storage/' . $posteo->imagen1) }}" alt="Imagen Noticia - {{$posteo->titulo }}" class="card-img-top">
                @else
                No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
                @endif
                <div class="flex flex-col justify-start p-6">
                    <p><strong>Usuario:</strong> {{ $posteo->usuario->name }}</p>
                    <h5 class="mb-2 text-xl font-medium">{{ $posteo->titulo }}</h5>
                    <p class="mb-4 text-base">
                        {{ $posteo->contenido }}
                    </p>
                    <p class="text-xs text-surface/75 dark:text-neutral-300">
                        {{ $posteo->provincia }}
                    </p>
                    <div class="mt-4 flex justify-center gap-4">
                        @if($posteo->id_usuario === auth()->id())
                        <button><a href="{{ route('posteos.editar', $posteo->id) }}">Editar posteo</a></button>
                        @endif

                        @if($posteo->id_usuario === auth()->id())
                        <button><a href="{{ route('posteos.eliminar', $posteo->id) }}">Eliminar posteo</a></button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('posteos.eliminar.procesos', ['id' => $posteo->id]) }}" method="POST">
        @csrf
        @method('POST')
        <button type="submit">Eliminar</button>
    </form>

    <a href="{{ route('posteos.mostrar') }}">Cancelar</a>
</section>

@endsection