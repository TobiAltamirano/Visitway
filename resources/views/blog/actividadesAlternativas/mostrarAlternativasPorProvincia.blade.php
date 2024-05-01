<h1>Actividades Alternativas</h1>

<p>Filtros activos:</p>
<ul>
    @foreach($provinciasSeleccionadas as $provincia)
        <li>{{ $provincia }}</li>
    @endforeach
</ul>


<div>
    @foreach($actividadesAlternativas as $actividadAlternativa)
    <h2>Titulo: {{ $actividadAlternativa->titulo }}</h2>
    <p>Contenido: {{ $actividadAlternativa->contenido }}</p>
    @if($actividadAlternativa->imagen1 !== null)
        <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Imagen Noticia - {{$actividadAlternativa->titulo }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif
    <h3>Provincia: {{ $actividadAlternativa->provincia }}</h3>
    <p>localidad: {{ $actividadAlternativa->localidad }}</p>
    <p>direccion: {{ $actividadAlternativa->direccion }}</p>

    @if($actividadAlternativa->id_usuario === auth()->id())
        <button><a href="{{ route('alternativas.editar', $actividadAlternativa->id) }}">Editar actividad Alternativa</a></button>
    @endif

    @if($actividadAlternativa->id_usuario === auth()->id())
        <button><a href="{{ route('alternativas.eliminar', $actividadAlternativa->id) }}">Eliminar actividad Alternativa</a></button>
    @endif
    
    @endforeach

    <button><a href="{{route('alternativas.crear')}}">Crear posteo</a></button>
</div>