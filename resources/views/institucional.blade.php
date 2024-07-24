@extends('layouts.main')

@section('title', 'Sobre Visitway')

@section('content')
<section>
    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Acerca de Visitway</h1>

    <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base azul-principal roboto-flex">Conoce nuestro equipo y descubre más acerca de nuestra marca</p>

    @include('components.lineas-secundarias')

    <div class="flex flex-col items-center">
        <section class="text-gray-600 body-font w-full" id="nuestro-equipo">
            <div class="container px-5 py-12 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h2 class="text-3xl title-font azul-principal poppins-semibold">Nuestro equipo</h2>
                </div>
                <div class="flex flex-wrap justify-center -m-4">
                    <div class="p-4 lg:w-1/4 md:w-1/2">
                        <div class="h-full flex flex-col items-center text-center">
                            <img alt="Imagen - Lucia Riggio" class="flex-shrink-0 rounded-lg w-full h-96 object-cover object-center mb-4 shadow-md" src="<?= url("storage/fotografias/lucia-riggio.png"); ?>">
                            <div class="w-full">
                                <h3 class="text-lg poppins-bold azul-principal">Lucía Riggio</h3>
                                <h4 class="roboto-flex rojo-principal font-bold pt-2 pb-4">Diseñadora y Desarrolladora Web</h4>
                                <p class="mb-4 azul-principal">"El código que es más fácil de entender es más fácil de mantener"</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 lg:w-1/4 md:w-1/2">
                        <div class="h-full flex flex-col items-center text-center">
                            <img alt="Imagen - Tobias Altamirano" class="flex-shrink-0 rounded-lg w-full h-96 object-cover object-center mb-4 shadow-md" src="<?= url("storage/fotografias/tobias-altamirano.png"); ?>">
                            <div class=" w-full">
                                <h3 class="text-lg poppins-bold azul-principal">Tobías Altamirano</h3>
                                <h4 class="roboto-flex rojo-principal font-bold pt-2 pb-4">Diseñador y Desarrollador Web</h4>
                                <p class="mb-4 azul-principal">"La mejor forma de predecir el futuro es implementarlo"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-gray-600 body-font" id="cooperaciones">
            <div class="container flex flex-wrap px-5 mx-auto items-center">
                <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                    <h2 class="sm:text-3xl text-2xl poppins-bold mb-2 rojo-principal">Marcas que cooperan con Visitway</h2>
                    <div class="linea-seccion-4-index h-1 w-20 rounded mb-4"></div>
                    <p class="roboto-flex azul-principal text-base">Visitway se enorgullece de <span class="font-bold">colaborar con marcas reconocidas</span> a nivel nacional que comparten nuestra pasión por ofrecer experiencias turísticas excepcionales. Juntos, <span class="font-bold">trabajamos para crear viajes memorables</span> y promover destinos únicos en Argentina.</p>
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