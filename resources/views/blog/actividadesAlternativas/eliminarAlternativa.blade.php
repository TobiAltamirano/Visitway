<h1>Eliminar Actividad alternativa</h1>

<p>¿Estás seguro de que quieres eliminar este actividadAlternativa?</p>
<p><strong>Título:</strong> {{ $actividadAlternativa->titulo }}</p>
<p><strong>Descripcion:</strong> {{ $actividadAlternativa->contenido }}</p>
<p><strong>Provincia:</strong> {{ $actividadAlternativa->provincia }}</p>

@if($actividadAlternativa->imagen1 !== null)
        <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Imagen Noticia - {{$actividadAlternativa->titulo }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif

<form action="{{ route('alternativas.eliminar.proceso', ['id' => $actividadAlternativa->id]) }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('alternativas.mostrar') }}">Cancelar</a>