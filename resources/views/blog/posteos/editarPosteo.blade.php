<section>

<h1> Edición de posteo: </h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('posteos.actualizar', $posteo->id) }}" class="form-panel" method="post" enctype="multipart/form-data">
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

    </form>

</section>