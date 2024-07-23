@extends('layouts.main')

@section('title', 'Panel Administrador - Alojamientos')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Panel administrador<span class="span-h1-provincias"><br>Alojamientos</span></h1>

    @include('components.lineas-secundarias')

    @include('components.toast-notification')

    <div class="flex items-center flex-col justify-center gap-8 mt-12 mb-6">
        <h2 class="text-2xl font-bold azul-principal roboto-flex flex justify-center">Listado de alojamientos</h2>
        <button class="filtros-boton inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
            <a href="{{ route('administrador.alojamientos.crear') }}">Cargar alojamiento</a>
        </button>
    </div>

    <div class="overflow-x-auto">
        <div class="relative w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&amp;_tr]:border-b">
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <th class="h-12 px-4 text-left align-middle font-bold azul-principal roboto-flex">ID</th>
                        <th class="h-12 px-4 text-left align-middle font-bold azul-principal roboto-flex">Nombre</th>
                        <th class="h-12 px-4 text-left align-middle font-bold azul-principal roboto-flex">Precio</th>
                        <th class="h-12 px-4 text-left align-middle font-bold azul-principal roboto-flex">Provincia</th>
                        <th class="h-12 px-4 text-left align-middle font-bold azul-principal roboto-flex">Acciones</th>
                    </tr>
                </thead>
                <tbody class="[&amp;_tr:last-child]:border-0">
                    @foreach($alojamientos as $alojamiento)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle roboto-flex azul-principal">{{ $alojamiento->id_alojamiento }}</td>
                        <td class="p-4 align-middle roboto-flex azul-principal">{{ $alojamiento->nombre_alojamiento }}</td>
                        <td class="p-4 align-middle roboto-flex azul-principal">{{ $alojamiento->precio_alojamiento }}</td>
                        <td class="p-4 align-middle roboto-flex azul-principal">{{ $alojamiento->provincia->nombre_provincia }}</td>
                        <td class="p-4 align-middle roboto-flex azul-principal">
                            <div class="flex items-center gap-2">
                                <form action="{{ route('administrador.alojamientos.editar', $alojamiento->id_alojamiento) }}" method="GET">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                            <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
                                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                            <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
                                        </svg>
                                        <span class="sr-only">Modificar</span>
                                    </button>
                                </form>
                                <form action="{{ route('administrador.alojamientos.eliminar', $alojamiento->id_alojamiento) }}" method="GET">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10 rojo-principal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                        </svg>
                                        <span class="sr-only">Eliminar</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $alojamientos->links('components.pagination') }}
    </div>

</section>

@endsection