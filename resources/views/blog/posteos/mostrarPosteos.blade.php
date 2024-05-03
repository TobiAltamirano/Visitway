<h1>Posteos:</h1>

@if (session('status.message'))
    <div class="alert alert-success">
        {{ session('status.message') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('posteos.filtrar') }}" method="GET">
    <label for="mendoza">Mendoza:</label>
    <input type="checkbox" id="mendoza" name="provincias[]" value="Mendoza">

    <label for="tucuman">Tucumán:</label>
    <input type="checkbox" id="tucuman" name="provincias[]" value="Tucumán">

    <button type="submit">Filtrar</button>
</form>


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