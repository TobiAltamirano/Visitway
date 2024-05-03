<h1>hola mundo</h1>

<p>Filtros activos:</p>
<ul>
    @foreach($provinciasSeleccionadas as $provincia)
        <li>{{ $provincia }}</li>
    @endforeach
</ul>


<div>
    @foreach($posteos as $posteo)
    <p><strong>Usuario:</strong> {{ $posteo->usuario->name }}</p>
    <h2>Titulo: {{ $posteo->titulo }}</h2>
    <p>Contenido: {{ $posteo->contenido }}</p>
    @if($posteo->imagen1 !== null)
        <img src="{{ asset('storage/' . $posteo->imagen1) }}" alt="Imagen Noticia - {{$posteo->titulo }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif
    <h3>Provincia: {{ $posteo->provincia }}</h3>

    @if($posteo->id_usuario === auth()->id())
        <button><a href="{{ route('posteos.editar', $posteo->id) }}">Editar posteo</a></button>
    @endif

    @if($posteo->id_usuario === auth()->id())
        <button><a href="{{ route('posteos.eliminar', $posteo->id) }}">Eliminar posteo</a></button>
    @endif
    
    @endforeach

    <button><a href="{{route('posteos.crear')}}">Crear posteo</a></button>
</div>