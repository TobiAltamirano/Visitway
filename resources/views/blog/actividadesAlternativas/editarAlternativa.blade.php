@extends('layouts.main')

@section('title', 'Editar Actividad Alternativa')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Editar Actividad Alternativa<br><span class="azul-principal">"{{ $actividadAlternativa->titulo }}"</span></h1>

    @include('components.lineas-secundarias')

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Por favor, revisa los campos nuevamente.</div>
    @endif

    <div class="mt-12">
        <div>
            <a href="{{ route('alternativas.mostrar') }}" class="roboto-flex rojo-principal flex justify-center hover:font-bold">Cancelar</a>
        </div>
    </div>

    <div class="mx-auto block max-w-md rounded-lg bg-white p-6 shadow-4 dark:bg-surface-dark mt-14 mb-14">
        <form action="{{ route('alternativas.actualizar', $actividadAlternativa->id) }}" class="form-panel" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 div-input-label">
                <label for="titulo" class="leading-7 text-sm text-gray-600">Título</label>
                <input
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    type="text"
                    id="titulo"
                    name="titulo"
                    maxlength="50"
                    value="{{ old('titulo', $actividadAlternativa->titulo) }}"
                    @error('titulo') aria-describedby="error-titulo" aria-invalid="true" @enderror
                >
                @error('titulo')
                <div class="text-danger" id="error-titulo">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 div-input-label">
                <label for="descripcion" class="leading-7 text-sm text-gray-600">Descripción</label>
                <input
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    type="text"
                    id="descripcion"
                    name="descripcion"
                    value="{{ old('descripcion', $actividadAlternativa->descripcion) }}"
                    @error('descripcion') aria-describedby="error-descripcion" aria-invalid="true" @enderror
                >
                @error('descripcion')
                <div class="text-danger" id="error-descripcion">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="provincia" class="leading-7 text-sm text-gray-600">Provincia</label>
                <select 
                    id="provincia" 
                    name="provincia" 
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" 
                    @error('provincia') aria-describedby="error-provincia" aria-invalid="true" 
                    @enderror>
                    <option value="" disabled>Seleccione una provincia</option>
                    <option value="provincia1" {{ old('provincia', $actividadAlternativa->provincia) == 'provincia1' ? 'selected' : '' }}>Provincia 1</option>
                    <option value="provincia2" {{ old('provincia', $actividadAlternativa->provincia) == 'provincia2' ? 'selected' : '' }}>Provincia 2</option>
                    <option value="provincia3" {{ old('provincia', $actividadAlternativa->provincia) == 'provincia3' ? 'selected' : '' }}>Provincia 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
                @error('provincia')
                <div class="text-danger" id="error-provincia">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 div-input-label">
                <label for="localidad" class="leading-7 text-sm text-gray-600">Localidad</label>
                <input
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    type="text"
                    id="localidad"
                    name="localidad"
                    maxlength="50"
                    value="{{ old('localidad', $actividadAlternativa->localidad) }}"
                    @error('localidad') aria-describedby="error-localidad" aria-invalid="true" @enderror
                >
                @error('localidad')
                <div class="text-danger" id="error-localidad">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 div-input-label">
                <label for="direccion" class="leading-7 text-sm text-gray-600">Dirección</label>
                <input
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    type="text"
                    id="direccion"
                    name="direccion"
                    maxlength="50"
                    value="{{ old('direccion', $actividadAlternativa->direccion) }}"
                    @error('direccion') aria-describedby="error-direccion" aria-invalid="true" @enderror
                >
                @error('direccion')
                <div class="text-danger" id="error-direccion">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="archivo" class="leading-7 text-sm text-gray-600">Imagen</label>
                <p>No es obligatorio</p>
                @if($actividadAlternativa->imagen1 !== null)
                    <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Imagen Noticia - {{ $actividadAlternativa->titulo }}" class="card-img-top">
                @else
                    No se ha encontrado la imagen, puede que haya habido un error al cargarla. Por favor, vuelve a intentarlo.
                @endif
                <input
                    class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white"
                    type="file"
                    id="archivo"
                    name="archivo"
                    @error('archivo') aria-describedby="error-archivo" aria-invalid="true" @enderror
                >
                @error('archivo')
                <div class="text-danger" id="error-archivo">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="filtrar-boton w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-indigo-200 transition duration-200 ease-in-out">Editar</button>
            </div>
        </form>
    </div>

</section>

@endsection
