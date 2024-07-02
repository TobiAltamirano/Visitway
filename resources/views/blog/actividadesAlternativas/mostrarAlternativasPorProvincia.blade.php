@extends('layouts.main')

@section('title', 'Actividades Alternativas')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Actividades alternativas<br></h1>

    @include('components.lineas-secundarias')

    <div class="bg-white rounded-md shadow-sm p-4 max-w-sm mx-auto mt-12 mb-12">
        <div class="flex justify-center items-center gap-4">
            <a class="roboto-flex azul-principal font-bold links-blog" href="{{ route('alternativas.propias') }}">
                Ver mis actividades
            </a>
            <a class="roboto-flex azul-principal font-bold links-blog" href="{{route('alternativas.crear')}}">
                Crear actividad
            </a>
        </div>
    </div>

    @include('components.toast-notification')

    <!-- Botón desplegar filtros -->
    <div class="flex justify-center mt-8 mb-8">
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
    @include('components.form-filtros-alternativas')

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

    <!-- Modal Imagen Actividad Alternativa -->
    @include('components.modal-imagen-alternativas')

    <section class="w-full py-12 md:py-20 lg:py-12">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 flex justify-center">
                @foreach($actividadesAlternativas as $actividadAlternativa)
                <div class="grid gap-4 rounded-lg border bg-white p-6 shadow-sm transition-all hover:shadow-lg dark:bg-gray-950">
                    <div class="flex items-center gap-4">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800">
                            <!-- Avatar del usuario correspondiente -->
                            <span class="relative flex shrink-0 overflow-hidden rounded-full h-8 w-8">
                                <img class="aspect-square h-full w-full" alt="Avatar - Usuario" src="{{ asset('storage/avatars/' . $actividadAlternativa->usuario->avatar ) }}" />
                            </span>
                        </div>
                        <div class="grid gap-0.5">
                            <h3 class="text-lg font-semibold roboto-flex azul-principal">{{ $actividadAlternativa->titulo}}</h3>
                            <p class="text-sm roboto-flex azul-principal">{{ $actividadAlternativa->descripcion }}</p>
                        </div>
                        <div class="ml-auto flex gap-2">
                            @if($actividadAlternativa->id_usuario === auth()->id())
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent h-10 w-10 hover:text-accent-foreground hover:bg-gray-100 dark:hover:bg-gray-800">
                                <a href="{{ route('alternativas.editar', $actividadAlternativa->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 text-gray-500 dark:text-gray-400 azul-principal">
                                        <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
                                    </svg>
                                </a>
                            </button>
                            @endif
                            @if($actividadAlternativa->id_usuario === auth()->id())
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent h-10 w-10 hover:text-accent-foreground hover:bg-gray-100 dark:hover:bg-gray-800">
                                <a href="{{ route('alternativas.eliminar', $actividadAlternativa->id) }}">
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
                    <div class="grid gap-2">
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M12 11c-3.31 0-6 2.69-6 6v2h12v-2c0-3.31-2.69-6-6-6Z"></path>
                            </svg>
                            <span>{{ $actividadAlternativa->usuario->name}}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>{{ $actividadAlternativa->provincia}}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <line x1="2" x2="5" y1="12" y2="12"></line>
                                <line x1="19" x2="22" y1="12" y2="12"></line>
                                <line x1="12" x2="12" y1="2" y2="5"></line>
                                <line x1="12" x2="12" y1="19" y2="22"></line>
                                <circle cx="12" cy="12" r="7"></circle>
                            </svg>
                            <span>{{ $actividadAlternativa->localidad}}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>{{ $actividadAlternativa->direccion}}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                <path d="M3 10h18"></path>
                            </svg>
                            <span>{{ $actividadAlternativa->horarios}}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                            <span>{{ $actividadAlternativa->costo}}</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        @if($actividadAlternativa->imagen1)
                        <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Actividad Imagen 1" class="rounded-lg object-cover w-full h-full modal-image" style="aspect-ratio: 300 / 200; object-fit: cover; cursor: pointer;" data-twe-toggle="tooltip" title="Ver imagen" />
                        @else
                        <img src="{{ asset('default-image-path.jpg') }}" alt="Default Image" class="rounded-lg object-cover w-full h-full" style="aspect-ratio: 300 / 200; object-fit: cover;" />
                        @endif

                        @if($actividadAlternativa->imagen2)
                        <img src="{{ asset('storage/' . $actividadAlternativa->imagen2) }}" alt="Actividad Imagen 2" class="rounded-lg object-cover w-full h-full modal-image" style="aspect-ratio: 300 / 200; object-fit: cover; cursor: pointer;" data-twe-toggle="tooltip" title="Ver imagen" />
                        @else
                        <!-- No se carga ninguna imagen -->
                        @endif

                        @if($actividadAlternativa->imagen3)
                        <img src="{{ asset('storage/' . $actividadAlternativa->imagen3) }}" alt="Actividad Imagen 3" class="rounded-lg object-cover w-full h-full modal-image" style="aspect-ratio: 300 / 200; object-fit: cover; cursor: pointer;" data-twe-toggle="tooltip" title="Ver imagen" />
                        @else
                        <!-- No se carga ninguna imagen -->
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{ $actividadesAlternativas->links('components.pagination') }}

</section>

@endsection