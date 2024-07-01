@extends('layouts.main')

@section('title', 'Actividades')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Actividades en<br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-6 mb-6">
        <x-boton-volver url="{{ route('provincia.tipos-actividades', ['id' => $provincia->id_provincia]) }}">Volver</x-boton-volver>
    </div>

    <div class="flex justify-center mt-6 mb-6">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <!-- Botón para desplegar el formulario -->
    <div class="flex justify-center mt-14 mb-6">
        <button id="mostrarFormulario" type="button" class="filtros-boton poppins-semibold inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:active:shadow-dark-strong">
            Desplegar filtros
        </button>
    </div>

    <!-- Formulario oculto -->
    <article id="formularioContainer" class="hidden p-6 mb-8">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            <div class="text-center">
                <p class="text-2xl font-semibold azul-principal poppins-semibold mb-6">Filtrar por:</p>
            </div>
            <form action="{{ route('provincia.filtrarActividades', ['id' => $provincia->id_provincia, 'idTipoActividad' => $idTipoActividad]) }}" method="get" id="filtro-form">
                @csrf
                @method('GET')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 azul-principal poppins-regular">
                    <div class="mb-[0.125rem] block min-h-[1.5rem] ps-[1.5rem] div-contenedor-filtro">
                        <input type="checkbox" name="es_accesible" {{ request('es_accesible') ? 'checked' : '' }} class="flex items-center relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" id="checkboxEsAccesible">
                        <label class="flex items-center inline-block ps-[0.15rem] hover:cursor-pointer" for="checkboxEsAccesible">
                            Movilidad reducida
                        </label>
                    </div>
                    <div class="mb-[0.125rem] block min-h-[1.5rem] ps-[1.5rem] div-contenedor-filtro">
                        <input type="checkbox" name="tiene_descuentos_ofertas" {{ request('tiene_descuentos_ofertas') ? 'checked' : '' }} class="flex items-center relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" id="checkboxTieneDescuento">
                        <label class="flex items-center inline-block ps-[0.15rem] hover:cursor-pointer" for="checkboxTieneDescuento">
                            Ofrece promociones
                        </label>
                    </div>
                    <div class="mb-[0.125rem] block min-h-[1.5rem] ps-[1.5rem] div-contenedor-filtro">
                        <input type="checkbox" name="acepta_mascotas" {{ request('acepta_mascotas') ? 'checked' : '' }} class="flex items-center relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" id="checkboxAceptaMascotas">
                        <label class="flex items-center inline-block ps-[0.15rem] hover:cursor-pointer" for="checkboxAceptaMascotas">
                            Permite mascotas
                        </label>
                    </div>
                    <div class="mb-[0.125rem] block min-h-[1.5rem] ps-[1.5rem] div-contenedor-filtro">
                        <input type="checkbox" name="es_gratis" {{ request('es_gratis') ? 'checked' : '' }} class="flex items-center relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" id="checkboxEsGratis">
                        <label class="flex items-center inline-block ps-[0.15rem] hover:cursor-pointer" for="checkboxEsGratis">
                            Actividades gratuitas
                        </label>
                    </div>
                </div>
                <!-- Campo oculto para el tipo de actividad -->
                <input type="hidden" name="idTipoActividad" value="{{ $idTipoActividad }}">
                <div class="flex justify-center mt-6 w-full">
                    <button type="submit" class="filtrar-boton poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">Filtrar</button>
                </div>
            </form>
        </div>
    </article>

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

    <div class="mx-6 mt-14 mb-8">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
            @foreach ($actividades as $actividad)
            <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <a href="{{ route('provincia.detalleActividad', ['id' => $provincia->id_provincia, 'actividadId' => $actividad->id_actividad, 'idTipoActividad' => $actividad->tipo_actividad_id]) }}">
                    <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="{{ $actividad->nombre_actividad }}" />
                    <div class="p-4">
                        <h2 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $actividad->nombre_actividad }}</h2>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    {{ $actividades->links() }}

</section>

@endsection