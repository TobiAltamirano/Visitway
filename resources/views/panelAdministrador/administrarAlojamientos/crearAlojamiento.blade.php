<h1>aca se crearan</h1>

<section>

<h1> Edición de Act. alternativa: </h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Porfavor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('administrador.alojamientos.crear.proceso') }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" class="div-input-label">
            <label for="nombre_alojamiento" class="form-label">Título</label>
            <input
                type="text"
                id="nombre_alojamiento"
                name="nombre_alojamiento"
                class="form-control"
                maxlength="50"
                value="{{ old('nombre_alojamiento') }}"
                @error('nombre_alojamiento')
                aria-describedby="error-nombre_alojamiento"
                aria-invalid="true"
                @enderror
            >
            @error('nombre_alojamiento')
            <div class="text-danger" id="error-nombre_alojamiento">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="imagen_alojamiento" class="form-label">Imagen</label>
            <input
                type="file"
                id="imagen_alojamiento"
                name="imagen_alojamiento"
                class="form-control"
                value="{{ old('imagen_alojamiento') }}"
                @error('imagen_alojamiento')
                aria-describedby="error-imagen_alojamiento"
                aria-invalid="true"
                @enderror
            >
            @error('imagen_alojamiento')
            <div class="text-danger" id="error-imagen_alojamiento">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="precio_alojamiento" class="form-label">Precio</label>
            <input
                type="number"
                id="precio_alojamiento"
                name="precio_alojamiento"
                class="form-control"
                value="{{ old('precio_alojamiento') }}"
                @error('precio_alojamiento')
                aria-describedby="error-precio_alojamiento"
                aria-invalid="true"
                @enderror
            >
            @error('precio_alojamiento')
            <div class="text-danger" id="error-precio_alojamiento">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="horarios_alojamiento" class="form-label">Horarios</label>
            <textarea
                id="horarios_alojamiento"
                name="horarios_alojamiento"
                class="form-control"
                rows="4"
                @error('horarios_alojamiento')
                aria-describedby="error-horarios_alojamiento"
                aria-invalid="true"
                @enderror
            >{{ old('horarios_alojamiento') }}</textarea>
            @error('horarios_alojamiento')
            <div class="text-danger" id="error-horarios_alojamiento">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ubicacion_alojamiento" class="form-label">ubicacion</label>
            <textarea
                id="ubicacion_alojamiento"
                name="ubicacion_alojamiento"
                class="form-control"
                rows="4"
                @error('ubicacion_alojamiento')
                aria-describedby="error-ubicacion_alojamiento"
                aria-invalid="true"
                @enderror
            >{{ old('ubicacion_alojamiento') }}</textarea>
            @error('ubicacion_alojamiento')
            <div class="text-danger" id="error-ubicacion_alojamiento">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contacto_alojamiento" class="form-label">contacto</label>
            <textarea
                id="contacto_alojamiento"
                name="contacto_alojamiento"
                class="form-control"
                rows="4"
                @error('contacto_alojamiento')
                aria-describedby="error-contacto_alojamiento"
                aria-invalid="true"
                @enderror
            >{{ old('contacto_alojamiento') }}</textarea>
            @error('contacto_alojamiento')
            <div class="text-danger" id="error-contacto_alojamiento">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="url_sitio_web_alojamiento" class="form-label">url_sitio_web</label>
            <textarea
                id="url_sitio_web_alojamiento"
                name="url_sitio_web_alojamiento"
                class="form-control"
                rows="4"
                @error('url_sitio_web_alojamiento')
                aria-describedby="error-url_sitio_web_alojamiento"
                aria-invalid="true"
                @enderror
            >{{ old('url_sitio_web_alojamiento') }}</textarea>
            @error('url_sitio_web_alojamiento')
            <div class="text-danger" id="error-url_sitio_web_alojamiento">{{ $message }}</div>
            @enderror
        </div>

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
        name="tiene_wifi"
        value="0"
    >
    <input
        type="checkbox"
        id="tiene_wifi"
        name="tiene_wifi"
        class="form-check-input"
        value="1"
        {{ old('tiene_wifi') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="tiene_wifi">Wifi</label>
</div>

        <div class="mb-3 form-check">
    <input
        type="hidden"
        name="tiene_estacionamiento"
        value="0"
    >
    <input
        type="checkbox"
        id="tiene_estacionamiento"
        name="tiene_estacionamiento"
        class="form-check-input"
        value="1"
        {{ old('tiene_estacionamiento') ? 'checked' : '' }}
    >
    <label class="form-check-label" for="tiene_estacionamiento">Estacionamiento</label>
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
    <label class="form-check-label" for="acepta_mascotas">Mascotas</label>
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
    <label class="form-check-label" for="acepta_debito">Debito</label>
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
    <label class="form-check-label" for="acepta_credito">Credito</label>
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
            <div class="text-danger" id="error-provincia_id">{{ $message }}</div>
            @enderror

        <div class="mb-3">
            <label for="tipo_alojamiento_id" class="form-label">Tipo Alojamiento</label>
            <select 
                id="tipo_alojamiento_id" 
                name="tipo_alojamiento_id"
                class="form-control"
            >
                <option value="">Selecciona una provincia
                @foreach($tiposAlojamiento as $tipo)
                    <option
                        value="{{ $tipo->id_tipo_alojamiento }}"
                        @selected( $tipo->id_tipo_alojamiento == old('id_tipo_alojamiento'))
                    >
                        {{ $tipo->nombre_tipo_alojamiento }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('tipo_alojamiento_id')
            <div class="text-danger" id="error-tipo_alojamiento_id">{{ $message }}</div>
            @enderror

    

        <div>
            <button type="submit">Crear</button>
        </div>


    </form>

</section>