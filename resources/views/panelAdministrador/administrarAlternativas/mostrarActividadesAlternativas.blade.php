@extends('layouts.main')

@section('title', 'Panel Administrador - Actividades alternativas')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Panel administrador<span class="span-h1-provincias"><br>Actividades alternativas</span></h1>

    @include('components.lineas-secundarias')

    @include('components.toast-notification')

    <h2 class="text-2xl text-center font-bold azul-principal roboto-flex mt-12 mb-6 flex justify-center">Control de actividades alternativas</h2>

    <div class="overflow-x-auto roboto-flex azul-principal">
        <div class="relative w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&amp;_tr]:border-b">
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">ID</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Titulo</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Usuario creador</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Provincia</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Acciones</th>
                    </tr>
                </thead>
                <tbody class="[&amp;_tr:last-child]:border-0">
                    @foreach($actividadesAlternativas as $actividadAlternativa)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle">{{ $actividadAlternativa->id }}</td>
                        <td class="p-4 align-middle">{{ $actividadAlternativa->titulo }}</td>
                        <td class="p-4 align-middle">{{ $actividadAlternativa->usuario->email }}</td>
                        <td class="p-4 align-middle">{{ $actividadAlternativa->provincia }}</td>
                        <td class="p-4 align-middle">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('administrador.actividades-alternativas.ver', $actividadAlternativa->id) }}" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" data-twe-toggle="tooltip" title="Ver detalles">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span class="sr-only">Ver detalles</span>
                                </a>

                                <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10" data-twe-toggle="modal" data-twe-target="#deleteModal{{ $actividadAlternativa->id }}" data-twe-ripple-init data-twe-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 rojo-principal" data-twe-toggle="tooltip" title="Eliminar actividad">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    </svg>
                                    <span class="sr-only">Eliminar</span>
                                </button>

                                <!-- Modal eliminar actividad alternativa -->
                                <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="deleteModal{{ $actividadAlternativa->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $actividadAlternativa->id }}" aria-hidden="true">
                                    <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                                            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                                                <p class="roboto-flex azul-principal text-xl font-medium leading-normal text-surface dark:text-white" id="deleteModalLabel{{ $actividadAlternativa->id }}">
                                                    Eliminar actividad alternativa
                                                </p>
                                                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                                                    <span class="azul-principal [&>svg]:h-6 [&>svg]:w-6">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="flex flex-col justify-center items-center p-4" data-twe-modal-body-ref>
                                                <form action="{{ route('administrador.actividades-alternativas.eliminar', $actividadAlternativa->id) }}" class="btn btn-success" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <p class="text-center mb-6 roboto-flex rojo-principal">¿Estás seguro de que quieres eliminar esta actividad?</p>
                                                    <button type="submit" class="roboto-flex boton-eliminar mb-2 poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                                                        Eliminar actividad
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection