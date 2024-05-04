<section>
    <h1>Nueva actividad alternativa</h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Por favor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('alternativas.crear.proceso') }}" class="form-panel" method="post" enctype="multipart/form-data">
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
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea
                id="descripcion"
                name="descripcion"
                class="form-control"
                rows="4"
                @error('descripcion')
                aria-describedby="error-descripcion"
                aria-invalid="true"
                @enderror
            >{{ old('descripcion') }}</textarea>

            @error('descripcion')
            <div class="text-danger" id="error-descripcion">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="provincia" class="form-label">Provincia</label>
            <input
                type="text"
                id="provincia"
                name="provincia"
                class="form-control"
                value="{{ old('provincia') }}"
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
                value="{{ old('localidad') }}"
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
                value="{{ old('direccion') }}"
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
            <label for="imagen1" class="form-label">Imagen</label>
            <p>Obligatorio</p>
            <input
                type="file"
                id="imagen1"
                name="imagen1"
                class="form-control"
                value="{{ old('imagen1') }}"
                @error('imagen1')
                aria-describedby="error-imagen1"
                aria-invalid="true"
                @enderror
            >
        </div>
        @error('imagen1')
            <div class="text-danger" id="error-imagen1">{{ $message }}</div>
            @enderror

        <div>
            <button type="submit">Crear</button>
        </div>
    </form>
</section>