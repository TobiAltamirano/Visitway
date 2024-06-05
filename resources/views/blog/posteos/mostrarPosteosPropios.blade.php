@extends('layouts.main')

@section('title', 'Posteos Propios')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Mis posteos<br></h1>

    @include('components.lineas-secundarias')

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

    <div class="flex justify-center flex-col mt-12 mb-12 gap-4">
        <div>
            <a href="{{route('posteos.mostrar')}}" class="roboto-flex rojo-principal flex justify-center hover:font-bold">Volver</a></button>
        </div>
        <div>
            <a href="{{route('posteos.crear')}}" class="roboto-flex azul-principal flex justify-center hover:font-bold">Crear posteo</a></button>
        </div>
    </div>

    @if($posteos->isEmpty())
    <!-- Ilustración -->
    <p class="text-center">No hay posteos disponibles.</p>
    @else
    <div class="container mx-auto px-4">
        <div class="grid gap-6 lg:grid-cols-3">
            @foreach($posteos as $posteo)
            <div class="flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white md:max-w-xl md:flex-row">
                @if($posteo->imagen1 !== null)
                <img src="{{ asset('storage/' . $posteo->imagen1) }}" alt="Imagen Noticia - {{$posteo->titulo }}" class="card-img-top">
                <!-- 408x612 -->
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
            @endforeach
        </div>
    </div>
    @endif

</section>

@endsection