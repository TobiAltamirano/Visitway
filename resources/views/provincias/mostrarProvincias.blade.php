@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>
    <section>
        <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Provincias por región:</h1>

        <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base azul-principal roboto-flex">Explora las distintas regiones de Argentina y sus provincias correspondientes.</p>

        <div class="contenedor-lineas">
                <div class="primer-linea-superior"></div>
                <div class="segunda-linea-superior"></div>
            </div>

        <article>
            <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Buenos Aires</h2>
            <div class="mx-6 mt-10">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8 justify-center">
                    @foreach($provinciaBuenosAires as $provincia)
                    <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                        <a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia ]) }}">
                            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $provincia->nombre_provincia }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Nordeste</h2>
            <div class="mx-6 mt-10">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
                    @foreach($provinciasNordeste as $provincia)
                    <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                        <a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia ]) }}">
                            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $provincia->nombre_provincia }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Noroeste</h2>
            <div class="mx-6 mt-10">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
                    @foreach($provinciasNoroeste as $provincia)
                    <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                        <a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia ]) }}">
                            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $provincia->nombre_provincia }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Cuyo</h2>
            <div class="mx-6 mt-10">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
                    @foreach($provinciasCuyo as $provincia)
                    <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                        <a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia ]) }}">
                            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $provincia->nombre_provincia }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Pampeanas</h2>
            <div class="mx-6 mt-10">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
                    @foreach($provinciasPampeanas as $provincia)
                    <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                        <a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia ]) }}">
                            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $provincia->nombre_provincia }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <h2 class="text-3xl text-2xl text-center mt-12 title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Patagónicas</h2>
            <div class="mx-6 mt-10">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
                    @foreach($provinciasPatagonicas as $provincia)
                    <div class="hover:opacity-75 rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                        <a href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia ]) }}">
                            <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/city/041.webp" alt="Hollywood Sign on The Hill" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center azul-principal poppins-medium">{{ $provincia->nombre_provincia }}</h5>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </article>

    </section>
</section>

@endsection