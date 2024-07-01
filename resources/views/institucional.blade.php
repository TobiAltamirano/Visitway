@extends('layouts.main')

@section('title', 'Inicio')

@section('content')
<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Acerca de Visitway</h1>

    <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base azul-principal roboto-flex">Descubre a nuestro equipo y conoce más acerca de nuestra marca.</p>

    @include('components.lineas-secundarias')

    <div class="flex flex-col items-center">
        <section class="text-gray-600 body-font w-full" id="nuestro-equipo">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-3xl title-font azul-principal poppins-semibold">Nuestro equipo</h1>
                </div>
                <div class="flex flex-wrap justify-center -m-4">
                    <div class="p-4 lg:w-1/4 md:w-1/2">
                        <div class="h-full flex flex-col items-center text-center">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/201x201">
                            <div class="w-full">
                                <h2 class="text-lg poppins-bold azul-principal">Lucía Riggio</h2>
                                <h3 class="roboto-flex rojo-principal font-bold pt-2 pb-4">Diseñadora y desarroladora web</h3>
                                <p class="mb-4">"El código que es más fácil de entender es más fácil de mantener"</p>
                                <span class="inline-flex">
                                    <a class="text-gray-500">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-2 text-gray-500">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-2 text-gray-500">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 lg:w-1/4 md:w-1/2">
                        <div class="h-full flex flex-col items-center text-center">
                            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/202x202">
                            <div class="w-full">
                                <h2 class="text-lg poppins-bold azul-principal">Tobías Altamirano</h2>
                                <h3 class="roboto-flex rojo-principal font-bold pt-2 pb-4">Diseñador y desarrolador web</h3>
                                <p class="mb-4">"La mejor forma de predecir el futuro es implementarlo"</p>
                                <span class="inline-flex">
                                    <a class="text-gray-500">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-2 text-gray-500">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-2 text-gray-500">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-600 body-font">
            <div class="container flex flex-wrap px-5 mx-auto items-center">
                <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                <h1 class="sm:text-3xl text-2xl poppins-bold mb-2 rojo-principal">Marcas que cooperan con Visitway</h1>
                <div class="linea-seccion-4-index h-1 w-20 rounded mb-4"></div>
                <p class="roboto-flex azul-principal text-base">Vistway se enorgullece de <span class="font-bold">colaborar con marcas reconocidas</span> a nivel nacional que comparten nuestra pasión por ofrecer experiencias turísticas excepcionales. Juntos, <span class="font-bold">trabajamos para crear viajes memorables</span> y promover destinos únicos en Argentina.</p>
                </div>
                <div class="flex flex-col md:w-1/2 md:pl-12">
                    <nav class="flex flex-wrap list-none -mb-1 roboto-flex azul-principal font-medium">
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">Aerolíneas Argentinas</a>
                    </li>
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">YPF</a>
                    </li>
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">Quilmes</a>
                    </li>
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">Glovo Argentina</a>
                    </li>
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">Despegar.com</a>
                    </li>
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">Mercado Libre</a>
                    </li>
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">LATAM Airlines Argentina</a>
                    </li>
                    <li class="lg:w-1/3 mb-1 w-1/2">
                        <a class="azul-principal">Claro Argentina</a>
                    </li>
                    </nav>
                </div>
            </div>
            </section>
    </div>
</section>

@endsection('content')