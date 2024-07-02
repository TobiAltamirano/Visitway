@extends('layouts.main')

@section('title', 'Panel Administrador - Usuarios')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Panel admnistrador<span class="span-h1-provincias"><br>Usuarios</span></h1>

    @include('components.lineas-secundarias')

    @include('components.toast-notification')

    <h2 class="text-2xl font-bold azul-principal roboto-flex mt-12 mb-6 flex justify-center">Control de usuarios</h2>

    <div class="overflow-x-auto roboto-flex azul-principal">
        <div class="relative w-full overflow-auto">
            <table class="w-full caption-bottom text-sm">
                <thead class="[&amp;_tr]:border-b">
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">ID</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Email</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Nombre</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Tipo usuario</th>
                        <th class="h-12 px-4 text-left align-middle font-bold text-muted-foreground">Acciones</th>
                    </tr>
                </thead>
                <tbody class="[&amp;_tr:last-child]:border-0">
                    @foreach($usuarios as $usuario)
                    <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                        <td class="p-4 align-middle">{{ $usuario->id }}</td>
                        <td class="p-4 align-middle">{{ $usuario->email }}</td>
                        <td class="p-4 align-middle">{{ $usuario->name }}</td>
                        <td class="p-4 align-middle">{{ $usuario->usuario_administrador }}</td>
                        <td class="p-4 align-middle">
                            <div class="flex items-center gap-2">
                                <!-- @ Si es admin -> 'Otorgar privilegios' : 'Quitar privilegios' -->
                                @if ($usuario->usuario_administrador)
                                <!-- Si el usuario ya es administrador, mostrar botón para quitar privilegios -->
                                <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10" data-twe-toggle="modal" data-twe-target="#quitarPrivilegiosModal{{ $usuario->id }}" data-twe-ripple-init data-twe-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 azul-principal roboto-flex" data-twe-toggle="tooltip" title="Quitar privilegios administrador">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                    <span class="sr-only">Quitar privilegios</span>
                                </button>
                                @else
                                <!-- Si el usuario no es administrador, mostrar botón para otorgar privilegios -->
                                <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10" data-twe-toggle="modal" data-twe-target="#otorgarPrivilegiosModal{{ $usuario->id }}" data-twe-ripple-init data-twe-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" data-twe-toggle="tooltip" title="Otorgar privilegios administrador">
                                        <path d="M3 11L6 6l3 5 3-6 3 6 3-5 3 5v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4z"></path>
                                        <path d="M3 16h18"></path>
                                        <path d="M6 21h12"></path>
                                    </svg>
                                    <span class="sr-only">Otorgar privilegios</span>
                                </button>
                                @endif

                                <!-- Modal Quitar Privilegios -->
                                <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="quitarPrivilegiosModal{{ $usuario->id }}" tabindex="-1" aria-labelledby="quitarPrivilegiosModalLabel{{ $usuario->id }}" aria-hidden="true">
                                    <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                                            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                                                <p class="roboto-flex azul-principal text-xl font-medium leading-normal text-surface dark:text-white" id="quitarPrivilegiosModal{{ $usuario->id }}">
                                                    Quitar privilegios
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
                                                <form action="{{ route('administrador.usuarios.quitar-privilegios', $usuario->id) }}" method="POST">
                                                    @csrf
                                                    @method('post')
                                                    <p class="text-center text-base mb-6 roboto-flex azul-principal">¿Estás seguro de que quieres quitarle los privilegios de administrador a este usuario?</p>
                                                    <button type="submit" class="roboto-flex azul-principal boton-aplicar-cambios mb-2 poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                                                        Quitar privilegios
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Otorgar Privilegios  -->
                                <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="otorgarPrivilegiosModal{{ $usuario->id }}" tabindex="-1" aria-labelledby="otorgarPrivilegiosModalLabel{{ $usuario->id }}" aria-hidden="true">
                                    <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                                            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                                                <p class="roboto-flex azul-principal text-xl font-medium leading-normal text-surface dark:text-white" id="otorgarPrivilegios{{ $usuario->id }}">
                                                    Otorgar privilegios
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
                                                <form action="{{ route('administrador.usuarios.otorgar-privilegios', $usuario->id) }}" method="POST">
                                                    @csrf
                                                    @method('post')
                                                    <p class="text-center text-base mb-6 roboto-flex azul-principal">¿Estás seguro de que quieres otorgarle privilegios de administrador a este usuario?</p>
                                                    <button type="submit" class="roboto-flex azul-principal boton-aplicar-cambios mb-2 poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                                                        Otorgar privilegios
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Button -->
                                <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 w-10" data-twe-toggle="modal" data-twe-target="#deleteModal{{ $usuario->id }}" data-twe-ripple-init data-twe-ripple-color="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 rojo-principal" data-twe-toggle="tooltip" title="Eliminar usuario">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    </svg>
                                    <span class="sr-only">Eliminar</span>
                                </button>

                                <!-- Modal eliminar usuario -->
                                <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="deleteModal{{ $usuario->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $usuario->id }}" aria-hidden="true">
                                    <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                                            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                                                <p class="roboto-flex azul-principal text-xl font-medium leading-normal text-surface dark:text-white" id="deleteModalLabel{{ $usuario->id }}">
                                                    Eliminar usuario
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
                                                <form action="{{ route('administrador.usuarios.eliminar', $usuario->id) }}" method="POST">
                                                    @csrf
                                                    @method('post')
                                                    <p class="text-center text-base mb-6 roboto-flex rojo-principal">¿Estás seguro de que quieres eliminar a este usuario?</p>
                                                    <button type="submit" class="roboto-flex boton-eliminar mb-2 poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                                                        Eliminar usuario
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