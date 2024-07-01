@extends('layouts.main')

@section('title', 'Panel Administrador - Editar Actividad')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Editar actividad:<span class="span-h1-provincias"><br>{{ $actividad->nombre_actividad }}</span></h1>

    @include('components.lineas-secundarias')

    <section class="w-full py-12 md:py-24 lg:py-32 roboto-flex">
        <div class="container mx-auto max-w-4xl px-4 md:px-6">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold md:text-4xl roboto-flex azul-principal">Formulario de edición</h2>

                @if($errors->any())
                <div class="mb-3 roboto-flex rojo-principal">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
                @endif

                <form action="{{ route('administrador.actividades.editar.proceso', $actividad->id_actividad) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <!-- Nombre de la actividad -->
                    <div class="space-y-2">
                        <label for="nombre_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Nombre de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="nombre_actividad" name="nombre_actividad" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('nombre_actividad', $actividad->nombre_actividad) }}" @error('nombre_actividad') aria-describedby="error-nombre_actividad" aria-invalid="true" @enderror>
                        @error('nombre_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-nombre_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Imagen de la actividad -->
                    <div class="space-y-2">
                        <label for="imagen_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Imagen de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        @if($actividad->imagen_actividad !== null)
                        <img src="{{ asset('storage/' . $actividad->imagen_actividad) }}" alt="Imagen Actividad - {{ $actividad->titulo }}" class="mb-4">
                        @else
                        <p>No se ha encontrado la imagen, puede que haya habido un error al cargarla. Por favor, vuelve a intentarlo.</p>
                        @endif
                        <input type="file" id="imagen_actividad" name="imagen_actividad" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" accept="image/*" value="{{ old('imagen_actividad', $actividad->imagen_actividad) }}" @error('imagen_actividad') aria-describedby="error-imagen_actividad" aria-invalid="true" @enderror>
                        @error('imagen_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-imagen_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Descripción de la actividad -->
                    <div class="space-y-2">
                        <label for="descripcion_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Descripción de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <textarea id="descripcion_actividad" name="descripcion_actividad" class="roboto-flex azul-principal flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[200px]" @error('descripcion_actividad') aria-describedby="error-descripcion_actividad" aria-invalid="true" @enderror>{{ old('descripcion_actividad') ?? $actividad->descripcion_actividad }}</textarea>
                        @error('descripcion_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-descripcion_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Precio de la actividad -->
                    <div class="space-y-2">
                        <label for="precio_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Precio de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="number" id="precio_actividad" name="precio_actividad" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('precio_actividad') ?? $actividad->precio_actividad }}" @error('precio_actividad') aria-describedby="error-precio_actividad" aria-invalid="true" @enderror>
                        @error('precio_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-precio_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Horarios de la actividad -->
                    <div class="space-y-2">
                        <label for="horarios_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Horarios de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="horarios_actividad" name="horarios_actividad" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('horarios_actividad') ?? $actividad->horarios_actividad }}" @error('horarios_actividad') aria-describedby="error-horarios_actividad" aria-invalid="true" @enderror>
                        @error('horarios_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-horarios_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Ubicación de la actividad -->
                    <div class="space-y-2">
                        <label for="ubicacion_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Ubicación de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="ubicacion_actividad" name="ubicacion_actividad" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('ubicacion_actividad') ?? $actividad->ubicacion_actividad }}" @error('ubicacion_actividad') aria-describedby="error-ubicacion_actividad" aria-invalid="true" @enderror>
                        @error('ubicacion_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-ubicacion_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contacto de la actividad -->
                    <div class="space-y-2">
                        <label for="contacto_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Contacto de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="contacto_actividad" name="contacto_actividad" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('contacto_actividad') ?? $actividad->contacto_actividad }}" @error('contacto_actividad') aria-describedby="error-contacto_actividad" aria-invalid="true" @enderror>
                        @error('contacto_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-contacto_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- URL del sitio web de la actividad -->
                    <div class="space-y-2">
                        <label for="url_sitio_web_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">URL del sitio web de la actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="url_sitio_web_actividad" name="url_sitio_web_actividad" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('url_sitio_web_actividad') ?? $actividad->url_sitio_web_actividad }}" @error('url_sitio_web_actividad') aria-describedby="error-url_sitio_web_actividad" aria-invalid="true" @enderror>
                        @error('url_sitio_web_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-url_sitio_web_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Duración actividad (en minutos) -->
                    <div class="space-y-2">
                        <label for="duracion_actividad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Duración de la actividad (en minutos)</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="number" id="duracion_actividad" name="duracion_actividad" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('duracion_actividad') ?? $actividad->duracion_actividad }}" @error('duracion_actividad') aria-describedby="error-duracion_actividad" aria-invalid="true" @enderror>
                        @error('duracion_actividad')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-duracion_actividad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campos adicionales -->
                    <h3 class="text-lg roboto-flex azul-principal font-bold pt-4">Campos adicionales:</h3>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="tiene_descuentos_ofertas" value="0">
                        <input type="checkbox" id="tiene_descuentos_ofertas" name="tiene_descuentos_ofertas" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('tiene_descuentos_ofertas', $actividad->tiene_descuentos_ofertas) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tiene_descuentos_ofertas">Tiene descuentos u ofertas</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="es_accesible" value="0">
                        <input type="checkbox" id="es_accesible" name="es_accesible" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('es_accesible', $actividad->es_accesible) ? 'checked' : '' }}>
                        <label class="form-check-label" for="es_accesible">Es accesible</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="es_gratis" value="0">
                        <input type="checkbox" id="es_gratis" name="es_gratis" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('es_gratis', $actividad->es_gratis) ? 'checked' : '' }}>
                        <label class="form-check-label" for="es_gratis">Es gratis</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_mascotas" value="0">
                        <input type="checkbox" id="acepta_mascotas" name="acepta_mascotas" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_mascotas', $actividad->acepta_mascotas) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_mascotas">Acepta mascotas</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_debito" value="0">
                        <input type="checkbox" id="acepta_debito" name="acepta_debito" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_debito', $actividad->acepta_debito) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_debito">Acepta débito</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_credito" value="0">
                        <input type="checkbox" id="acepta_credito" name="acepta_credito" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_credito', $actividad->acepta_credito) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_credito">Acepta crédito</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_medios_digitales" value="0">
                        <input type="checkbox" id="acepta_medios_digitales" name="acepta_medios_digitales" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_medios_digitales', $actividad->acepta_medios_digitales) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_medios_digitales">Acepta medios digitales</label>
                    </div>

                    <!-- Provincia -->
                    <div class="space-y-2">
                        <label for="provincia_id" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Provincia</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="provincia_id" name="provincia_id" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('provincia_id') aria-describedby="error-provincia_id" aria-invalid="true" @enderror>
                            <option value="">Selecciona una provincia</option>
                            @foreach($provincias as $provincia)
                            <option value="{{ $provincia->id_provincia }}" @selected($provincia->id_provincia == old('provincia_id', $actividad->provincia_id))>
                                {{ $provincia->nombre_provincia }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    @error('provincia_id')
                    <div class="roboto-flex rojo-principal text-sm mt-1" id="error-provincia_id">{{ $message }}</div>
                    @enderror

                    <!-- Tipo de actividad -->
                    <div class="space-y-2">
                        <label for="tipo_actividad_id" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Tipo de actividad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="tipo_actividad_id" name="tipo_actividad_id" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('tipo_actividad_id') aria-describedby="error-tipo_actividad_id" aria-invalid="true" @enderror>
                            <option value="">Selecciona un tipo de actividad</option>
                            @foreach($tipoActividades as $tipoActividad)
                            <option value="{{ $tipoActividad->id_tipo_actividad }}" {{ old('tipo_actividad_id', $actividad->tipo_actividad_id) == $tipoActividad->id_tipo_actividad ? 'selected' : '' }}>
                                {{ $tipoActividad->nombre_tipo_actividad }}
                            </option>
                            @endforeach
                        </select>
                        @error('tipo_actividad_id')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-tipo_actividad_id">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botón de envío -->
                    <div class="flex gap-2 pt-4" data-id="25">
                        <button class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" type="submit" data-id="27">Editar actividad</button>
                        <a href="{{ route('administrador.actividades') }}" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</section>

@endsection