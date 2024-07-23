@extends('layouts.main')

@section('title', 'Posteos')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Posteos<br></h1>

    @include('components.lineas-secundarias')

    <div class="bg-white rounded-md shadow-sm p-4 max-w-sm mx-auto mt-12 mb-12">
        <div class="flex justify-center items-center gap-4">
            <a class="roboto-flex azul-principal font-bold links-blog" href="{{ route('posteos.propios') }}">
                Ver mis posteos
            </a>
            <a class="roboto-flex azul-principal font-bold links-blog" href="{{route('posteos.crear')}}">
                Crear posteo
            </a>
        </div>
    </div>

    @include('components.toast-notification')

    <!-- Botón desplegar filtros -->
    <div class="flex justify-center mb-12">
        <button id="mostrarFormulario" type="button" class="filtros-boton poppins-semibold inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:active:shadow-dark-strong">
            Desplegar filtros
        </button>
    </div>

    <!-- Filtros activos -->
    <div class="bg-white dark:bg-gray-950 rounded-lg shadow-sm max-w-4xl mx-auto p-6 space-y-6 ">
        <div class="flex items-center justify-between">
            <p class="text-lg roboto-flex font-bold azul-principal">Filtros activos:</p>
            <p class="rojo-principal roboto-flex hover:font-bold inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"><a href="{{ url()->previous() }}">
                    Eliminar filtros
                </a>
            </p>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($provinciasSeleccionadas as $provincia)
            <span class="span-filtros rounded-md px-3 py-2 flex items-center justify-between">
                <span class="text-sm font-medium">
                    {{ $provincia }}
                </span>
            </span>
            @endforeach
        </div>
    </div>

    <!-- Formulario oculto -->
    @include('components.form-filtros-posteos')

    <script>
        // Obtenemos referencias a los elementos del DOM
        const botonMostrarFormulario = document.getElementById('mostrarFormulario');
        const formularioContainer = document.getElementById('formularioContainer');

        // Agregamos un event listener al botón para mostrar u ocultar el formulario
        botonMostrarFormulario.addEventListener('click', function() {
            // Alternamos la clase 'hidden' en el contenedor del formulario para mostrarlo u ocultarlo
            formularioContainer.classList.toggle('hidden');

            // Cambiamos el texto del botón dinámicamente
            if (formularioContainer.classList.contains('hidden')) {
                botonMostrarFormulario.textContent = 'Desplegar Filtros';
            } else {
                botonMostrarFormulario.textContent = 'Cerrar Filtros';
            }
        });
    </script>

    <section class="w-full py-12 md:py-20 lg:py-12">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 justify-items-center">
                @foreach($posteos as $posteo)
                <div class="group overflow-hidden rounded-lg bg-white shadow-sm transition-all hover:shadow-md dark:bg-gray-950">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        @if($posteo->imagen !== null)
                        <img src="<?= url('storage/' . $posteo->imagen); ?>" alt="Imagen Posteo - {{$posteo->titulo }}" width="320" height="240" class="h-full w-full object-cover transition-all" style="aspect-ratio: 320 / 240; object-fit: cover;">
                        @else
                        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
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
                        <div class="flex items-center gap-2 mt-4">
                            @if($posteo->id_usuario === auth()->id())
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent h-10 w-10 hover:text-accent-foreground hover:bg-gray-100 dark:hover:bg-gray-800">
                                <a href="{{ route('posteos.editar', $posteo->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-gray-500 dark:text-gray-400 azul-principal">
                                        <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
                                    </svg>
                                </a>
                            </button>
                            @endif

                            @if($posteo->id_usuario === auth()->id())
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent h-10 w-10 hover:text-accent-foreground hover:bg-gray-100 dark:hover:bg-gray-800">
                                <a href="{{ route('posteos.eliminar', $posteo->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 rojo-principal">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    </svg>
                                </a>
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{ $posteos->links('components.pagination') }}

</section>

@endsection