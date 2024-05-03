<h1>Eliminar Alojamiento</h1>

<p>¿Estás seguro de que quieres eliminar este alojamiento?</p>
<p><strong>Título:</strong> {{ $alojamiento->nombre_alojamiento }}</p>
@if($alojamiento->imagen_alojamiento !== null)
        <img src="{{ asset('storage/' . $alojamiento->imagen_alojamiento) }}" alt="Imagen Noticia - {{$alojamiento->nombre_alojamiento }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif

<form action="{{ route('administrador.alojamientos.eliminar.procesar', ['id' => $alojamiento->id_alojamiento]) }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('administrador.alojamientos') }}">Cancelar</a>