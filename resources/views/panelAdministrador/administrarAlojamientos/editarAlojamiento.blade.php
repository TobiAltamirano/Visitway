@extends('layouts.main')

@section('title', 'Panel Administrador - Cargar Alojamiento')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Panel admnistrador<span class="span-h1-provincias"><br>Cargar alojamiento</span></h1>

    @include('components.lineas-secundarias')

    <div class="container mx-auto">
        @if (session('status.message'))
        <div class="alert alert-success">
            {{ session('status.message') }}
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
    </div>

    <section class="w-full py-12 md:py-24 lg:py-32 roboto-flex">
        <div class="container mx-auto max-w-4xl px-4 md:px-6">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold md:text-4xl roboto-flex azul-principal">Formulario de creación</h2>
                <form action="{{ route('administrador.alojamientos.editar.proceso', $alojamiento->id_alojamiento) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <!-- Nombre del alojamiento -->
                    <div class="space-y-2">
                        <label for="nombre_alojamiento" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Nombre del alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="nombre_alojamiento" name="nombre_alojamiento" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('nombre_alojamiento', $alojamiento->nombre_alojamiento) }}" @error('nombre_alojamiento') aria-describedby="error-nombre_alojamiento" aria-invalid="true" @enderror>
                        @error('nombre_alojamiento')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-nombre_alojamiento">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Imagen alojamiento -->
                    <div class="space-y-2">
                        <label for="imagen_alojamiento" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Imagen del alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="file" id="imagen_alojamiento" name="imagen_alojamiento" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" accept="image/*" @error('imagen_alojamiento') aria-describedby="error-imagen_alojamiento" aria-invalid="true" @enderror>
                        @error('imagen_alojamiento')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-imagen_alojamiento">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Precio del alojamiento -->
                    <div class="space-y-2">
                        <label for="precio_alojamiento" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Precio del alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="number" id="precio_alojamiento" name="precio_alojamiento" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('precio_alojamiento', $alojamiento->precio_alojamiento) }}" @error('precio_alojamiento') aria-describedby="error-precio_alojamiento" aria-invalid="true" @enderror>
                        @error('precio_alojamiento')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-precio_alojamiento">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Horarios de la alojamiento -->
                    <div class="space-y-2">
                        <label for="horarios_alojamiento" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Horarios del alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="horarios_alojamiento" name="horarios_alojamiento" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('horarios_alojamiento', $alojamiento->horarios_alojamiento) }}" @error('horarios_alojamiento') aria-describedby="error-horarios_alojamiento" aria-invalid="true" @enderror></input>
                        @error('horarios_alojamiento')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-horarios_alojamiento">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Ubicación del alojamiento -->
                    <div class="space-y-2">
                        <label for="ubicacion_alojamiento" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Ubicación del alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="ubicacion_alojamiento" name="ubicacion_alojamiento" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('ubicacion_alojamiento', $alojamiento->ubicacion_alojamiento) }}" @error('ubicacion_alojamiento') aria-describedby="error-ubicacion_alojamiento" aria-invalid="true" @enderror></input>
                        @error('ubicacion_alojamiento')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-ubicacion_alojamiento">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contacto del alojamiento -->
                    <div class="space-y-2">
                        <label for="contacto_alojamiento" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Contacto del alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="contacto_alojamiento" name="contacto_alojamiento" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" 
                        value="{{ old('contacto_alojamiento') ?? $alojamiento->contacto_alojamiento }}"
                        @error('contacto_alojamiento')  aria-describedby="error-contacto_alojamiento" aria-invalid="true" @enderror></input>
                        @error('contacto_alojamiento')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-contacto_alojamiento">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- URL del sitio web del alojamiento -->
                    <div class="space-y-2">
                        <label for="url_sitio_web_alojamiento" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">URL del sitio web del alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="url_sitio_web_alojamiento" name="url_sitio_web_alojamiento" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('url_sitio_web_alojamiento', $alojamiento->url_sitio_web_alojamiento) }}" @error('url_sitio_web_alojamiento') aria-describedby="error-url_sitio_web_alojamiento" aria-invalid="true" @enderror>
                        @error('url_sitio_web_alojamiento')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-url_sitio_web_alojamiento">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campos adicionales -->

                    <h3 class="text-lg roboto-flex azul-principal font-bold pt-4">Campos adicionales:</h3>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="tiene_descuentos_ofertas" value="0">
                        <input type="checkbox" id="tiene_descuentos_ofertas" name="tiene_descuentos_ofertas" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('tiene_descuentos_ofertas', $alojamiento->tiene_descuentos_ofertas) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tiene_descuentos_ofertas">Tiene descuentos u ofertas</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="tiene_wifi" value="0">
                        <input type="checkbox" id="tiene_wifi" name="tiene_wifi" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('es_accesible', $alojamiento->es_accesible) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tiene_wifi">Tiene WIFI</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="tiene_estacionamiento" value="0">
                        <input type="checkbox" id="tiene_estacionamiento" name="tiene_estacionamiento" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('es_gratis', $alojamiento->es_gratis) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tiene_estacionamiento">Tiene Estacionamiento</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_mascotas" value="0">
                        <input type="checkbox" id="acepta_mascotas" name="acepta_mascotas" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_mascotas', $alojamiento->acepta_mascotas) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_mascotas">Acepta mascotas</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_debito" value="0">
                        <input type="checkbox" id="acepta_debito" name="acepta_debito" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_debito', $alojamiento->acepta_debito) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_debito">Acepta débito</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_credito" value="0">
                        <input type="checkbox" id="acepta_credito" name="acepta_credito" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_credito', $alojamiento->acepta_credito) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_credito">Acepta crédito</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_medios_digitales" value="0">
                        <input type="checkbox" id="acepta_medios_digitales" name="acepta_medios_digitales" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_medios_digitales', $alojamiento->acepta_medios_digitales) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_medios_digitales">Acepta medios digitales</label>
                    </div>

                    <!-- Provincia -->
                    <div class="space-y-2">
                        <label for="provincia_id" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Provincia</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="provincia_id" name="provincia_id" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('provincia_id') aria-describedby="error-provincia_id" aria-invalid="true" @enderror>
                            <option value="">Selecciona una provincia</option>
                            @foreach($provincias as $provincia)
                            <option value="{{ $provincia->id_provincia }}" @selected($provincia->id_provincia == old('provincia_id', $alojamiento->provincia_id))>
                                {{ $provincia->nombre_provincia }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    @error('provincia_id')
                    <div class="roboto-flex rojo-principal text-sm mt-1" id="error-provincia_id">{{ $message }}</div>
                    @enderror

                    <!-- Tipo de alojamiento -->
                    <div class="space-y-2">
                        <label for="tipo_alojamiento_id" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Tipo de alojamiento</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="tipo_alojamiento_id" name="tipo_alojamiento_id" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('tipo_alojamiento_id') aria-describedby="error-tipo_alojamiento_id" aria-invalid="true" @enderror>
                            <option value="">Selecciona un tipo de alojamiento</option>
                            @foreach($tipoAlojamientos as $tipoAlojamiento)
                            <option value="{{ $tipoAlojamiento->id_tipo_alojamiento }}" {{ old('tipo_alojamiento_id', $alojamiento->tipo_alojamiento_id) == $tipoAlojamiento->id_tipo_alojamiento ? 'selected' : '' }}>
                                {{ $tipoAlojamiento->nombre_tipo_alojamiento }}
                            </option>
                            @endforeach
                        </select>
                        @error('tipo_alojamiento_id')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-tipo_alojamiento_id">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botón de envío -->
                    <div class="flex gap-2 pt-4" data-id="25">
                        <button class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" type="submit" data-id="27">Editar Alojamiento</button>
                        <a href="{{ route('administrador.alojamientos') }}" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</section>

@endsection