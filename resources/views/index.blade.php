@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<section>
    <div>
        <div>
            <p class="p-superior-index poppins-medium">Te damos la bienvenida a:</p>
            <h1 class="h1-index poppins-medium">Visitway</h1>
            <div class="contenedor-lineas">
                <div class="primer-linea-superior"></div>
                <div class="segunda-linea-superior"></div>
            </div>
        </div>

        <article class="section-principal flex justify-center">
            <div class="relative div-img-principal h-[550px] overflow-hidden bg-[url('https://www.cronista.com/files/image/393/393517/617aeb7754300.jpg')] bg-cover bg-[50%] bg-no-repeat max-w-[90vw] w-full">
                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/50 bg-fixed">
                    <div class="flex h-full items-center justify-center">
                        <div class="px-6 text-center text-white md:px-12">
                            <p class="roboto-flex texto-introduccion">Donde las aventuras cobran vida y planificar tus escapadas se vuelve una experiencia única. <br> En un mundo en constante movimiento, la exploración es esencial. Estamos aquí para que cada viaje sea inolvidable.</p>
                            <div class="botones-index-contenedor">
                                <button type="button" class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600" data-twe-ripple-init data-twe-ripple-color="light"><a href="{{ route('provincias.mostrar') }}">Comenzar a explorar</a>
                                </button>
                                <button type="button" class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600" data-twe-ripple-init data-twe-ripple-color="light"><a href="{{ route('provincias.mostrar') }}">Crear una cuenta</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <div class="contenedor-lineas">
            <div class="segunda-linea-superior"></div>
            <div class="primer-linea-superior"></div>
        </div>

        <article class=" text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h2 class="text-3xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">De norte a sur y de este a oeste</h2>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base azul-principal roboto-flex">En cada rincón del país, las provincias tejen <span class="span-segunda-seccion-index"> historias únicas </span> y <span class="span-segunda-seccion-index"> pintorescos paisajes</span>. Cada provincia es un mundo por descubrir, con sus propias <span class="span-segunda-seccion-index"> tradiciones</span>, <span class="span-segunda-seccion-index"> gastronomía </span> y <span class="span-segunda-seccion-index"> colores</span>. Ven y sumérgete en esta travesía que atraviesa la <span class="span-segunda-seccion-index"> vastedad </span> y <span class="span-segunda-seccion-index"> diversidad de Argentina</span>.</p>
                </div>
                <div class="flex flex-wrap -m-4 roboto-flex">
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Río cristalino Córdoba" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-1-index.JPG"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100">
                                <h4 class="rojo-secundario tracking-widest text-sm title-font font-medium mb-1">Córdoba</h4>
                                <h3 class="poppins-medium title-font text-lg font-semibold text-gray-900 mb-3">Ríos Cristalinos</h3>
                                <p class="leading-relaxed">Los ríos y espejos de agua más cristalinos de la Provincia, nos acostumbran a estas bellas postales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Perito moreno Santa Cruz" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-2-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100">
                                <h4 class="rojo-secundario tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Santa Cruz</h4>
                                <h3 class="poppins-medium title-font roboto-flex text-lg font-semibold text-gray-900 mb-3">Glaciar Perito Moreno</h3>
                                <p class="leading-relaxed">Uno de los campos de hielo más bellos y accesibles de todo el planeta, una experiencia innolvidable.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Cerro siete colores Jujuy" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-3-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100">
                                <h4 class="rojo-secundario tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Jujuy</h4>
                                <h3 class="poppins-medium title-font text-lg font-semibold text-gray-900 mb-3">Cerro de Siete Colores</h3>
                                <p class="leading-relaxed">Paisaje jujeño y protector del único lugar que sigue siendo un pueblo en la Quebrada Patrimonial.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Ruta de los siete lagos Río Negro" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-4-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100">
                                <h4 class="rojo-secundario tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Río Negro</h4>
                                <h3 class="poppins-medium title-font text-lg font-semibold text-gray-900 mb-3">Ruta de los Siete Lagos</h3>
                                <p class="leading-relaxed">Uno de los recorridos más hermosos y emocionantes para realizar en la Patagonia Argentina.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Garganta del diablo Misiones" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-5-index.png"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100">
                                <h4 class="rojo-secundario tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Misiones</h4>
                                <h3 class="poppins-medium title-font text-lg font-semibold text-gray-900 mb-3">La Garganta del Diablo</h3>
                                <p class="leading-relaxed">El salto de mayor altura de las cascadas del río Iguazú, las cataratas de mayor caudal del mundo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/3 sm:w-1/2 p-4">
                        <div class="flex relative">
                            <img alt="Nahuel Huapi Río Negro" class="img-seccion-2-index absolute inset-0 w-full h-full object-cover object-center" src="<?= url("storage/fotografias/img-6-index.jpg"); ?>">
                            <div class="px-8 py-10 relative z-10 w-full border-4 div-seccion-2-index opacity-0 hover:opacity-100">
                                <h4 class="rojo-secundario tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">Río Negro</h4>
                                <h3 class="poppins-medium title-font text-lg font-semibold text-gray-900 mb-3">Lago Nahuel Huapí</h3>
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
                    <h2 class="sm:text-3xl text-2xl title-font text-gray-900 poppins-semibold">Descubre lo que tenemos reservado</h2>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full div-icono-seccion-3-index text-indigo-500 mb-5 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-seccion-3-index"><path fill="#780000" d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z"/></svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-seccion-3-index"><path fill="#780000" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/></svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="poppins-semibold text-gray-900 text-lg title-font mb-3">Posteos de usuarios</h3>
                            <p class="leading-relaxed text-base roboto-flex azul-principal">Enterate de las experiencias y recuerdos de otros viajeros, publica tus aventuras en nuestro blog.</p>
                            <a href="{{ route('posteos.mostrar') }}" class="mt-3 text-indigo-500 inline-flex items-center hover:font-bold rojo-principal">Conocer más
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full div-icono-seccion-3-index text-indigo-500 mb-5 flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-seccion-3-index"><path fill="#780000" d="M465 7c-9.4-9.4-24.6-9.4-33.9 0L383 55c-2.4 2.4-4.3 5.3-5.5 8.5l-15.4 41-77.5 77.6c-45.1-29.4-99.3-30.2-131 1.6c-11 11-18 24.6-21.4 39.6c-3.7 16.6-19.1 30.7-36.1 31.6c-25.6 1.3-49.3 10.7-67.3 28.6C-16 328.4-7.6 409.4 47.5 464.5s136.1 63.5 180.9 18.7c17.9-17.9 27.4-41.7 28.6-67.3c.9-17 15-32.3 31.6-36.1c15-3.4 28.6-10.5 39.6-21.4c31.8-31.8 31-85.9 1.6-131l77.6-77.6 41-15.4c3.2-1.2 6.1-3.1 8.5-5.5l48-48c9.4-9.4 9.4-24.6 0-33.9L465 7zM208 256a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
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
                    <p class="lg:w-1/2 w-full leading-relaxed roboto-flex azul-principal">La gastronomía argentina es un festín para los sentidos, destacada por su <span class="span-segunda-seccion-index"> diversidad </span> y <span class="span-segunda-seccion-index"> riqueza </span> de sabores. Desde las famosas parrilladas y empanadas hasta los exquisitos vinos y dulces como el alfajor. Explorar la <span class="span-segunda-seccion-index"> cocina argentina </span> es embarcarse en un <span class="span-segunda-seccion-index"> viaje culinario </span> único, donde cada bocado cuenta una <span class="span-segunda-seccion-index"> historia</span>.</p>
                </div>
                <div class="flex flex-wrap -m-4 roboto-flex">
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="div-card-index shadow-lg p-6">
                            <img class="img-gastronomia-index h-40 rounded w-full object-cover object-center mb-6" src="<?= url("storage/fotografias/locro-index.jpg"); ?>" alt="Locro criollo">
                            <h3 class="poppins-medium text-lg text-gray-900 font-medium title-font mb-4">Locro Criollo</h3>
                            <p class="leading-relaxed text-base blanco-institucional">Un guiso ancestral que combina maíz, porotos, carne y vegetales, ofreciendo una explosión de sabores y aromas.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="div-card-index shadow-lg p-6 rounded-lg">
                            <img class="img-gastronomia-index h-40 rounded w-full object-cover object-center mb-6" src="<?= url("storage/fotografias/humita-index.jpg"); ?>" alt="Humita en olla">
                            <h3 class="poppins-medium text-lg text-gray-900 font-medium title-font mb-4">Humita en Olla</h3>
                            <p class="leading-relaxed text-base blanco-institucional">Un plato típico que celebra la frescura de la mazorca de maíz envuelta en su propia hoja y cocida a fuego lento.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="div-card-index shadow-lg p-6 rounded-lg">
                            <img class="img-gastronomia-index h-40 rounded w-full object-cover object-center mb-6" src="<?= url("storage/fotografias/empanadas-index.jpg"); ?>" alt="Empanadas salteñas">
                            <h3 class="poppins-medium text-lg text-gray-900 font-medium title-font mb-4">Empandas Salteñas</h3>
                            <p class="leading-relaxed text-base blanco-institucional">Un bocado emblemático de la región norteña de Argentina, relleno de jugosa carne, papa, huevo duro y especias.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="div-card-index shadow-lg p-6 rounded-lg">
                            <img class="img-gastronomia-index h-40 rounded w-full object-cover object-center mb-6" src="<?= url("storage/fotografias/cordero-index.jpg"); ?>" alt="Cordero patagónico">
                            <h3 class="poppins-medium text-lg text-gray-900 font-medium title-font mb-4">Cordero Patagónico</h3>
                            <p class="leading-relaxed text-base blanco-institucional">Una exquisitez de la región donde la carne tierna y ahumada se cocina lentamente al asador.</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

@endsection