@extends('layouts.main')

@section('title', 'Eliminar Posteo')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Editar posteo<br><span class="azul-principal">"{{$posteo->titulo}}"</span></h1>

    @include('components.lineas-secundarias')

    <div class="mt-12">
        <div>
            <a href="{{ route('posteos.mostrar') }}" class="roboto-flex rojo-principal flex justify-center hover:font-bold">Cancelar</a>
        </div>
    </div>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <div class="container mx-auto px-4 mt-14 mb-14">
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
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <form action="{{ route('posteos.eliminar.procesos', ['id' => $posteo->id]) }}" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="roboto-flex rojo-principal flex justify-center hover:font-bold">Eliminar</button>
        </form>
    </div>
</section>

@endsection