<h1>Crear Local Gastronómico</h1>

<section>

    <h1>Edición de Act. alternativa:</h1>

    @if($errors->any())
    <div class="mb-3 text-danger">Ha ocurrido uno o más errores en la validación. Por favor, revisa los campos nuevamente.</div>
    @endif

    <form action="{{ route('administrador.locales_gastronomicos.crear.proceso') }}" class="form-panel" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3" class="div-input-label">
            <label for="nombre_local_gastronomico" class="form-label">Nombre</label>
            <input
                type="text"
                id="nombre_local_gastronomico"
                name="nombre_local_gastronomico"
                class="form-control"
                maxlength="255"
                value="{{ old('nombre_local_gastronomico') }}"
                @error('nombre_local_gastronomico')
                aria-describedby="error-nombre_local_gastronomico"
                aria-invalid="true"
                @enderror
            >
            @error('nombre_local_gastronomico')
            <div class="text-danger" id="error-nombre_local_gastronomico">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="imagen_local_gastronomico" class="form-label">Imagen</label>
            <input
                type="file"
                id="imagen_local_gastronomico"
                name="imagen_local_gastronomico"
                class="form-control"
                value="{{ old('imagen_local_gastronomico') }}"
                @error('imagen_local_gastronomico')
                aria-describedby="error-imagen_local_gastronomico"
                aria-invalid="true"
                @enderror
            >
            @error('imagen_local_gastronomico')
            <div class="text-danger" id="error-imagen_local_gastronomico">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="horarios_local_gastronomico" class="form-label">Horarios</label>
            <textarea
                id="horarios_local_gastronomico"
                name="horarios_local_gastronomico"
                class="form-control"
                rows="4"
                @error('horarios_local_gastronomico')
                aria-describedby="error-horarios_local_gastronomico"
                aria-invalid="true"
                @enderror
            >{{ old('horarios_local_gastronomico') }}</textarea>
            @error('horarios_local_gastronomico')
            <div class="text-danger" id="error-horarios_local_gastronomico">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ubicacion_local_gastronomico" class="form-label">Ubicación</label>
            <textarea
                id="ubicacion_local_gastronomico"
                name="ubicacion_local_gastronomico"
                class="form-control"
                rows="4"
                @error('ubicacion_local_gastronomico')
                aria-describedby="error-ubicacion_local_gastronomico"
                aria-invalid="true"
                @enderror
            >{{ old('ubicacion_local_gastronomico') }}</textarea>
            @error('ubicacion_local_gastronomico')
            <div class="text-danger" id="error-ubicacion_local_gastronomico">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="contacto_local_gastronomico" class="form-label">Contacto</label>
            <textarea
                id="contacto_local_gastronomico"
                name="contacto_local_gastronomico"
                class="form-control"
                rows="4"
                @error('contacto_local_gastronomico')
                aria-describedby="error-contacto_local_gastronomico"
                aria-invalid="true"
                @enderror
            >{{ old('contacto_local_gastronomico') }}</textarea>
            @error('contacto_local_gastronomico')
            <div class="text-danger" id="error-contacto_local_gastronomico">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="url_sitio_web_local_gastronomico" class="form-label">URL del Sitio Web</label>
            <textarea
                id="url_sitio_web_local_gastronomico"
                name="url_sitio_web_local_gastronomico"
                class="form-control"
                rows="4"
                @error('url_sitio_web_local_gastronomico')
                aria-describedby="error-url_sitio_web_local_gastronomico"
                aria-invalid="true"
                @enderror
            >{{ old('url_sitio_web_local_gastronomico') }}</textarea>
            @error('url_sitio_web_local_gastronomico')
            <div class="text-danger" id="error-url_sitio_web_local_gastronomico">{{ $message }}</div>
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
            <label class="form-check-label" for="tiene_wifi">wifi</label>
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

    <div class="mb-3 form-check">
        <input
            type="hidden"
            name="apto_vegetarianos"
            value="0"
        >
        <input
            type="checkbox"
            id="apto_vegetarianos"
            name="apto_vegetarianos"
            class="form-check-input"
            value="1"
            {{ old('apto_vegetarianos') ? 'checked' : '' }}
        >
        <label class="form-check-label" for="apto_vegetarianos">Vegetarianos</label>
    </div>

    <div class="mb-3 form-check">
        <input
            type="hidden"
            name="apto_veganos"
            value="0"
        >
        <input
            type="checkbox"
            id="apto_veganos"
            name="apto_veganos"
            class="form-check-input"
            value="1"
            {{ old('apto_veganos') ? 'checked' : '' }}
        >
        <label class="form-check-label" for="apto_veganos">Veganos</label>
    </div>

    <div class="mb-3 form-check">
        <input
            type="hidden"
            name="apto_sin_tacc"
            value="0"
        >
        <input
            type="checkbox"
            id="apto_sin_tacc"
            name="apto_sin_tacc"
            class="form-check-input"
            value="1"
            {{ old('apto_sin_tacc') ? 'checked' : '' }}
        >
        <label class="form-check-label" for="apto_sin_tacc">Sin TACC</label>
    </div>

    <div class="mb-3 form-check">
        <input
            type="hidden"
            name="apto_intolerantes_lactosa"
            value="0"
        >
        <input
            type="checkbox"
            id="apto_intolerantes_lactosa"
            name="apto_intolerantes_lactosa"
            class="form-check-input"
            value="1"
            {{ old('apto_intolerantes_lactosa') ? 'checked' : '' }}
        >
        <label class="form-check-label" for="apto_intolerantes_lactosa">Sin TACC</label>
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
            <label for="tipo_gastronomia_id" class="form-label">Tipo Gastronomia</label>
            <select 
                id="tipo_gastronomia_id" 
                name="tipo_gastronomia_id"
                class="form-control"
            >
                <option value="">Selecciona un tipo local
                @foreach($tiposGastronomia as $tipo)
                    <option
                        value="{{ $tipo->id_tipo_gastronomia }}"
                        @selected( $tipo->id_tipo_gastronomia == old('id_tipo_gastronomia'))
                    >
                        {{ $tipo->nombre_tipo_gastronomia }}
                    </option>
                @endforeach
            </select>
        </div>
        @error('tipo_gastronomia_id')
            <div class="text-danger" id="error-tipo_gastronomia_id">{{ $message }}</div>
            @enderror

        <div>
            <button type="submit">Crear</button>
        </div>
    </form>

</section>
