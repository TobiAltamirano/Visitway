@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Editar posteo<br><span class="azul-principal">"{{$posteo->titulo}}"</span></h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <div class="mx-auto block max-w-md rounded-lg bg-white p-6 shadow-4 dark:bg-surface-dark">
    <form action="{{ route('posteos.actualizar', $posteo->id) }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        <!-- Título input -->
        <div class="mb-4">
            <label for="titulo" class="leading-7 text-sm text-gray-600">Título</label>
            <input type="text" id="titulo" name="titulo" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" maxlength="50" value="{{ old('titulo', $posteo->titulo) }}" @error('titulo') aria-describedby="error-titulo" aria-invalid="true" @enderror>
            @error('titulo')
            <div class="text-danger" id="error-titulo">{{ $message }}</div>
            @enderror
        </div>

        <!-- Contenido input -->
        <div class="mb-4">
            <label for="contenido" class="leading-7 text-sm text-gray-600">Contenido del posteo</label>
            <textarea id="contenido" name="contenido" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" rows="4" @error('contenido') aria-describedby="error-contenido" aria-invalid="true" @enderror>{{ old('contenido', $posteo->contenido) }}</textarea>
            @error('contenido')
            <div class="text-danger" id="error-contenido">{{ $message }}</div>
            @enderror
        </div>

        <!-- Provincia -->
        <div class="mb-4">
            <label for="provincia" class="leading-7 text-sm text-gray-600">Provincia</label>
            <select id="provincia" name="provincia" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" @error('provincia') aria-describedby="error-provincia" aria-invalid="true" @enderror>
                <option value="" disabled>Seleccione una provincia</option>
                <option value="provincia1" {{ old('provincia', $posteo->provincia) == 'provincia1' ? 'selected' : '' }}>Provincia 1</option>
                <option value="provincia2" {{ old('provincia', $posteo->provincia) == 'provincia2' ? 'selected' : '' }}>Provincia 2</option>
                <option value="provincia3" {{ old('provincia', $posteo->provincia) == 'provincia3' ? 'selected' : '' }}>Provincia 3</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>
            @error('provincia')
            <div class="text-danger" id="error-provincia">{{ $message }}</div>
            @enderror
        </div>

        <!-- Imagen -->
        <div class="mb-4">
            <label for="archivo" class="leading-7 text-sm text-gray-600">Imagen (No es obligatorio)</label>
            @if($posteo->imagen1 !== null)
                <img src="{{ asset('storage/' . $posteo->imagen1) }}" alt="Imagen Noticia - {{$posteo->titulo }}" class="card-img-top mb-4">
            @else
                <p>No se ha encontrado la imagen, puede que haya habido un error al cargarla. Por favor, vuelve a intentarlo.</p>
            @endif
            <input type="file" id="archivo" name="archivo" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg-transparent file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/70 dark:text-white  file:dark:text-white" value="{{ old('archivo') }}" @error('archivo') aria-describedby="error-archivo" aria-invalid="true" @enderror>
            @error('archivo')
            <div class="text-danger" id="error-archivo">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit button -->
        <div>
            <button type="submit" class="filtrar-boton w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-indigo-200 transition duration-200 ease-in-out">
                Editar
            </button>
        </div>
    </form>
</div>


    <!-- <form action="{{ route('posteos.actualizar', $posteo->id) }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" class="div-input-label">
            <label for="titulo" class="form-label">Título</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                class="form-control"
                maxlength="50"
                value="{{ old('titulo', $posteo->titulo) }}"
                @error('titulo')
                aria-describedby="error-titulo"
                aria-invalid="true"
                @enderror
            >
            @error('titulo')
            <div class="text-danger" id="error-titulo">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" class="div-input-label">
            <label for="contenido" class="form-label">Contenido:</label>
            <input
                type="text"
                id="contenido"
                name="contenido"
                class="form-control"
                value="{{ old('contenido', $posteo->contenido) }}"
                @error('contenido')
                aria-describedby="error-contenido"
                aria-invalid="true"
                @enderror
            >
            @error('contenido')
            <div class="text-danger" id="error-contenido">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" class="div-input-label">
            <label for="provincia" class="form-label">Provincia:</label>
            <input
                type="text"
                id="provincia"
                name="provincia"
                class="form-control"
                maxlength="50"
                value="{{ old('provincia', $posteo->provincia) }}"
                @error('provincia')
                aria-describedby="error-provincia"
                aria-invalid="true"
                @enderror
            >
            @error('provincia')
            <div class="text-danger" id="error-provincia">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="archivo" class="form-label">Imagen</label>
            <p>No es obligatorio</p>
            @if($posteo->imagen1 !== null)
        <img src="{{ asset('storage/' . $posteo->imagen1) }}" alt="Imagen Noticia - {{$posteo->titulo }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif
            <input
                type="file"
                id="archivo"
                name="archivo"
                class="form-control"
                value="{{ old('archivo') }}"
                @error('archivo')
                aria-describedby="error-archivo"
                aria-invalid="true"
                @enderror
            >
        </div>

        <div>
            <button type="submit">editar</button>
        </div>

    </form> -->

</section>

@endsection