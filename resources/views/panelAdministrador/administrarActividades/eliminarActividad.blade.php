<h1>Eliminar Actividad</h1>

<p>¿Estás seguro de que quieres eliminar este actividad?</p>
<p><strong>Título:</strong> {{ $actividad->nombre_actividad }}</p>
@if($actividad->imagen_actividad !== null)
        <img src="{{ asset('storage/' . $actividad->imagen_actividad) }}" alt="Imagen Noticia - {{$actividad->nombre_actividad }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif

<form action="{{ route('administrador.actividades.eliminar.procesar', ['id' => $actividad->id_actividad]) }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('administrador.actividades') }}">Cancelar</a> 