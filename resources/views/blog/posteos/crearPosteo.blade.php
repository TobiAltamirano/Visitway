@extends('layouts.main')

@section('title', 'Crear Posteo')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Nuevo posteo</h1>

    @include('components.lineas-secundarias')

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container mx-auto max-w-4xl px-4 md:px-6">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold md:text-4xl roboto-flex azul-principal">Formulario de creación</h2>
                <form action="{{ route('posteos.crear.proceso') }}" method="post" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <!-- Título input -->
                    <div class="space-y-2">
                        <label for="titulo" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Título</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <input type="text" id="titulo" name="titulo" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" maxlength="50" value="{{ old('titulo') }}" @error('titulo') aria-describedby="error-titulo" aria-invalid="true" @enderror>
                        @error('titulo')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-titulo">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Contenido input -->
                    <div class="space-y-2">
                        <label for="contenido" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Contenido del posteo</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <textarea id="contenido" name="contenido" class="roboto-flex azul-principal flex w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 min-h-[200px]" rows="4" @error('contenido') aria-describedby="error-contenido" aria-invalid="true" @enderror>{{ old('contenido') }}</textarea>
                        @error('contenido')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-contenido">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Provincia -->
                    <div class="space-y-2">
                        <label for="provincia" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Provincia</label>
                        <p class="text-sm text-gray-500 azul-principal">Obligatorio</p>
                        <select id="provincia" name="provincia" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" @error('provincia') aria-describedby="error-provincia" aria-invalid="true" @enderror>
                            <option value="" disabled selected>Seleccione una provincia</option>
                            <option value="Buenos Aires" {{ old('provincia') == 'Buenos Aires' ? 'selected' : '' }}>Buenos Aires</option>
                            <option value="Catamarca" {{ old('provincia') == 'Catamarca' ? 'selected' : '' }}>Catamarca</option>
                            <option value="Chaco" {{ old('provincia') == 'Chaco' ? 'selected' : '' }}>Chaco</option>
                            <option value="Chubut" {{ old('provincia') == 'Chubut' ? 'selected' : '' }}>Chubut</option>
                            <option value="Cordoba" {{ old('provincia') == 'Córdoba' ? 'selected' : '' }}>Córdoba</option>
                            <option value="Corrientes" {{ old('provincia') == 'Corrientes' ? 'selected' : '' }}>Corrientes</option>
                            <option value="Entre Rios" {{ old('provincia') == 'Entre Ríos' ? 'selected' : '' }}>Entre Ríos</option>
                            <option value="Formosa" {{ old('provincia') == 'Formosa' ? 'selected' : '' }}>Formosa</option>
                            <option value="Jujuy" {{ old('provincia') == 'Jujuy' ? 'selected' : '' }}>Jujuy</option>
                            <option value="La Pampa" {{ old('provincia') == 'La Pampa' ? 'selected' : '' }}>La Pampa</option>
                            <option value="La Rioja" {{ old('provincia') == 'La Rioja' ? 'selected' : '' }}>La Rioja</option>
                            <option value="Mendoza" {{ old('provincia') == 'Mendoza' ? 'selected' : '' }}>Mendoza</option>
                            <option value="Misiones" {{ old('provincia') == 'Misiones' ? 'selected' : '' }}>Misiones</option>
                            <option value="Neuquen" {{ old('provincia') == 'Neuquén' ? 'selected' : '' }}>Neuquén</option>
                            <option value="Rio Negro" {{ old('provincia') == 'Río Negro' ? 'selected' : '' }}>Río Negro</option>
                            <option value="Salta" {{ old('provincia') == 'Salta' ? 'selected' : '' }}>Salta</option>
                            <option value="San Juan" {{ old('provincia') == 'San Juan' ? 'selected' : '' }}>San Juan</option>
                            <option value="San Luis" {{ old('provincia') == 'San Luis' ? 'selected' : '' }}>San Luis</option>
                            <option value="Santa Cruz" {{ old('provincia') == 'Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
                            <option value="Santa Fe" {{ old('provincia') == 'Santa Fe' ? 'selected' : '' }}>Santa Fe</option>
                            <option value="Santiago del Estero" {{ old('provincia') == 'Santiago del Estero' ? 'selected' : '' }}>Santiago del Estero</option>
                            <option value="Tierra del Fuego" {{ old('provincia') == 'Tierra del Fuego' ? 'selected' : '' }}>Tierra del Fuego</option>
                            <option value="Tucuman" {{ old('provincia') == 'Tucumán' ? 'selected' : '' }}>Tucumán</option>
                        </select>
                        @error('provincia')
                        <div class="roboto-flex rojo-principal text-sm mt-1" id="error-provincia">{{ $message }}</div>
                        @enderror

                        <!-- Imagen -->
                        <div class="space-y-2">
                            <label for="archivo" class="roboto-flex azul-principal text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Imagen</label>
                            <input type="file" id="archivo" name="archivo" class="roboto-flex azul-principal relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" value="{{ old('archivo') }}" @error('archivo') aria-describedby="error-archivo" aria-invalid="true" @enderror>
                            @error('archivo')
                            <div class="roboto-flex rojo-principal text-sm mt-1" id="error-archivo">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex gap-2 pt-4" data-id="25">
                            <button class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" type="submit" data-id="27">Crear posteo</button>
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