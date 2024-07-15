@extends('layouts.main')

@section('title', 'Eliminar Actividad Alternativa')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Eliminar Actividad Alternativa<br><span class="azul-principal">"{{$actividadAlternativa->titulo}}"</span></h1>

    @include('components.lineas-secundarias')

    <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base rojo-principal roboto-flex mt-12">Estas a punto de eliminar esta actividad. Esta acción no tiene vuelta atrás. <br> Por favor, asegúrate de que deseas continuar antes de proceder. </p>

    @if($errors->any())
    <div class="mb-3 text-center roboto-flex rojo-principal">Ha ocurrido un error al eliminar la actividad. Porfavor, intentalo de nuevo.</div>
    @endif

    <!-- Modal -->
    @include('components.modal-imagen-alternativas')

    <section class="w-full py-12 md:py-20 lg:py-12">
        <div class="container mx-auto px-4 md:px-6 flex justify-center">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 lg:grid-cols-1">
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
                            <span>{{ $actividadAlternativa->provincia }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <line x1="2" x2="5" y1="12" y2="12"></line>
                                <line x1="19" x2="22" y1="12" y2="12"></line>
                                <line x1="12" x2="12" y1="2" y2="5"></line>
                                <line x1="12" x2="12" y1="19" y2="22"></line>
                                <circle cx="12" cy="12" r="7"></circle>
                            </svg>
                            <span>{{ $actividadAlternativa->localidad }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>{{ $actividadAlternativa->direccion }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <path d="M8 2v4"></path>
                                <path d="M16 2v4"></path>
                                <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                <path d="M3 10h18"></path>
                            </svg>
                            <span>{{ $actividadAlternativa->horarios }}</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                <line x1="12" x2="12" y1="2" y2="22"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                            <span>{{ $actividadAlternativa->costo }}</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        @if($actividadAlternativa->imagen1)
                        <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Activity Image 1" class="rounded-lg object-cover w-full h-full modal-image" style="aspect-ratio: 300 / 200; object-fit: cover; cursor: pointer;" data-twe-toggle="tooltip" title="Ver imagen" />
                        @else
                        <img src="{{ asset('default-image-path.jpg') }}" alt="Default Image" class="rounded-lg object-cover w-full h-full" style="aspect-ratio: 300 / 200; object-fit: cover;" />
                        @endif

                        @if($actividadAlternativa->imagen2)
                        <img src="{{ asset('storage/' . $actividadAlternativa->imagen2) }}" alt="Activity Image 2" class="rounded-lg object-cover w-full h-full modal-image" style="aspect-ratio: 300 / 200; object-fit: cover; cursor: pointer;" data-twe-toggle="tooltip" title="Ver imagen" />
                        @else
                        <!-- No se carga ninguna imagen -->
                        @endif

                        @if($actividadAlternativa->imagen3)
                        <img src="{{ asset('storage/' . $actividadAlternativa->imagen3) }}" alt="Activity Image 3" class="rounded-lg object-cover w-full h-full modal-image" style="aspect-ratio: 300 / 200; object-fit: cover; cursor: pointer;" data-twe-toggle="tooltip" title="Ver imagen" />
                        @else
                        <!-- No se carga ninguna imagen -->
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4 gap-4">
            <div>
                <form action="{{ route('alternativas.eliminar.proceso', ['id' => $actividadAlternativa->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button class="inline-flex h-10 sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 boton-eliminar roboto-flex" type="submit" data-id="27">Eliminar</button>
                </form>
            </div>
            <a href="{{ route('alternativas.mostrar') }}" class="inline-flex h-10 sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                Cancelar
            </a>
        </div>
    </section>

</section>

@endsection