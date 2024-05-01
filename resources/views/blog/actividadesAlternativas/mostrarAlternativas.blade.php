<h1>Actividades Alternativas:</h1>

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

<form action="{{ route('alternativas.filtrar') }}" method="GET">
    <label for="mendoza">Mendoza:</label>
    <input type="checkbox" id="mendoza" name="provincias[]" value="Mendoza">

    <label for="tucuman">Tucumán:</label>
    <input type="checkbox" id="tucuman" name="provincias[]" value="Tucumán">

    <button type="submit">Filtrar</button>
</form>



<div>
    @foreach($actividadesAlternativas as $actividadAlternativa)
    <h2>Titulo: {{ $actividadAlternativa->titulo }}</h2>
    <p>descripcion: {{ $actividadAlternativa->descripcion }}</p>
    @if($actividadAlternativa->imagen1 !== null)
        <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Imagen Noticia - {{$actividadAlternativa->titulo }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif
    <h3>Provincia: {{ $actividadAlternativa->provincia }}</h3>
    <p>localidad: {{ $actividadAlternativa->localidad }}</p>
    <p>direccion: {{ $actividadAlternativa->direccion }}</p>

    @if($actividadAlternativa->id_usuario === auth()->id())
        <button><a href="{{ route('alternativas.editar', $actividadAlternativa->id) }}">Editar posteo</a></button>
    @endif

    @if($actividadAlternativa->id_usuario === auth()->id())
        <button><a href="{{ route('alternativas.eliminar', $actividadAlternativa->id) }}">Eliminar posteo</a></button>
    @endif
   

    @endforeach

    <button><a href="{{route('alternativas.crear')}}">Crear Actividad alternativa</a></button>
</div>