@extends('layouts.main')

@section('title', 'Editar Posteo')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Editar posteo<br><span class="azul-principal">"{{$posteo->titulo}}"</span></h1>

    @include('components.lineas-secundarias')

    <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container mx-auto max-w-4xl px-4 md:px-6">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold md:text-4xl roboto-flex azul-principal">Formulario de edición</h2>

                @if($errors->any())
                <div class="mb-3 roboto-flex rojo-principal">Ha ocurrido uno o más errores en la validación. Por favor, revisa los campos nuevamente.</div>
                @endif

                <form action="{{ route('posteos.actualizar', $posteo->id) }}" method="post" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <!-- Título input -->
                    <div class="space-y-2">
                        <label for="titulo" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Título</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="titulo" name="titulo" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" maxlength="50" value="{{ old('titulo', $posteo->titulo) }}" @error('titulo') aria-describedby="error-titulo" aria-invalid="true" @enderror>
                        @error('titulo')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-titulo">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contenido input -->
                    <div class="space-y-2">
                        <label for="contenido" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Contenido del posteo</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <textarea id="contenido" name="contenido" class="roboto-flex azul-principal flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[200px]" rows="4" @error('contenido') aria-describedby="error-contenido" aria-invalid="true" @enderror>{{ old('contenido', $posteo->contenido) }}</textarea>
                        @error('contenido')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-contenido">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Provincia -->
                    <div class="space-y-2">
                        <label for="provincia" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Provincia</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="provincia" name="provincia" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('provincia') aria-describedby="error-provincia" aria-invalid="true" @enderror>
                            <option value="" disabled>Seleccione una provincia</option>
                            <option value="Buenos Aires" {{ old('provincia', $posteo->provincia) == 'Buenos Aires' ? 'selected' : '' }}>Buenos Aires</option>
                            <option value="Catamarca" {{ old('provincia', $posteo->provincia) == 'Catamarca' ? 'selected' : '' }}>Catamarca</option>
                            <option value="Chaco" {{ old('provincia', $posteo->provincia) == 'Chaco' ? 'selected' : '' }}>Chaco</option>
                            <option value="Chubut" {{ old('provincia', $posteo->provincia) == 'Chubut' ? 'selected' : '' }}>Chubut</option>
                            <option value="Cordoba" {{ old('provincia', $posteo->provincia) == 'Córdoba' ? 'selected' : '' }}>Córdoba</option>
                            <option value="Corrientes" {{ old('provincia', $posteo->provincia) == 'Corrientes' ? 'selected' : '' }}>Corrientes</option>
                            <option value="Entre Rios" {{ old('provincia', $posteo->provincia) == 'Entre Ríos' ? 'selected' : '' }}>Entre Ríos</option>
                            <option value="Formosa" {{ old('provincia', $posteo->provincia) == 'Formosa' ? 'selected' : '' }}>Formosa</option>
                            <option value="Jujuy" {{ old('provincia', $posteo->provincia) == 'Jujuy' ? 'selected' : '' }}>Jujuy</option>
                            <option value="La Pampa" {{ old('provincia', $posteo->provincia) == 'La Pampa' ? 'selected' : '' }}>La Pampa</option>
                            <option value="La Rioja" {{ old('provincia', $posteo->provincia) == 'La Rioja' ? 'selected' : '' }}>La Rioja</option>
                            <option value="Mendoza" {{ old('provincia', $posteo->provincia) == 'Mendoza' ? 'selected' : '' }}>Mendoza</option>
                            <option value="Misiones" {{ old('provincia', $posteo->provincia) == 'Misiones' ? 'selected' : '' }}>Misiones</option>
                            <option value="Neuquen" {{ old('provincia', $posteo->provincia) == 'Neuquén' ? 'selected' : '' }}>Neuquén</option>
                            <option value="Rio Negro" {{ old('provincia', $posteo->provincia) == 'Río Negro' ? 'selected' : '' }}>Río Negro</option>
                            <option value="Salta" {{ old('provincia', $posteo->provincia) == 'Salta' ? 'selected' : '' }}>Salta</option>
                            <option value="San Juan" {{ old('provincia', $posteo->provincia) == 'San Juan' ? 'selected' : '' }}>San Juan</option>
                            <option value="San Luis" {{ old('provincia', $posteo->provincia) == 'San Luis' ? 'selected' : '' }}>San Luis</option>
                            <option value="Santa Cruz" {{ old('provincia', $posteo->provincia) == 'Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
                            <option value="Santa Fe" {{ old('provincia', $posteo->provincia) == 'Santa Fe' ? 'selected' : '' }}>Santa Fe</option>
                            <option value="Santiago del Estero" {{ old('provincia', $posteo->provincia) == 'Santiago del Estero' ? 'selected' : '' }}>Santiago del Estero</option>
                            <option value="Tierra del Fuego" {{ old('provincia', $posteo->provincia) == 'Tierra del Fuego' ? 'selected' : '' }}>Tierra del Fuego</option>
                            <option value="Tucuman" {{ old('provincia', $posteo->provincia) == 'Tucumán' ? 'selected' : '' }}>Tucumán</option>
                        </select>
                        @error('provincia')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-provincia">{{ $message }}</div>
                        @enderror

                        <!-- Imagen -->
                        <div class="space-y-2">
                            <label for="archivo" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Imagen</label>
                            @if($posteo->imagen1 !== null)
                            <img src="{{ asset('storage/' . $posteo->imagen1) }}" alt="Imagen Posteo - {{$posteo->titulo }}" class="mb-4">
                            @else
                            <p>No se ha encontrado la imagen, puede que haya habido un error al cargarla. Por favor, vuelve a intentarlo.</p>
                            @endif
                            <input type="file" id="archivo" name="archivo" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('archivo', $posteo->archivo) }}" @error('archivo') aria-describedby="error-archivo" aria-invalid="true" @enderror>
                            @error('archivo')
                            <div class="roboto-flex rojo-principal text-sm mt-1" id="error-archivo">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex gap-2 pt-4" data-id="25">
                            <button class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" type="submit" data-id="27">Editar posteo</button>
                            <a href="{{ route('posteos.mostrar') }}" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                                Cancelar
                            </a>
                        </div>
                </form>
            </div>
        </div>
    </section>

</section>

@endsection