


    <h1 class="h1-panel">Panel Administrador</h1>

    <h2 class="text-control">Crear Actividad</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('administrador.actividades.crear.proceso') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nombre_actividad" class="form-label">Nombre de la actividad</label>
            <input
                type="text"
                id="nombre_actividad"
                name="nombre_actividad"
                class="form-control"
                value="{{ old('nombre_actividad') }}"
            >
        </div>
        @error('nombre_actividad')
            <div class="text-danger" id="error-nombre_actividad">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="imagen_actividad" class="form-label">Imagen de la actividad</label>
            <input
                type="file"
                id="imagen_actividad"
                name="imagen_actividad"
                class="form-control"
                accept="image/*"
            >
        </div>
        @error('imagen_actividad')
            <div class="text-danger" id="error-imagen_actividad">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="descripcion_actividad" class="form-label">Descripción de la actividad</label>
            <textarea
                id="descripcion_actividad"
                name="descripcion_actividad"
                class="form-control"
            >{{ old('descripcion_actividad') }}</textarea>
        </div>
        @error('descripcion_actividad')
            <div class="text-danger" id="error-descripcion_actividad">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="precio_actividad" class="form-label">Precio de la actividad</label>
            <input
                type="number"
                id="precio_actividad"
                name="precio_actividad"
                class="form-control"
                value="{{ old('precio_actividad') }}"
            >
        </div>
        @error('precio_actividad')
            <div class="text-danger" id="error-precio_actividad">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="horarios_actividad" class="form-label">Horarios de la actividad</label>
            <textarea
                id="horarios_actividad"
                name="horarios_actividad"
                class="form-control"
            >{{ old('horarios_actividad') }}</textarea>
        </div>
        @error('horarios_actividad')
            <div class="text-danger" id="error-horarios_actividad">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="ubicacion_actividad" class="form-label">Ubicación de la actividad</label>
            <textarea
                id="ubicacion_actividad"
                name="ubicacion_actividad"
                class="form-control"
            >{{ old('ubicacion_actividad') }}</textarea>
        </div>
        @error('ubicacion_actividad')
            <div class="text-danger" id="error-ubicacion_actividad">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="contacto_actividad" class="form-label">Contacto de la actividad</label>
            <textarea
                id="contacto_actividad"
                name="contacto_actividad"
                class="form-control"
            >{{ old('contacto_actividad') }}</textarea>
        </div>
        @error('contacto_actividad')
            <div class="text-danger" id="error-contacto_actividad">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="url_sitio_web_actividad" class="form-label">URL del sitio web de la actividad</label>
            <input
                type="text"
                id="url_sitio_web_actividad"
                name="url_sitio_web_actividad"
                class="form-control"
                value="{{ old('url_sitio_web_actividad') }}"
            >
        </div>
        @error('url_sitio_web_actividad')
            <div class="text-danger" id="error-url_sitio_web_actividad">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="duracion_actividad" class="form-label">Duración de la actividad (en minutos)</label>
            <input
                type="number"
                id="duracion_actividad"
                name="duracion_actividad"
                class="form-control"
                value="{{ old('duracion_actividad') }}"
            >
        </div>
        @error('duracion_actividad')
            <div class="text-danger" id="error-duracion_actividad">{{ $message }}</div>
            @enderror

        <div class="mb-3 form-check">
    <input
        type="hidden"
        name="tiene_descuentos_ofertas"
        value="0"
    >
    <input
        type="checkbox"
        id="tiene_descuentos_ofertas"
        name="tiene_descuentos_ofertas"
        class="form-check-input"
        value="1"
        {{ old('tiene_descuentos_ofertas') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="tiene_descuentos_ofertas">Tiene descuentos u ofertas</label>
</div>

<div class="mb-3 form-check">
    <input
        type="hidden"
        name="es_accesible"
        value="0"
    >
    <input
        type="checkbox"
        id="es_accesible"
        name="es_accesible"
        class="form-check-input"
        value="1"
        {{ old('es_accesible') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="es_accesible">Es accesible</label>
</div>

<div class="mb-3 form-check">
    <input
        type="hidden"
        name="es_gratis"
        value="0"
    >
    <input
        type="checkbox"
        id="es_gratis"
        name="es_gratis"
        class="form-check-input"
        value="1"
        {{ old('es_gratis') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="es_gratis">Es gratis</label>
</div>

<div class="mb-3 form-check">
    <input
        type="hidden"
        name="acepta_mascotas"
        value="0"
    >
    <input
        type="checkbox"
        id="acepta_mascotas"
        name="acepta_mascotas"
        class="form-check-input"
        value="1"
        {{ old('acepta_mascotas') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="acepta_mascotas">Acepta mascotas</label>
</div>

<div class="mb-3 form-check">
    <input
        type="hidden"
        name="acepta_debito"
        value="0"
    >
    <input
        type="checkbox"
        id="acepta_debito"
        name="acepta_debito"
        class="form-check-input"
        value="1"
        {{ old('acepta_debito') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="acepta_debito">Acepta débito</label>
</div>

<div class="mb-3 form-check">
    <input
        type="hidden"
        name="acepta_credito"
        value="0"
    >
    <input
        type="checkbox"
        id="acepta_credito"
        name="acepta_credito"
        class="form-check-input"
        value="1"
        {{ old('acepta_credito') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="acepta_credito">Acepta crédito</label>
</div>

<div class="mb-3 form-check">
    <input
        type="hidden"
        name="acepta_medios_digitales"
        value="0"
    >
    <input
        type="checkbox"
        id="acepta_medios_digitales"
        name="acepta_medios_digitales"
        class="form-check-input"
        value="1"
        {{ old('acepta_medios_digitales') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="acepta_medios_digitales">Acepta medios digitales</label>
</div>

<div class="mb-3">
            <label for="provincia_id" class="form-label">Provincia</label>
            <select 
                id="provincia_id" 
                name="provincia_id" 
                class="form-control"
            >
                <option value="">Selecciona una provincia
                @foreach($provincias as $provincia)
                    <option
                        value="{{ $provincia->id_provincia }}"
                        @selected( $provincia->id_provincia == old('id_provincia'))
                    >
                        {{ $provincia->nombre_provincia }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('provincia_id')
            <div class="text-danger" id="provincia_id">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="tipo_actividad_id" class="form-label">Tipo de actividad</label>
            <select 
                id="tipo_actividad_id" 
                name="tipo_actividad_id"
                class="form-control"
            >
                <option value="">Selecciona un tipo de actividad</option>
                @foreach($tiposActividad as $tipo)
                    <option
                        value="{{ $tipo->id_tipo_actividad }}"
                        {{ old('tipo_actividad_id') == $tipo->id_tipo_actividad ? 'selected' : '' }}
                    >
                        {{ $tipo->nombre_tipo_actividad }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('tipo_actividad_id')
            <div class="text-danger" id="error-tipo_actividad_id">{{ $message }}</div>
            @enderror

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
