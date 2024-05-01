<section>

<h1> Edición de Act. alternativa: </h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('alternativas.actualizar', $actividadAlternativa->id) }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" class="div-input-label">
            <label for="titulo" class="form-label">Título</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                class="form-control"
                maxlength="50"
                value="{{ old('titulo', $actividadAlternativa->titulo) }}"
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
            <label for="descripcion" class="form-label">descripcion:</label>
            <input
                type="text"
                id="descripcion"
                name="descripcion"
                class="form-control"
                value="{{ old('descripcion', $actividadAlternativa->descripcion) }}"
                @error('descripcion')
                aria-describedby="error-descripcion"
                aria-invalid="true"
                @enderror
            >
            @error('descripcion')
            <div class="text-danger" id="error-descripcion">{{ $message }}</div>
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
                value="{{ old('provincia', $actividadAlternativa->provincia) }}"
                @error('provincia')
                aria-describedby="error-provincia"
                aria-invalid="true"
                @enderror
            >
            @error('provincia')
            <div class="text-danger" id="error-provincia">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" class="div-input-label">
            <label for="localidad" class="form-label">Localidad:</label>
            <input
                type="text"
                id="localidad"
                name="localidad"
                class="form-control"
                maxlength="50"
                value="{{ old('localidad', $actividadAlternativa->localidad) }}"
                @error('localidad')
                aria-describedby="error-localidad"
                aria-invalid="true"
                @enderror
            >
            @error('localidad')
            <div class="text-danger" id="error-localidad">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3" class="div-input-label">
            <label for="direccion" class="form-label">Direccion:</label>
            <input
                type="text"
                id="direccion"
                name="direccion"
                class="form-control"
                maxlength="50"
                value="{{ old('direccion', $actividadAlternativa->direccion) }}"
                @error('direccion')
                aria-describedby="error-direccion"
                aria-invalid="true"
                @enderror
            >
            @error('direccion')
            <div class="text-danger" id="error-direccion">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="archivo" class="form-label">Imagen</label>
            <p>No es obligatorio</p>
            @if($actividadAlternativa->imagen1 !== null)
        <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Imagen Noticia - {{$actividadAlternativa->titulo }}" class="card-img-top">
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
            <button type="submit">editar alt</button>
        </div>

    </form>

</section>