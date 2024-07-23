@extends('layouts.main')

@section('title', 'Detalles - Actividad')

@section('content')
<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Actividad en:<br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-6 mb-6">
        <x-boton-volver url="{{ route('provincia.actividades', ['id' => $provincia->id_provincia, 'idTipoActividad' => $tipoActividad->id_tipo_actividad]) }}">Listado de actividades</x-boton-volver>
    </div>

    <div class="flex justify-center mt-6 mb-6">
        <div class="submenu">
            @include('components.submenu')
        </div>
    </div>

    @include('components.toast-notification')

    <!-- Título e imagen -->
    <section class="w-full py-12 flex justify-center">
        <div class="container grid items-center gap-6 px-4 md:px-6 lg:grid-cols-2 lg:gap-10">
            @if($actividad->imagen_actividad)
            <img src="<?= url('storage/imagenes/actividades/' . $actividad->imagen_actividad); ?>" width="550" height="400" alt="{{ $actividad->nombre_actividad }}" class="mx-auto aspect-[9/6] overflow-hidden rounded-xl object-cover object-center sm:w-full" />
            @else
            <img class="rounded-t-lg" src="<?= url('storage/imagenes/default.jpg'); ?>" alt="Imagen por defecto - Visitway" />
            @endif
            <div class="space-y-4 text-center lg:text-left div-contenedor-info">
                <div class="space-y-2">
                    <div class="flex flex-row gap-4 items-center titulo-boton">
                        <h2 class="text-3xl poppins-bold rojo-principal md:text-4xl/tight">{{ $actividad->nombre_actividad }}</h2>
                        <x-modal-compartir></x-modal-compartir>
                    </div>
                    <p class="max-w-[600px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed roboto-flex azul-principal">
                        {{ $actividad->descripcion_actividad }}
                    </p>
                </div>
                <div class="flex flex-col items-center gap-2 lg:flex-row lg:items-start lg:justify-start">
                    @if($favoritoExistente)
                    <!-- Botón para eliminar de favoritos -->
                    <form action="{{ route('favoritos.eliminar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post" class="lg:w-auto">
                        @csrf
                        @method('post')
                        <button type="submit" class="inline-flex w-full lg:w-auto h-10 items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex">Eliminar de favoritos</button>
                    </form>
                    @else
                    <!-- Botón para agregar a favoritos -->
                    <form action="{{ route('favoritos.agregar', ['id' => $actividad->id_actividad, 'tipo' => 'actividad']) }}" method="post" class="lg:w-auto">
                        @csrf
                        <button type="submit" class="inline-flex w-full lg:w-auto h-10 items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex">Agregar a favoritos</button>
                    </form>
                    @endif
                    <!-- Botón "Agregar al cronograma" -->
                    <button type="submit" class="inline-flex lg:w-auto h-10 items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal" data-twe-toggle="modal" data-twe-target="#uploadModal" data-twe-ripple-init data-twe-ripple-color="light">Agregar al cronograma</button>
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-primary rojo-principal">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
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
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="24" viewBox="0 0 384 512" class="mt-2.5">
                        <path fill="#c11215" d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48h8V67c0 40.3 16 79 44.5 107.5L158.1 256 76.5 337.5C48 366 32 404.7 32 445v19H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8V445c0-40.3-16-79-44.5-107.5L225.9 256l81.5-81.5C336 146 352 107.3 352 67V48h8c13.3 0 24-10.7 24-24s-10.7-24-24-24H24zM192 289.9l81.5 81.5C293 391 304 417.4 304 445v19H80V445c0-27.6 11-54 30.5-73.5L192 289.9zm0-67.9l-81.5-81.5C91 121 80 94.6 80 67V48H304V67c0 27.6-11 54-30.5 73.5L192 222.1z" />
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Duración de {{ $actividad->duracion_actividad }} horas</h3>
                </div>
                @if($actividad->tiene_descuentos_ofertas)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="20" viewBox="0 0 320 512" class="mt-2.5">
                        <path fill="#c11215" d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Ofrece descuentos y ofertas</h3>
                </div>
                @endif
                @if($actividad->es_accesible)
                <div class="flex flex-col items-center p-4 rounded-lg shadow-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512" class="mt-2.5">
                        <path fill="#c11215" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal text-center">Apto para personas con movilidad reducida</h3>
                </div>
                @endif
                @if($actividad->es_gratis)
                <div class="flex flex-col items-center text-center p-4 rounded-lg shadow-md bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512" class="mt-2.5">
                        <path fill="#c11215" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Es gratuito</h3>
                </div>
                @endif
                @if($actividad->acepta_mascotas)
                <div class="flex flex-col items-center text-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg fill="#C1121F" height="42px" width="34px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 228.804 228.804" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path d="M184.475,161.189c-2.368-3.731-19.724-30.767-34.558-45.068c-12.376-11.883-30.9-12.227-33-12.227 c-0.191,0.001-0.383,0.008-0.571,0.023h-4.491c-1.984,0-19.761,0.338-32.763,12.042C63.05,130.416,45.3,159.575,44.058,161.63 c-9.403,14.867-15.166,24.536-15.166,35.286c0,19.371,14.193,31.888,36.158,31.888h98.711c21.959,0,36.148-12.529,36.148-31.92 c0-10.845-5.777-20.5-15.205-35.353C184.63,161.415,184.554,161.3,184.475,161.189z M163.761,213.804H65.05 c-7.902,0-21.158-2.194-21.158-16.888c0-6.279,4.126-13.489,12.885-27.334c0.029-0.046,0.058-0.093,0.087-0.14 c0.175-0.29,17.631-29.146,32.267-42.336c8.925-8.034,22.597-8.187,22.73-8.188h5.08c0.143,0,0.284-0.004,0.426-0.012 c2.441,0.092,14.739,0.907,22.152,8.024c14.283,13.772,32.324,42.347,32.505,42.634c0.081,0.129,0.165,0.254,0.253,0.376 c9.316,14.698,12.633,21.018,12.633,26.942C184.909,210.868,173.408,213.804,163.761,213.804z"></path>
                                <path d="M78.198,85.731c16.929,0,30.189-18.831,30.189-42.87C108.388,18.827,95.127,0,78.198,0 C61.271,0,48.011,18.827,48.011,42.861C48.011,66.901,61.271,85.731,78.198,85.731z M78.198,15 c7.184,0,15.189,11.442,15.189,27.861c0,16.424-8.006,27.87-15.189,27.87s-15.188-11.446-15.188-27.87 C63.011,26.442,71.015,15,78.198,15z"></path>
                                <path d="M38.664,137.296c2.951,0,5.77-0.607,8.413-1.82c13.162-6.12,16.827-25.327,8.34-43.731 C48.832,77.493,36.65,67.918,25.101,67.918c-2.954,0-5.777,0.609-8.401,1.817C3.52,75.834-0.157,95.045,8.332,113.481 c6.585,14.244,18.774,23.814,30.33,23.815H38.664z M21.952,107.197c-5.076-11.024-3.635-21.683,1.033-23.842 c0.639-0.294,1.33-0.437,2.115-0.437c4.71,0,12.162,5.298,16.697,15.113c5.076,11.008,3.635,21.668-1.011,23.828 c-0.642,0.294-1.336,0.438-2.123,0.438C33.947,122.296,26.486,117,21.952,107.197z"></path>
                                <path d="M150.591,85.731c16.923,0,30.18-18.831,30.18-42.87C180.771,18.827,167.514,0,150.591,0 c-16.939,0-30.207,18.827-30.207,42.861C120.384,66.901,133.652,85.731,150.591,85.731z M150.591,15 c7.18,0,15.18,11.442,15.18,27.861c0,16.424-8,27.87-15.18,27.87c-7.192,0-15.207-11.446-15.207-27.87 C135.384,26.442,143.399,15,150.591,15z"></path>
                                <path d="M212.104,69.737c-2.617-1.212-5.447-1.827-8.411-1.827c-11.532,0-23.71,9.578-30.299,23.827 c-8.525,18.396-4.863,37.61,8.368,43.756c2.609,1.197,5.429,1.804,8.38,1.804c11.559,0,23.745-9.572,30.324-23.822 C228.962,95.052,225.287,75.839,212.104,69.737z M206.846,107.19c-4.53,9.812-11.987,15.106-16.704,15.106 c-0.788,0-1.482-0.143-2.093-0.423c-4.696-2.181-6.141-12.835-1.043-23.835c4.544-9.827,11.988-15.129,16.687-15.129 c0.781,0,1.47,0.143,2.107,0.438C210.484,85.517,211.926,96.175,206.846,107.19z"></path>
                            </g>
                        </g>
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Permite mascotas</h3>
                </div>
                @endif
                @if($actividad->acepta_credito)
                <div class="flex flex-col items-center text-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="36" viewBox="0 0 576 512" class="mt-2.5">
                        <path fill="#c11215" d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z" />
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Acepta tarjeta de crédito</h3>
                </div>
                @endif
                @if($actividad->acepta_debito)
                <div class="flex flex-col items-center text-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="36" viewBox="0 0 576 512" class="mt-2.5">
                        <path fill="#c11215" d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z" />
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Acepta tarjeta de débito</h3>
                </div>
                @endif
                @if($actividad->acepta_medios_digitales)
                <div class="flex flex-col items-center text-center p-4 rounded-lg shadow-md bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="24" viewBox="0 0 384 512" class="mt-2.5">
                        <path fill="#c11215" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z" />
                    </svg>
                    <h3 class="mt-2 text-base font-bold roboto-flex azul-principal">Acepta pago con medios digitales</h3>
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