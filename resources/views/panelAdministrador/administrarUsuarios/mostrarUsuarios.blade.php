@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>

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
                        <!-- @ Si es admin -> 'Otorgar privilegios' : 'Quitar privilegios' -->
                        @if ($usuario->usuario_administrador)
                            <!-- Si el usuario ya es administrador, mostrar botón para quitar privilegios -->
                            <form action="{{ route('administrador.usuarios.quitar-privilegios', $usuario->id) }}" method="POST">
                                @csrf
                                <button type="submit">Quitar privilegios</button>
                            </form>
                        @else
                            <!-- Si el usuario no es administrador, mostrar botón para otorgar privilegios -->
                            <form action="{{ route('administrador.usuarios.otorgar-privilegios', $usuario->id) }}" method="POST">
                                @csrf
                                <button type="submit">Otorgar privilegios</button>
                            </form>
                        @endif
    
                        <form action="{{ route('administrador.usuarios.eliminar', $usuario->id) }}" method="POST">
                            @csrf
                            <button type="submit">Eliminar Usuario</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection

