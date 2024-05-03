<div class="container">
    <h1 class="h1-panel">Detalles de Actividad Alternativa</h1>
    
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <p>{{ $actividadAlternativa->titulo }}</p>
    </div>

    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido</label>
        <p>{{ $actividadAlternativa->contenido }}</p>
    </div>

    @if($actividadAlternativa->imagen1 !== null)
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <img src="{{ asset($actividadAlternativa->imagen1) }}" class="img-fluid" alt="Imagen de la actividadAlternativa">
    </div>
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif

    <div class="mb-3">
        <a href="{{ route('administrador.actividades-alternativas.mostrar') }}" class="btn btn-secondary">Volver</a>
    </div>

    <form action="{{ route('administrador.actividades-alternativas.eliminar', $actividadAlternativa->id) }}" class="btn btn-success" method="POST">
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-success">Eliminar</button>
    </form>
    
</div>