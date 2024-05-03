<section>

<h1> Edición de Act. alternativa: </h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('administrador.alojamientos.editar.proceso', $alojamiento->id_alojamiento) }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" class="div-input-label">
            <label for="nombre_alojamiento" class="form-label">Título</label>
            <input
                type="text"
                id="nombre_alojamiento"
                name="nombre_alojamiento"
                class="form-control"
                maxlength="50"
                value="{{ old('nombre_alojamiento', $alojamiento->nombre_alojamiento) }}"
                @error('nombre_alojamiento')
                aria-describedby="error-nombre_alojamiento"
                aria-invalid="true"
                @enderror
            >
            @error('nombre_alojamiento')
            <div class="text-danger" id="error-nombre_alojamiento">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">editar alt</button>
        </div>

    </form>

</section>