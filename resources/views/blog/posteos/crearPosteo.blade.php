<section>
    <h1>Nuevo posteo</h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('posteos.crear.proceso') }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3" class="div-input-label">
            <label for="titulo" class="form-label">Título</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                class="form-control"
                maxlength="50"
                value="{{ old('titulo') }}"
                @error('titulo')
                aria-describedby="error-titulo"
                aria-invalid="true"
                @enderror
            >
            @error('titulo')
            <div class="text-danger" id="error-titulo">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido del posteo</label>
            <textarea
                id="contenido"
                name="contenido"
                class="form-control"
                rows="4"
                @error('contenido')
                aria-describedby="error-contenido"
                aria-invalid="true"
                @enderror
            >{{ old('contenido') }}</textarea>

            @error('contenido')
            <div class="text-danger" id="error-contenido">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="provincia" class="form-label">provincia:</label>
            <textarea
                id="provincia"
                name="provincia"
                class="form-control"
                rows="4"
                @error('provincia')
                aria-describedby="error-provincia"
                aria-invalid="true"
                @enderror
            >{{ old('provincia') }}</textarea>

            @error('provincia')
            <div class="text-danger" id="error-provincia">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="archivo" class="form-label">Imagen</label>
            <p>No es obligatorio</p>
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

        @error('archivo')
            <div class="text-danger" id="error-archivo">{{ $message }}</div>
        @enderror

        <div>
            <button type="submit">Crear</button>
        </div>

    </form>

</section>