@extends('layouts.main')

@section('title', 'Introducción')

@section('content')

<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">¡Bienvenido a <br> <span class="span-h1-provincias">{{ $provincia->nombre_provincia }}!</span></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-6 mb-6">
        <x-boton-volver url="{{ route('provincias.mostrar') }}">Ir a Provincias</x-boton-volver>
    </div>

    <div class="flex justify-center mt-6 mb-6">
        <div class="submenu">
            @include('components.submenu')
        </div>
    </div>

    @if (session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
    @endif

    <!-- Título, descripción e imagen -->
    <section class="flex flex-col items-center justify-center w-full py-6 md:py-6 lg:py-6">
        <div class="container grid items-center gap-6 px-4 md:px-6 lg:grid-cols-2 lg:gap-10">
            <div class="space-y-4 text-center lg:text-left">
                <div class="space-y-2 flex flex-col">
                    <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl xl:text-[3.4rem] 2xl:text-[2.5rem] poppins-bold azul-principal">
                        {{$provincia->nombre_provincia}},<span class="rojo-principal"> Argentina</span>
                    </h2>
                    <p class="max-w-[600px] mx-auto lg:mx-0 md:text-xl azul-principal roboto-flex">
                        {{$provincia->descripcion_provincia}}
                    </p>
                </div>
            </div>
            <img src="<?= url('storage/imagenes/provincias/' . $provincia->imagen_provincia); ?>" width="600" height="500" alt="Imagen {{$provincia->nombre_provincia}}" class="mx-auto w-full aspect-[3/2] overflow-hidden rounded-xl object-cover object-center rounded-lg bg-white shadow-lg" />
        </div>
    </section>

    <article class="">
        <div class="container px-5 py-12 md:py-22 sm:py-5 mx-auto">
            <div class="flex flex-wrap -m-4 roboto-flex">
                <div class="container px-4 md:px-6">
                    <div class="grid lg:grid-cols-1">
                        <h3 class="text-2xl font-bold tracking-tighter poppins-bold azul-principal">Recomendaciones</h3>
                        <div class="linea-introduccion-2 mt-2 h-1 w-20 rounded"></div>
                        <p class="mt-4 roboto-flex azul-principal">
                            {{$provincia->cultura_caracteristicas_provincia}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article>
        <div class="container px-5 py-8 md:py-16 lg:py-18 mx-auto">
            <div class="flex flex-wrap -m-4 roboto-flex">
                <div class="container px-4 md:px-6">
                    <div class="grid gap-8 lg:grid-cols-2 lg:gap-12">
                        <div>
                            <h3 class="text-2xl font-bold tracking-tighter poppins-bold rojo-principal">Ubicación</h3>
                            <div class="linea-introduccion mt-2 h-1 w-20 rounded"></div>
                            <div class="grid md:grid-cols-1 gap-4">
                                <div class="mt-4">
                                    <div>
                                        <p class="roboto-flex azul-principal">
                                            {{$provincia->ubicacion_provincia}}
                                        </p>
                                    </div>
                                    <img src="<?= url('storage/imagenes/ubicacion-provincias/' . $provincia->imagen_ubicacion_provincia); ?>" alt="{{ $provincia->nombre_provincia }}" width="400" height="300" class="mt-4 rounded-lg object-cover w-full aspect-[3/2] rounded-lg bg-white transform hover:scale-105 transition-transform duration-300" />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-8">
                            <div>
                                <h3 class="text-2xl font-bold tracking-tighter poppins-bold rojo-principal">Cultura y características</h3>
                                <div class="linea-introduccion mt-2 h-1 w-20 rounded"></div>
                                <p class="mt-4 roboto-flex azul-principal">
                                    {{$provincia->cultura_caracteristicas_provincia}}
                                </p>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold tracking-tighter poppins-bold rojo-principal">Flora y fauna</h3>
                                <div class="linea-introduccion mt-2 h-1 w-20 rounded"></div>
                                <p class="mt-4 roboto-flex azul-principal">
                                    {{$provincia->flora_fauna_provincia}}
                                </p>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold tracking-tighter poppins-bold rojo-principal">Historia</h3>
                                <div class="linea-introduccion mt-2 h-1 w-20 rounded"></div>
                                <p class="mt-4 roboto-flex azul-principal">
                                    {{$provincia->historia_provincia}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

</section>

@endsection