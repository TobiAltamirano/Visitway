@extends('layouts.main')

@section('title', 'Editar Actividad Alternativa')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Editar actividad alternativa<br><span class="azul-principal">"{{ $actividadAlternativa->titulo }}"</span></h1>

    @include('components.lineas-secundarias')

    <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container mx-auto max-w-4xl px-4 md:px-6">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold md:text-4xl roboto-flex azul-principal">Formulario de edición</h2>

                @if($errors->any())
                <div class="mb-3 roboto-flex rojo-principal">Ha ocurrido uno o más errores en la validación. Por favor, revisa los campos nuevamente.</div>
                @endif

                <form action="{{ route('alternativas.actualizar', $actividadAlternativa->id) }}" method="post" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('POST')

                    <!-- Título input -->
                    <div class="space-y-2 div-input-label">
                        <label for="titulo" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Título</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="titulo" name="titulo" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="50" value="{{ old('titulo', $actividadAlternativa->titulo) }}" @error('titulo') aria-describedby="error-titulo" aria-invalid="true" @enderror>
                        @error('titulo')
                        <div class="text-danger" id="error-titulo">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Descripción input -->
                    <div class="space-y-2 div-input-label">
                        <label for="descripcion" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Descripción</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="descripcion" name="descripcion" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('descripcion', $actividadAlternativa->descripcion) }}" @error('descripcion') aria-describedby="error-descripcion" aria-invalid="true" @enderror>
                        @error('descripcion')
                        <div class="text-danger" id="error-descripcion">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Provincia -->
                    <div class="mb-4">
                        <label for="provincia" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Provincia</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="provincia" name="provincia" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" @error('provincia') aria-describedby="error-provincia" aria-invalid="true" @enderror>
                            <option value="" disabled>Seleccione una provincia</option>
                            <option value="Buenos Aires" {{ old('provincia', $actividadAlternativa->provincia) == 'Buenos Aires' ? 'selected' : '' }}>Buenos Aires</option>
                            <option value="Catamarca" {{ old('provincia', $actividadAlternativa->provincia) == 'Catamarca' ? 'selected' : '' }}>Catamarca</option>
                            <option value="Chaco" {{ old('provincia', $actividadAlternativa->provincia) == 'Chaco' ? 'selected' : '' }}>Chaco</option>
                            <option value="Chubut" {{ old('provincia', $actividadAlternativa->provincia) == 'Chubut' ? 'selected' : '' }}>Chubut</option>
                            <option value="Cordoba" {{ old('provincia', $actividadAlternativa->provincia) == 'Córdoba' ? 'selected' : '' }}>Córdoba</option>
                            <option value="Corrientes" {{ old('provincia', $actividadAlternativa->provincia) == 'Corrientes' ? 'selected' : '' }}>Corrientes</option>
                            <option value="Entre Rios" {{ old('provincia', $actividadAlternativa->provincia) == 'Entre Ríos' ? 'selected' : '' }}>Entre Ríos</option>
                            <option value="Formosa" {{ old('provincia', $actividadAlternativa->provincia) == 'Formosa' ? 'selected' : '' }}>Formosa</option>
                            <option value="Jujuy" {{ old('provincia', $actividadAlternativa->provincia) == 'Jujuy' ? 'selected' : '' }}>Jujuy</option>
                            <option value="La Pampa" {{ old('provincia', $actividadAlternativa->provincia) == 'La Pampa' ? 'selected' : '' }}>La Pampa</option>
                            <option value="La Rioja" {{ old('provincia', $actividadAlternativa->provincia) == 'La Rioja' ? 'selected' : '' }}>La Rioja</option>
                            <option value="Mendoza" {{ old('provincia', $actividadAlternativa->provincia) == 'Mendoza' ? 'selected' : '' }}>Mendoza</option>
                            <option value="Misiones" {{ old('provincia', $actividadAlternativa->provincia) == 'Misiones' ? 'selected' : '' }}>Misiones</option>
                            <option value="Neuquen" {{ old('provincia', $actividadAlternativa->provincia) == 'Neuquén' ? 'selected' : '' }}>Neuquén</option>
                            <option value="Rio Negro" {{ old('provincia', $actividadAlternativa->provincia) == 'Río Negro' ? 'selected' : '' }}>Río Negro</option>
                            <option value="Salta" {{ old('provincia', $actividadAlternativa->provincia) == 'Salta' ? 'selected' : '' }}>Salta</option>
                            <option value="San Juan" {{ old('provincia', $actividadAlternativa->provincia) == 'San Juan' ? 'selected' : '' }}>San Juan</option>
                            <option value="San Luis" {{ old('provincia', $actividadAlternativa->provincia) == 'San Luis' ? 'selected' : '' }}>San Luis</option>
                            <option value="Santa Cruz" {{ old('provincia', $actividadAlternativa->provincia) == 'Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
                            <option value="Santa Fe" {{ old('provincia', $actividadAlternativa->provincia) == 'Santa Fe' ? 'selected' : '' }}>Santa Fe</option>
                            <option value="Santiago del Estero" {{ old('provincia', $actividadAlternativa->provincia) == 'Santiago del Estero' ? 'selected' : '' }}>Santiago del Estero</option>
                            <option value="Tierra del Fuego" {{ old('provincia', $actividadAlternativa->provincia) == 'Tierra del Fuego' ? 'selected' : '' }}>Tierra del Fuego</option>
                            <option value="Tucuman" {{ old('provincia', $actividadAlternativa->provincia) == 'Tucumán' ? 'selected' : '' }}>Tucumán</option>
                        </select>
                        @error('provincia')
                        <div class="text-danger" id="error-provincia">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Localidad -->
                    <div class="space-y-2 div-input-label">
                        <label for="localidad" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Localidad</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="localidad" name="localidad" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="50" value="{{ old('localidad', $actividadAlternativa->localidad) }}" @error('localidad') aria-describedby="error-localidad" aria-invalid="true" @enderror>
                        @error('localidad')
                        <div class="text-danger" id="error-localidad">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Dirección -->
                    <div class="space-y-2 div-input-label">
                        <label for="direccion" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Dirección</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="direccion" name="direccion" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="50" value="{{ old('direccion', $actividadAlternativa->direccion) }}" @error('direccion') aria-describedby="error-direccion" aria-invalid="true" @enderror>
                        @error('direccion')
                        <div class="text-danger" id="error-direccion">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Imagen 1 -->
                    <div class="space-y-2">
                        <label for="imagen1" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Imagen principal</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        @if($actividadAlternativa->imagen1 !== null)
                        <img src="<?= url('storage/' . $actividadAlternativa->imagen1); ?>" alt="Imagen Actividad - {{ $actividadAlternativa->titulo }}" class="mb-4">
                        @else
                        <p>No se ha encontrado la imagen, puede que haya habido un error al cargarla. Por favor, vuelve a intentarlo.</p>
                        @endif
                        <input type="file" id="imagen1" name="imagen1" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white" value="{{ old('imagen1', $actividadAlternativa->imagen1) }}" @error('imagen1') aria-describedby="error-imagen1" aria-invalid="true" @enderror>
                        @error('imagen1')
                        <div class="text-danger" id="error-imagen1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Imagen 2 -->
                    <div class="space-y-2">
                        <label for="imagen2" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Segunda imagen</label>
                        @if($actividadAlternativa->imagen2 !== null)
                        <img src="<?= url('storage/' . $actividadAlternativa->imagen2); ?>" alt="Imagen Actividad - {{ $actividadAlternativa->titulo }}" class="mb-4">
                        @else
                        <p class="roboto-flex azul-principal">No se ha encontrado la imagen, puede que haya habido un error al cargarla. Por favor, vuelve a intentarlo.</p>
                        @endif
                        <input type="file" id="imagen2" name="imagen2" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white" value="{{ old('imagen2', $actividadAlternativa->imagen2) }}" @error('imagen2') aria-describedby="error-imagen2" aria-invalid="true" @enderror>
                        @error('imagen2')
                        <div class="text-danger" id="error-imagen2">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Imagen 3 -->
                    <div class="space-y-2">
                        <label for="imagen3" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Tercera imagen</label>
                        @if($actividadAlternativa->imagen3 !== null)
                        <img src="<?= url('storage/' . $actividadAlternativa->imagen3); ?>" alt="Imagen Actividad - {{ $actividadAlternativa->titulo }}" class="mb-4">
                        @else
                        <p>No se ha encontrado la imagen, puede que haya habido un error al cargarla. Por favor, vuelve a intentarlo.</p>
                        @endif
                        <input type="file" id="imagen3" name="imagen3" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white" value="{{ old('imagen3', $actividadAlternativa->imagen3) }}" @error('imagen3') aria-describedby="error-imagen3" aria-invalid="true" @enderror>
                        @error('imagen3')
                        <div class="text-danger" id="error-imagen3">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Botón enviar -->
                    <div class="flex gap-2 pt-4" data-id="25">
                        <button type="submit" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" data-id="27">Editar</button>
                        <a href="{{ route('alternativas.mostrar') }}" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</section>

@endsection