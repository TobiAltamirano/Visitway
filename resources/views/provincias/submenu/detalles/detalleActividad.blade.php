@extends('layouts.main')

@section('title', 'Detalles - Actividad')

@section('content')
<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Actividad<br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-6 mb-6">
        <x-boton-volver url="{{ url()->previous() }}">Volver</x-boton-volver>
    </div>

    <div class="flex justify-center mt-6 mb-6">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    @include('components.toast-notification')

    <!-- Título e imagen -->
    <section class="w-full py-12 flex justify-center">
        <div class="container grid items-center gap-6 px-4 md:px-6 lg:grid-cols-2 lg:gap-10">
            <img src="https://www.cronista.com/files/image/393/393517/617aeb7754300.jpg" width="550" height="400" alt="Activiti" class="mx-auto aspect-[9/6] overflow-hidden rounded-xl object-cover object-center sm:w-full" />
            <div class="space-y-4 text-center lg:text-left">
                <div class="space-y-2">
                    <h2 class="text-3xl poppins-bold rojo-principal md:text-4xl/tight">{{ $actividad->nombre_actividad }}</h2>
                    <p class="max-w-[600px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed roboto-flex azul-principal">
                        {{ $actividad->descripcion_actividad }}
                    </p>
                </div>
                <div class="flex flex-col items-center justify-center gap-2 min-[400px]:flex-row lg:items-start lg:justify-start">
                    @if($favoritoExistente)
                    <!-- Botón para eliminar de favoritos -->
                    <form action="{{ route('favoritos.eliminar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post">
                        @csrf
                        @method('post')
                        <button type="submit" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex">Eliminar de favoritos</button>
                    </form>
                    @else
                    <!-- Botón para agregar a favoritos -->
                    <form action="{{ route('favoritos.agregar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post">
                        @csrf
                        <button type="submit" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex">Agregar a favoritos</button>
                    </form>
                    @endif
                    <button type="submit" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal" data-twe-toggle="modal" data-twe-target="#uploadModal" data-twe-ripple-init data-twe-ripple-color="light">Agregar al cronograma</button>
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

    <!-- Modal agregar actividad al cronograma -->
    <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="uploadModal" data-twe-backdrop="static" data-twe-keyboard="false" tabindex="-1" aria-labelledby="uploadModal" aria-hidden="true">
        <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                <div class="flex items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                    <p class="azul-principal roboto-flex text-xl font-medium leading-normal text-surface dark:text-white" id="uploadModal">
                        Agregar actividad al cronograma
                    </p>
                    <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                        <span class="azul-principal [&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="p-4" data-twe-modal-body-ref>
                    <form action="{{ route('cronograma.agregar', ['id' => $actividad->id_actividad]) }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="dia_semana" class="roboto-flex azul-principal block mb-2 font-bold text-base">Día:</label>
                            <select name="dia_semana" id="dia_semana" class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miércoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sábado</option>
                                <option value="7">Domingo</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="hora_inicio" class="roboto-flex azul-principal block mb-2 font-bold text-base">Hora de inicio:</label>
                            <input type="time" name="hora_inicio" id="hora_inicio" required class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <div class="mb-4">
                            <label for="hora_fin" class="roboto-flex azul-principal block mb-2 font-bold text-base">Hora de fin:</label>
                            <input type="time" name="hora_fin" id="hora_fin" required class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
                        </div>
                        <button type="submit" class="roboto-flex azul-principal boton-aplicar-cambios boton-guardar-cambios poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                            Agregar al cronograma
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection