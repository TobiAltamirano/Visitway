@extends('layouts.main')

@section('title', 'Panel Administrador - Editar Local Gastronómico')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Panel admnistrador<span class="span-h1-provincias"><br>Editar local gastronómico</span></h1>

    @include('components.lineas-secundarias')

    <section class="w-full py-12 md:py-24 lg:py-32 roboto-flex">
        <div class="container mx-auto max-w-4xl px-4 md:px-6">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold md:text-4xl roboto-flex azul-principal">Formulario de edición</h2>

                @if($errors->any())
                <div class="mb-3 roboto-flex rojo-principal">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
                @endif
                
                <form action="{{ route('administrador.locales_gastronomicos.editar.proceso', $localGastronomico->id_local_gastronomico) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <!-- Nombre del local gastronomico -->
                    <div class="space-y-2">
                        <label for="nombre_local_gastronomico" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Nombre local gastronomico</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="nombre_local_gastronomico" name="nombre_local_gastronomico" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('nombre_local_gastronomico', $localGastronomico->nombre_local_gastronomico) }}" @error('nombre_local_gastronomico') aria-describedby="error-nombre_local_gastronomico" aria-invalid="true" @enderror>
                        @error('nombre_local_gastronomico')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-nombre_local_gastronomico">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Imagen de la local gastronómico -->
                    <div class="space-y-2">
                        <label for="imagen_local_gastronomico" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Imagen de la local gastronómico</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="file" id="imagen_local_gastronomico" name="imagen_local_gastronomico" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" accept="image/*" @error('imagen_local_gastronomico') aria-describedby="error-imagen_local_gastronomico" aria-invalid="true" @enderror>
                        @error('imagen_local_gastronomico')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-imagen_local_gastronomico">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Horarios de la local gastronómico -->
                    <div class="space-y-2">
                        <label for="horarios_local_gastronomico" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Horarios de la local gastronómico</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="horarios_local_gastronomico" name="horarios_local_gastronomico" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        value="{{ old('horarios_local_gastronomico', $localGastronomico->horarios_local_gastronomico) }}" @error('horarios_local_gastronomico') aria-describedby="error-horarios_local_gastronomico" aria-invalid="true" @enderror></input>
                        @error('horarios_local_gastronomico')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-horarios_local_gastronomico">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Ubicación de la local gastronómico -->
                    <div class="space-y-2">
                        <label for="ubicacion_local_gastronomico" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Ubicación de la local gastronómico</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="ubicacion_local_gastronomico" name="ubicacion_local_gastronomico" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('ubicacion_local_gastronomico', $localGastronomico->ubicacion_local_gastronomico) }}" @error('ubicacion_local_gastronomico') aria-describedby="error-ubicacion_local_gastronomico" aria-invalid="true" @enderror></input>
                        @error('ubicacion_local_gastronomico')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-ubicacion_local_gastronomico">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contacto de la local gastronómico -->
                    <div class="space-y-2">
                        <label for="contacto_local_gastronomico" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Contacto de la local gastronómico</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input id="contacto_local_gastronomico" name="contacto_local_gastronomico" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('contacto_local_gastronomico', $localGastronomico->contacto_local_gastronomico) }}" @error('contacto_local_gastronomico') aria-describedby="error-contacto_local_gastronomico" aria-invalid="true" @enderror></input>
                        @error('contacto_local_gastronomico')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-contacto_local_gastronomico">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- URL del sitio web de la local gastronómico -->
                    <div class="space-y-2">
                        <label for="url_sitio_web_local_gastronomico" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">URL del sitio web de la local gastronómico</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="url_sitio_web_local_gastronomico" name="url_sitio_web_local_gastronomico" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('url_sitio_web_local_gastronomico', $localGastronomico->url_sitio_web_local_gastronomico) }}" @error('url_sitio_web_local_gastronomico') aria-describedby="error-url_sitio_web_local_gastronomico" aria-invalid="true" @enderror>
                        @error('url_sitio_web_local_gastronomico')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-url_sitio_web_local_gastronomico">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campos adicionales -->

                    <h3 class="text-lg roboto-flex azul-principal font-bold pt-4">Campos adicionales:</h3>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="tiene_descuentos_ofertas" value="0">
                        <input type="checkbox" id="tiene_descuentos_ofertas" name="tiene_descuentos_ofertas" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('tiene_descuentos_ofertas', $localGastronomico->tiene_descuentos_ofertas) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tiene_descuentos_ofertas">Tiene descuentos u ofertas</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="tiene_wifi" value="0">
                        <input type="checkbox" id="tiene_wifi" name="tiene_wifi" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('tiene_wifi', $localGastronomico->tiene_wifi) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tiene_wifi">Tiene WIFI</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="tiene_estacionamiento" value="0">
                        <input type="checkbox" id="tiene_estacionamiento" name="tiene_estacionamiento" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('tiene_estacionamiento', $localGastronomico->tiene_estacionamiento) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tiene_estacionamiento">Tiene estacionamiento
                        </label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_mascotas" value="0">
                        <input type="checkbox" id="acepta_mascotas" name="acepta_mascotas" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_mascotas', $localGastronomico->acepta_mascotas) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_mascotas">Acepta mascotas</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_debito" value="0">
                        <input type="checkbox" id="acepta_debito" name="acepta_debito" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_debito', $localGastronomico->acepta_debito) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_debito">Acepta débito</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_credito" value="0">
                        <input type="checkbox" id="acepta_credito" name="acepta_credito" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_credito', $localGastronomico->acepta_credito) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_credito">Acepta crédito</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="acepta_medios_digitales" value="0">
                        <input type="checkbox" id="acepta_medios_digitales" name="acepta_medios_digitales" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('acepta_medios_digitales', $localGastronomico->acepta_medios_digitales) ? 'checked' : '' }}>
                        <label class="form-check-label" for="acepta_medios_digitales">Acepta medios digitales</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="apto_veganos" value="0">
                        <input type="checkbox" id="apto_veganos" name="apto_veganos" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('apto_veganos', $localGastronomico->apto_veganos) ? 'checked' : '' }}>
                        <label class="form-check-label" for="apto_veganos">Apto veganos</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="apto_vegetarianos" value="0">
                        <input type="checkbox" id="apto_vegetarianos" name="apto_vegetarianos" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('apto_vegetarianos') ? 'checked' : '' }}>
                        <label class="form-check-label" for="apto_vegetarianos">Apto vegetarianos</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="apto_sin_tacc" value="0">
                        <input type="checkbox" id="apto_sin_tacc" name="apto_sin_tacc" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('apto_sin_tacc') ? 'checked' : '' }}>
                        <label class="form-check-label" for="apto_sin_tacc">Apto sin TACC</label>
                    </div>

                    <div class="mb-3 form-check azul-principal roboto-flex">
                        <input type="hidden" name="apto_intolerantes_lactosa" value="0">
                        <input type="checkbox" id="apto_intolerantes_lactosa" name="apto_intolerantes_lactosa" class="flex items-center relative float-left me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" value="1" {{ old('apto_intolerantes_lactosa') ? 'checked' : '' }}>
                        <label class="form-check-label" for="apto_intolerantes_lactosa">Apto intolerantes lactosa</label>
                    </div>

                    <!-- Provincia -->
                    <div class="space-y-2">
                        <label for="provincia_id" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Provincia</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="provincia_id" name="provincia_id" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('provincia_id') aria-describedby="error-provincia_id" aria-invalid="true" @enderror>
                            <option value="">Selecciona una provincia</option>
                            @foreach($provincias as $provincia)
                            <option value="{{ $provincia->id_provincia }}" @selected($provincia->id_provincia == old('provincia_id'))>
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
                        <label for="tipo_gastronomia_id" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Tipo de local gastronomico</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="tipo_gastronomia_id" name="tipo_gastronomia_id" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('tipo_gastronomia_id') aria-describedby="error-tipo_gastronomia_id" aria-invalid="true" @enderror>
                            <option value="">Selecciona un tipo de gastronomia</option>
                            @foreach($tiposGastronomia as $tipoGastronomia)
                            <option value="{{ $tipoGastronomia->id_tipo_gastronomia }}" {{ old('tipo_gastronomia_id') == $tipoGastronomia->id_tipo_gastronomia ? 'selected' : '' }}>
                                {{ $tipoGastronomia->nombre_tipo_gastronomia }}
                            </option>
                            @endforeach
                        </select>
                        @error('tipo_local_gastronomico_id')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-tipo_local_gastronomico_id">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botón de envío -->
                    <div class="flex gap-2 pt-4" data-id="25">
                        <button class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" type="submit" data-id="27">Crear local gastronomico</button>
                        <a href="{{ route('administrador.locales_gastronomicos') }}" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</section>

@endsection