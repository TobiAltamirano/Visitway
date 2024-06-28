@extends('layouts.main')

@section('title', 'Introducción')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Introducción <br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-6 mb-6">
        <x-boton-volver url="{{ route('provincias.mostrar') }}">Ir a Provincias</x-boton-volver>
    </div>

    <div class="flex justify-center mt-6 mb-6">
        <div class="submenu">
            @include('layouts.submenu')
        </div>
    </div>

    <div class="w-full max-w-6xl mx-auto py-12 px-4 md:px-6">
        <div class="grid md:grid-cols-2 gap-8 items-start">
            <div class="grid gap-6">
                <div>
                    <img src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Province Image" width="600" height="400" class="rounded-lg object-cover w-full aspect-[3/2]" />
                </div>
                <div class="grid gap-2">
                    <h2 class="text-3xl font-bold poppins-bold azul-principal">{{$provincia->nombre_provincia}}</h2>
                    <p class="roboto-flex azul-principal">
                        {{$provincia->descripcion_provincia}}
                    </p>
                </div>
            </div>
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <h3 class="text-2xl poppins-medium rojo-principal">Ubicacion</h3>
                    <div class="linea-introduccion h-1 w-20 rounded"></div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Map of Mendoza" width="300" height="200" class="rounded-lg object-cover w-full aspect-[3/2]" />
                        </div>
                        <div>
                            <p class="roboto-flex azul-principal">
                                {{$provincia->ubicacion_provincia}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-2">
                    <h3 class="text-2xl poppins-medium rojo-principal">Cultura y características</h3>
                    <div class="linea-introduccion h-1 w-20 rounded"></div>
                    <p class="roboto-flex azul-principal">
                        {{$provincia->cultura_caracteristicas_provincia}}
                    </p>
                </div>
                <div class="grid gap-2">
                    <h3 class="text-2xl poppins-medium rojo-principal">Flora y Fauna</h3>
                    <div class="linea-introduccion h-1 w-20 rounded"></div>
                    <p class="roboto-flex azul-principal">
                        {{$provincia->flora_fauna_provincia}}
                    </p>
                </div>
                <div class="grid gap-2">
                    <h3 class="text-2xl poppins-medium rojo-principal">Historia</h3>
                    <div class="linea-introduccion h-1 w-20 rounded"></div>
                    <p class="roboto-flex azul-principal">{{$provincia->historia_provincia}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection