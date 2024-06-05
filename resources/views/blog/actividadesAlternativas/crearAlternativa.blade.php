@extends('layouts.main')

@section('title', 'Crear Actividad Alternativa')

@section('content')

<section>
    
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Crear actividad alternativa</h1>

    @include('components.lineas-secundarias')

    <div class="mt-12">
        <div>
            <a href="{{ route('alternativas.mostrar') }}" class="roboto-flex rojo-principal flex justify-center hover:font-bold">Cancelar</a>
        </div>
    </div>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Por favor, revisa los campos nuevamente.</div>
    @endif

    <div class="mx-auto block max-w-md rounded-lg bg-white p-6 shadow-4 dark:bg-surface-dark mt-14 mb-14">
        <form action="{{ route('alternativas.crear.proceso') }}" class="form-panel" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <!-- Título input -->
            <div class="mb-4">
                <label for="titulo" class="leading-7 text-sm text-gray-600">Título</label>
                <input type="text" id="titulo" name="titulo" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="50" value="{{ old('titulo') }}" @error('titulo') aria-describedby="error-titulo" aria-invalid="true" @enderror>
                @error('titulo')
                <div class="text-red-500 text-sm mt-1" id="error-titulo">{{ $message }}</div>
                @enderror
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="descripcion" class="leading-7 text-sm text-gray-600">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" rows="4" @error('descripcion') aria-describedby="error-descripcion" aria-invalid="true" @enderror>{{ old('descripcion') }}</textarea>
                @error('descripcion')
                <div class="text-red-500 text-sm mt-1" id="error-descripcion">{{ $message }}</div>
                @enderror
            </div>

            <!-- Provincia -->
            <div class="mb-4">
                <label for="provincia" class="leading-7 text-sm text-gray-600">Provincia</label>
                <select id="provincia" name="provincia" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" @error('provincia') aria-describedby="error-provincia" aria-invalid="true" @enderror>
                    <option value="" disabled selected>Seleccione una provincia</option>
                    <option value="provincia1" {{ old('provincia') == 'provincia1' ? 'selected' : '' }}>Provincia 1</option>
                    <option value="provincia2" {{ old('provincia') == 'provincia2' ? 'selected' : '' }}>Provincia 2</option>
                    <option value="provincia3" {{ old('provincia') == 'provincia3' ? 'selected' : '' }}>Provincia 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
                @error('provincia')
                <div class="text-danger" id="error-provincia">{{ $message }}</div>
                @enderror
            </div>

            <!-- Localidad -->
            <div class="mb-4">
                <label for="localidad" class="leading-7 text-sm text-gray-600">Localidad</label>
                <input type="text" id="localidad" name="localidad" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="50" value="{{ old('localidad') }}" @error('localidad') aria-describedby="error-localidad" aria-invalid="true" @enderror>
                @error('localidad')
                <div class="text-red-500 text-sm mt-1" id="error-localidad">{{ $message }}</div>
                @enderror
            </div>

            <!-- Dirección -->
            <div class="mb-4">
                <label for="direccion" class="leading-7 text-sm text-gray-600">Dirección</label>
                <input type="text" id="direccion" name="direccion" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="50" value="{{ old('direccion') }}" @error('direccion') aria-describedby="error-direccion" aria-invalid="true" @enderror>
                @error('direccion')
                <div class="text-red-500 text-sm mt-1" id="error-direccion">{{ $message }}</div>
                @enderror
            </div>

            <!-- Imagen -->
            <div class="mb-4">
                <label for="imagen1" class="leading-7 text-sm text-gray-600">Imagen</label>
                <p class="text-sm text-gray-500">Obligatorio</p>
                <input type="file" id="imagen1" name="imagen1" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('imagen1') }}" @error('imagen1') aria-describedby="error-imagen1" aria-invalid="true" @enderror>
                @error('imagen1')
                <div class="text-red-500 text-sm mt-1" id="error-imagen1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit button -->
            <div>
                <button type="submit" class="filtrar-boton w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-indigo-200 transition duration-200 ease-in-out">Crear</button>
            </div>
        </form>
    </div>
</section>

@endsection