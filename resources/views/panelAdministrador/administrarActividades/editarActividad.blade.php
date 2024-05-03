<section>

<h1> Edición de Act. alternativa: </h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('administrador.actividades.editar.proceso', $actividad->id_actividad) }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" class="div-input-label">
            <label for="nombre_actividad" class="form-label">Título</label>
            <input
                type="text"
                id="nombre_actividad"
                name="nombre_actividad"
                class="form-control"
                maxlength="50"
                value="{{ old('nombre_actividad', $actividad->nombre_actividad) }}"
                @error('nombre_actividad')
                aria-describedby="error-nombre_actividad"
                aria-invalid="true"
                @enderror
            >
            @error('nombre_actividad')
            <div class="text-danger" id="error-nombre_actividad">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">editar alt</button>
        </div>

    </form>

</section>