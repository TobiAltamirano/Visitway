@extends('layouts.main')

@section('title', 'Panel Administrador - Eliminar Actividad')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Eliminar actividad:<span class="span-h1-provincias"><br>{{ $actividad->nombre_actividad }}</span></h1>

    @include('components.lineas-secundarias')

    @if($errors->any())
    <div class="mb-3 text-center roboto-flex rojo-principal">Ha ocurrido un error al tratar de eliminar este posteo. Porfavor, intenta de nuevo mas tarde</div>
    @endif

    <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base rojo-principal roboto-flex mt-12">Estas a punto de eliminar esta actividad. Esta acción no tiene vuelta atrás. <br> Por favor, asegúrate de que deseas continuar antes de proceder. </p>

    <div class="flex justify-center mt-8 gap-4">
        <div>
            <form action="{{ route('administrador.actividades.eliminar.procesar', ['id' => $actividad->id_actividad]) }}" method="POST">
                @csrf
                @method('POST')
                <button class="inline-flex h-10 sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 boton-eliminar roboto-flex" type="submit" data-id="27">Eliminar actividad</button>
            </form>
        </div>
        <a href="{{ route('administrador.actividades') }}" class="inline-flex h-10 sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
            Cancelar
        </a>
    </div>

    <!-- Título e imagen -->
    <section class="w-full py-12 flex justify-center">
        <div class="container grid items-center gap-6 px-4 md:px-6 lg:grid-cols-2 lg:gap-10">
            @if($actividad->imagen_actividad !== null)
            <img src="https://www.cronista.com/files/image/393/393517/617aeb7754300.jpg" width="550" height="400" alt="{{ $actividad->nombre_actividad }}" class="mx-auto aspect-[9/6] overflow-hidden rounded-xl object-cover object-center sm:w-full" />
            <!-- <img src="{{ asset('storage/' . $actividad->imagen_actividad) }}" alt="Imagen Noticia - {{$actividad->nombre_actividad }}" class="card-img-top"> -->
            @else
            No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
            @endif
            <div class="space-y-4 text-center lg:text-left">
                <div class="space-y-2">
                    <h2 class="text-3xl poppins-bold rojo-principal md:text-4xl/tight">{{ $actividad->nombre_actividad }}</h2>
                    <p class="max-w-[600px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed roboto-flex azul-principal">
                        {{ $actividad->descripcion_actividad }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Información -->
    <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col items-center gap-2 p-4 rounded-lg shadow-lg bg-background hover:scale-105 transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary rojo-principal">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <h3 class="text-lg roboto-flex font-bold azul-principal">Ubicación</h3>
                <p class="text-muted-foreground text-center roboto-flex azul-principal">{{ $actividad->ubicacion_actividad }}</p>
            </div>
            <div class="flex flex-col items-center gap-2 p-4 rounded-lg shadow-lg bg-background hover:scale-105 transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary rojo-principal">
                    <path d="M8 2v4"></path>
                    <path d="M16 2v4"></path>
                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                    <path d="M3 10h18"></path>
                </svg>
                <h3 class="text-lg roboto-flex font-bold azul-principal">Horarios</h3>
                <p class="text-muted-foreground text-center roboto-flex azul-principal">{{ $actividad->horarios_actividad }}</p>
            </div>
            <div class="flex flex-col items-center gap-2 p-4 rounded-lg shadow-lg bg-background hover:scale-105 transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary rojo-principal">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                <h3 class="text-lg roboto-flex font-bold azul-principal">Contacto</h3>
                <p class="text-muted-foreground text-center roboto-flex azul-principal">{{ $actividad->contacto_actividad }}</p>
            </div>
            <div class="flex flex-col items-center gap-2 p-4 rounded-lg shadow-lg bg-background hover:scale-105 transition-transform duration-300">
                <svg data-id="15" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary rojo-principal">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    <path d="M2 12h20"></path>
                </svg>
                <h3 class="text-lg roboto-flex font-bold azul-principal">Sitio web</h3>
                <p class="text-muted-foreground text-center roboto-flex azul-principal"><a href="{{ $actividad->url_sitio_web_actividad }}" target="_blank">{{ $actividad->url_sitio_web_actividad }}</a></p>
            </div>
        </div>
    </div>

    <!-- Información adicional -->
    <article class="mt-14 mb-12">
        <h2 class="text-3xl title-font mb-4 text-gray-900 rojo-principal poppins-semibold flex justify-center">Información adicional</h2>

        <div class="flex justify-center mt-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 p-4 bg-card-detalles rounded-lg shadow-lg w-full max-w-7xl">
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Duración de {{ $actividad->duracion_actividad }} horas</h3>
                </div>
                @if($actividad->tiene_descuentos_ofertas)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Descuentos y Ofertas</h3>
                </div>
                @endif
                @if($actividad->es_accesible)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Es accesible</h3>
                </div>
                @endif
                @if($actividad->es_gratis)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Es gratis</h3>
                </div>
                @endif
                @if($actividad->acepta_mascotas)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Pet Friendly</h3>
                </div>
                @endif
                @if($actividad->acepta_credito)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Crédito</h3>
                </div>
                @endif
                @if($actividad->acepta_debito)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Debito</h3>
                </div>
                @endif
                @if($actividad->acepta_medios_digitales)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 rojo-principal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Acepta medios digitales</h3>
                </div>
                @endif
            </div>
        </div>
    </article>

</section>

@endsection