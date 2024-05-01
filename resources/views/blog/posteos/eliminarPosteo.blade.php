<h1>Eliminar Posteo</h1>

<p>¿Estás seguro de que quieres eliminar este posteo?</p>
<p><strong>Título:</strong> {{ $posteo->titulo }}</p>
<p><strong>Contenido:</strong> {{ $posteo->contenido }}</p>
<p><strong>Provincia:</strong> {{ $posteo->provincia }}</p>
@if($posteo->imagen1 !== null)
        <img src="{{ asset('storage/' . $posteo->imagen1) }}" alt="Imagen Noticia - {{$posteo->titulo }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif

<form action="{{ route('posteos.eliminar.procesos', ['id' => $posteo->id]) }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('posteos.mostrar') }}">Cancelar</a>