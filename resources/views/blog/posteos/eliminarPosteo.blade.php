@extends('layouts.main')

@section('title', 'Eliminar Posteo')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Eliminar posteo<br><span class="azul-principal">"{{$posteo->titulo}}"</span></h1>

    @include('components.lineas-secundarias')

    @if($errors->any())
    <div class="mb-3 text-center roboto-flex rojo-principal">Ha ocurrido un error al eliminar el posteo. Porfavor, intentalo de nuevo.</div>
    @endif

    <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base rojo-principal roboto-flex mt-12">Estas a punto de eliminar este posteo. Esta acción no tiene vuelta atrás. <br> Por favor, asegúrate de que deseas continuar antes de proceder. </p>

    <section class="w-full py-12 md:py-20 lg:py-12">
        <div class="container mx-auto px-4 md:px-6 flex justify-center">
            <div class="group overflow-hidden rounded-lg bg-white shadow-sm transition-all hover:shadow-md dark:bg-gray-950 md:max-w-md lg:max-w-xs">
                <div class="relative aspect-[4/3] overflow-hidden">
                    @if($posteo->imagen !== null)
                    <img src="<?= url('storage/' . $posteo->imagen); ?>" alt="Imagen Posteo - {{$posteo->titulo }}">
                    @else
                    <img class="rounded-t-lg" src="<?= url('storage/imagenes/default.jpg'); ?>" alt="Imagen por defecto - Visitway" />
                    @endif
                </div>
                <div class="p-4">
                    <div class="flex items-center gap-3">
                        <!-- Avatar del usuario correspondiente -->
                        <span class="relative flex shrink-0 overflow-hidden rounded-full h-8 w-8">
                            <img class="aspect-square h-full w-full" alt="Avatar - Usuario" src="{{ asset('storage/avatars/' . $posteo->usuario->avatar ) }}" />
                        </span>
                        <div>
                            <div class="font-medium roboto-flex rojo-principal">{{ $posteo->usuario->name }}</div>
                            <div class="text-xs azul-principal roboto-flex">{{ $posteo->created_at }}</div>
                        </div>
                    </div>
                    <p class="roboto-flex rojo-secundario mt-4 line-clamp-3 font-bold">
                        {{ $posteo->provincia }}
                    </p>
                    <h3 class="text-xl font-semibold roboto-flex azul-principal">{{ $posteo->titulo }}</h3>
                    <p class="mt-2 line-clamp-3 roboto-flex azul-principal">
                        {{ $posteo->contenido }}
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4 gap-4">
            <div>
                <form action="{{ route('posteos.eliminar.procesos', ['id' => $posteo->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button class="inline-flex h-10 sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 boton-eliminar roboto-flex" type="submit" data-id="27">Eliminar</button>
                </form>
            </div>
            <a href="{{ route('posteos.mostrar') }}" class="inline-flex h-10 sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                Cancelar
            </a>
        </div>
    </section>

</section>

@endsection