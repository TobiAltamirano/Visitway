@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1 class="h1-panel">Panel Administrador</h1>

<h2 class="text-control">Control de Posteos</h2>

<div class="table-responsive">
    <table class="table table-dark table-striped text-control">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posteos as $posteo)
            <tr>
                <td>{{ $posteo->id }}</td>
                <td>{{ $posteo->titulo }}</td>
                <td class="buttons-cta">
                    <a href="{{ route('administrador.posteos.ver', $posteo->id) }}" class="btn btn-success">Ver</a>
                
                    <form action="{{ route('administrador.posteos.eliminar', $posteo->id) }}" class="btn btn-success" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-success">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
