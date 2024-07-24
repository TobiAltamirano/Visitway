@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>
    <div>
        <div>
            <div class="flex flex-col md:flex-row pt-14 gap-2 justify-center">
                <p class="text-center text-3xl font-bold md:text-4xl/tight poppins-medium rojo-principal">Te damos la bienvenida a</p>
                <h1 class="text-center text-3xl font-bold md:text-4xl/tight poppins-medium azul-principal">Visitway</h1>
            </div>
            <p class="text-center text-lg font-medium roboto-flex azul-principal pt-2 mx-4 md:mx-0">Tu guía definitiva para explorar y disfrutar de las maravillas turísticas del país</p>

            @include('components.lineas-secundarias')

        </div>

        <section class="flex flex-col items-center justify-center w-full py-8 md:py-16 lg:py-24">
            <div class="container grid items-center gap-6 px-4 md:px-6 lg:grid-cols-2 lg:gap-10">
                <img src="https://www.cronista.com/files/image/393/393517/617aeb7754300.jpg" width="600" height="500" alt="Patagonia Argentina Imagen" class="mx-auto w-full aspect-[3/2] overflow-hidden rounded-xl object-cover object-center shadow-secondary-1" />
                <div class="space-y-4 text-center lg:text-left">
                    <div class="space-y-2">
                        <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight poppins-medium azul-principal">
                            Deja de ser turista, <span class="rojo-principal">empieza a ser viajero</span>
                        </h2>
                        <p class="max-w-[600px] mx-auto lg:mx-0 text-base md:text-lg lg:text-sm xl:text-base dark:text-gray-400 azul-principal roboto-flex">
                            En un mundo en constante movimiento, <span class="font-bold">haz que las aventuras cobren vida</span> y convierte la planificación de tus escapadas en una experiencia única. Estamos aquí <span class="font-bold">para que cada viaje sea inolvidable</span>.
                        </p>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-2 min-[400px]:flex-row lg:items-start lg:justify-start">
                        <a class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" href="{{ route('provincias.mostrar') }}">
                            Explorar
                        </a>
                        @if(Auth::check())
                        <a href="{{ url('/profile') }}" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 roboto-flex azul-principal">
                            Mi cuenta
                        </a>
                        @else
                        <a href="{{ url('/register') }}" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300 roboto-flex azul-principal">
                            Crear cuenta
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <article class="text-gray-600 body-font">
            <div class="container px-5 py-12 md:py-22 sm:py-5 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h3 class="text-3xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">De Norte a Sur y de Este a Oeste</h3>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base azul-principal roboto-flex">En cada rincón del país, las provincias tejen <span class="span-segunda-seccion-index"> historias únicas </span> y <span class="span-segunda-seccion-index"> pintorescos paisajes</span>. Cada provincia es un mundo por descubrir, con sus propias <span class="span-segunda-seccion-index"> tradiciones</span>, <span class="span-segunda-seccion-index"> gastronomía </span> y <span class="span-segunda-seccion-index"> colores</span>. Ven y sumérgete en esta travesía que atraviesa la <span class="span-segunda-seccion-index"> vastedad </span> y <span class="span-segunda-seccion-index"> diversidad de Argentina</span>.</p>
                </div>
                <div class="flex flex-wrap -m-4 roboto-flex">
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Río cristalino Córdoba" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-1-index.JPG"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100 transition-opacity duration-500 ease-in-out">
                                <p class="blanco-institucional tracking-widest text-sm title-font mb-1 poppins-regular">Córdoba</p>
                                <h4 class="poppins-medium title-font text-lg font-semibold mb-3">Ríos Cristalinos</h4>
                                <p class="leading-relaxed roboto-flex">Los ríos y espejos de agua más cristalinos de la provincia, nos acostumbran a estas bellas postales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Perito moreno Santa Cruz" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-2-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100 transition-opacity duration-500 ease-in-out">
                                <p class="blanco-institucional tracking-widest text-sm title-font mb-1 poppins-regular">Santa Cruz</p>
                                <h4 class="poppins-medium title-font text-lg font-semibold mb-3">Glaciar Perito Moreno</h4>
                                <p class="leading-relaxed">Uno de los campos de hielo más bellos y accesibles de todo el planeta, una experiencia innolvidable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Cerro siete colores Jujuy" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-3-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100 transition-opacity duration-500 ease-in-out">
                                <p class="blanco-institucional tracking-widest text-sm title-font mb-1 poppins-regular">Jujuy</p>
                                <h4 class="poppins-medium title-font text-lg font-semibold mb-3">Cerro de Siete Colores</h4>
                                <p class="leading-relaxed">Paisaje jujeño y protector del único lugar que sigue siendo un pueblo en la Quebrada Patrimonial.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Ruta de los siete lagos Río Negro" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-4-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100 transition-opacity duration-500 ease-in-out">
                                <p class="blanco-institucional tracking-widest text-sm title-font mb-1 poppins-regular">Río Negro</p>
                                <h4 class="poppins-medium title-font text-lg font-semibold mb-3">Ruta de los Siete Lagos</h4>
                                <p class="leading-relaxed">Uno de los recorridos más hermosos y emocionantes para realizar en la Patagonia Argentina.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Garganta del diablo Misiones" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-5-index.png"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100 transition-opacity duration-500 ease-in-out">
                                <p class="blanco-institucional tracking-widest text-sm title-font mb-1 poppins-regular">Misiones</p>
                                <h4 class="poppins-medium title-font text-lg font-semibold mb-3">La Garganta del Diablo</h4>
                                <p class="leading-relaxed">El salto de mayor altura de las cascadas del río Iguazú, las cataratas de mayor caudal del mundo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Nahuel Huapi Río Negro" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-6-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100 transition-opacity duration-500 ease-in-out">
                                <p class="blanco-institucional tracking-widest text-sm title-font mb-1 poppins-regular">Río Negro</p>
                                <h4 class="poppins-medium title-font text-lg font-semibold mb-3">Lago Nahuel Huapí</h4>
                                <p class="leading-relaxed">Este hermoso atardecer natural en el río, brinda amplias oportunidades de aventuras al aire libre.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="section-index text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <p class="text-xs text-indigo-500 tracking-widest font-bold title-font mb-1 roboto-flex rojo-secundario">TU EXPERIENCIA COMPLETA</p>
                    <h2 class="sm:text-3xl text-2xl title-font text-gray-900 poppins-semibold">Descubre lo que tenemos preparado</h2>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full div-icono-seccion-3-index text-indigo-500 mb-5 flex-shrink-0">
                            <svg width="215px" height="215px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-cronograma-seccion-3-index">
                                <g id=" SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M3 10H21M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#780000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="poppins-semibold text-gray-900 text-lg title-font mb-3">Cronograma personalizado</h3>
                            <p class="leading-relaxed text-base roboto-flex azul-principal">Organiza y agenda tus actividades preferidas, para no perderte nada y mantenerte en constante aventura.</p>
                            <a href="{{ route('cronograma.mostrar') }}" class="mt-3 text-indigo-500 inline-flex items-center hover:font-bold rojo-principal">Conocer más
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full div-icono-seccion-3-index text-indigo-500 mb-5 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-seccion-3-index">
                                <path fill="#780000" d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="poppins-semibold text-gray-900 text-lg title-font mb-3">Posteos de usuarios</h3>
                            <p class="leading-relaxed text-base roboto-flex azul-principal">Entérate de las experiencias y recuerdos de otros viajeros, publica tus aventuras en nuestro blog.</p>
                            <a href="{{ route('posteos.mostrar') }}" class="mt-3 text-indigo-500 inline-flex items-center hover:font-bold rojo-principal">Conocer más
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full div-icono-seccion-3-index text-indigo-500 mb-5 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-seccion-3-index">
                                <path fill="#780000" d="M48 24C48 10.7 37.3 0 24 0S0 10.7 0 24V64 350.5 400v88c0 13.3 10.7 24 24 24s24-10.7 24-24V388l80.3-20.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L48 52V24zm0 77.5l96.6-24.2c27-6.7 55.5-3.6 80.4 8.8c54.9 27.4 118.7 29.7 175 6.8V334.7l-24.4 9.1c-33.7 12.6-71.2 10.7-103.4-5.4c-48.2-24.1-103.3-30.1-155.6-17.1L48 338.5v-237z" />
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="poppins-semibold text-gray-900 text-lg title-font mb-3">Actividades alternativas</h3>
                            <p class="leading-relaxed text-base roboto-flex azul-principal">Descubre y crea actividades, shows, ferias artensales y demás aventuras ocultas.</p>
                            <a href="{{ route('alternativas.mostrar') }}" class="mt-3 text-indigo-500 inline-flex items-center hover:font-bold rojo-principal">Conocer más
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="section-index text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h2 class="sm:text-3xl text-2xl title-font text-gray-900 poppins-semibold rojo-secundario">Disfruta los platos más aclamados</h2>
                        <div class="linea-seccion-4-index h-1 w-20 rounded"></div>
                    </div>
                    <p class="lg:w-1/2 w-full leading-relaxed roboto-flex azul-principal">La gastronomía Argentina es un festín para los sentidos, destacada por su <span class="span-segunda-seccion-index"> diversidad </span> y <span class="span-segunda-seccion-index"> riqueza </span> de sabores. Desde las famosas parrilladas y empanadas hasta los exquisitos vinos y dulces como el alfajor. Explorar la <span class="span-segunda-seccion-index"> cocina Argentina </span> es embarcarse en un <span class="span-segunda-seccion-index"> viaje culinario </span> único, donde cada bocado cuenta una <span class="span-segunda-seccion-index"> historia</span>.</p>
                </div>
                <div class="mt-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-4 gap-8">
                        <div class="rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white div-card-index transform hover:scale-105 transition-transform duration-300">
                            <img class="rounded-t-lg object-cover h-auto w-full" src="<?= url("storage/fotografias/locro-index.jpg"); ?>" alt="Locro criollo" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center rojo-principal mb-2">Locro criollo</h5>
                                <p class="mb-4 text-base azul-principal">
                                    Un guiso ancestral que combina maíz, porotos, carne y vegetales, ofreciendo una explosión de sabores y aromas.
                                </p>
                            </div>
                        </div>
                        <div class="rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white div-card-index transform hover:scale-105 transition-transform duration-300">
                            <img class="rounded-t-lg object-cover h-auto w-full" src="<?= url("storage/fotografias/humita-index.png"); ?>" alt="Humita en olla" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center rojo-principal mb-2">Humita en olla</h5>
                                <p class="mb-4 text-base azul-principal">
                                    Un plato típico que celebra la frescura de la mazorca de maíz envuelta en su propia hoja y cocida a fuego lento.
                                </p>
                            </div>
                        </div>
                        <div class="rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white div-card-index transform hover:scale-105 transition-transform duration-300">
                            <img class="rounded-t-lg object-cover h-auto w-full" src="<?= url("storage/fotografias/empanadas-index.png"); ?>" alt="Empanadas salteñas" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center rojo-principal mb-2">Empanadas salteñas</h5>
                                <p class="mb-4 text-base azul-principal">
                                    Un bocado emblemático de la región norteña de Argentina, relleno de jugosa carne, papa, huevo duro y especias.
                                </p>
                            </div>
                        </div>
                        <div class="rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white div-card-index transform hover:scale-105 transition-transform duration-300">
                            <img class="rounded-t-lg object-cover h-auto w-full" src="<?= url("storage/fotografias/cordero-index.png"); ?>" alt="Cordero patagónico" />
                            <div class="p-4">
                                <h5 class="text-xl font-medium leading-tight text-center rojo-principal mb-2">Cordero patagónico</h5>
                                <p class="mb-4 text-base azul-principal">
                                    Una exquisitez de la región donde la carne tierna y ahumada se cocina lentamente al asador.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

</section>

@endsection