@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1 class="h1-panel">Panel Administrador</h1>

<h2 class="text-control">Control de Usuarios</h2>

<div class="table-responsive">
    <table class="table table-dark table-striped text-control">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->email }}</td>
                <td class="buttons-cta">
                    <button>Eliminar</button>
                
                    <!-- @ Si es admin -> 'Otorgar privilegios' : 'Quitar privilegios' -->
                    <button>Convertir en administrador</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
