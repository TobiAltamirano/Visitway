<div class="container">
    <h1 class="h1-panel">Detalles del Posteo</h1>
    
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <p>{{ $posteo->titulo }}</p>
    </div>

    <div class="mb-3">
        <label for="contenido" class="form-label">Contenido</label>
        <p>{{ $posteo->contenido }}</p>
    </div>

    @if ($posteo->imagen)
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <img src="{{ asset($posteo->imagen1) }}" class="img-fluid" alt="Imagen del posteo">
    </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('administrador.posteos.mostrar') }}" class="btn btn-secondary">Volver</a>
    </div>

    <form action="{{ route('administrador.posteos.eliminar', $posteo->id) }}" class="btn btn-success" method="POST">
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-success">Eliminar</button>
    </form>
    
</div>