<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - Visitway</title>
        <link id="favicon-light" rel="icon" type="image/png" href="{{ asset('Fav-icon-positivo.png') }}">
        <link rel="stylesheet" href="<?= url("css/main.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/index.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/provincias.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/cronograma.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/blog.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/sobreVisitway.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/panelAdministrador.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/favoritos.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/auth.css"); ?>">
        <link rel="stylesheet" href="<?= url("css/perfil.css"); ?>">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
</head>

<body>
    <header>
        <nav class="navbar flex-no-wrap relative flex w-full items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4" data-twe-navbar-ref>
            <div class="flex w-full flex-wrap items-center justify-between px-3">
                <!-- Hamburger button for mobile view -->
                <button type="button" class="bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden azul-principal" data-twe-collapse-init data-twe-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="logo [&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#003049" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </span>
                </button>
                
                <!-- Logo container -->
                <div>
                    <a href="#" class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0">
                        <img src="<?= url("storage/logotipos/isotipo_visitway.png"); ?>" style="height: 50px" alt="Logo Visitway" loading="lazy" />
                    </a>
                </div>

                <!-- Collapsible navbar container -->
                <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto" id="navbarSupportedContent4" data-twe-collapse-item>
                    <!-- Left navigation links -->
                    <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <!-- Inicio link -->
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="<?= url("/"); ?>" data-twe-nav-link-ref>Inicio</a>
                        </li>
                        <!-- Provincias link -->
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="{{ route('provincias.mostrar') }}" data-twe-nav-link-ref>Provincias</a>
                        </li>
                        <!-- Cronograma link -->
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="{{ route('cronograma.mostrar') }}" data-twe-nav-link-ref>Cronograma</a>
                        </li>
                        <!-- Blog link -->
                        <li class="relative mb-4 lg:mb-0 lg:pe-2" data-twe-dropdown-ref data-twe-dropdown-alignment="start">
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2 cursor-pointer" href="#" id="dropdownBlogLink" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                                Blog
                            </a>
                            <!-- Blog dropdown menu -->
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownBlogLink" data-twe-dropdown-menu-ref>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('posteos.mostrar') }}" data-twe-dropdown-item-ref>Posteos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('alternativas.mostrar') }}" data-twe-dropdown-item-ref>Actividades Alternativas</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Sobre Visitway link -->
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="<?= url("/sobre-visitway"); ?>" data-twe-nav-link-ref>Sobre Visitway</a>
                        </li>
                        <li class="relative mb-4 lg:mb-0 lg:pe-2" data-twe-dropdown-ref data-twe-dropdown-alignment="start">
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2 cursor-pointer" href="#" id="dropdownPanelAdministradorLink" data-twe-dropdown-toggle-ref aria-expanded="false">
                                Panel Administrador
                            </a>
                            <!-- PanelAdministrador dropdown menu -->
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownPanelAdministradorLink" data-twe-dropdown-menu-ref>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.usuarios.mostrar') }}" data-twe-dropdown-item-ref>Usuarios</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.actividades') }}" data-twe-dropdown-item-ref>Actividades</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.alojamientos') }}" data-twe-dropdown-item-ref>Alojamientos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.locales_gastronomicos') }}" data-twe-dropdown-item-ref>Locales Gastronomicos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.posteos.mostrar') }}" data-twe-dropdown-item-ref>Posteos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.actividades-alternativas.mostrar') }}" data-twe-dropdown-item-ref>Actividades Alternativas</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Right elements -->
                <div class="relative flex items-center">
                    <!-- Icon -->
                    <a class="me-4 text-neutral-600 dark:text-white" href="{{ route('favoritos.mostrar') }}">
                        <span class="[&>svg]:w-7">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                            </svg>
                        </span>
                    </a>

                    <!-- First dropdown container -->
                    <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                        <!-- First dropdown trigger -->
                        <a class="me-4 flex items-center text-neutral-600 dark:text-white" href="#" id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                            <!-- Dropdown trigger icon -->
                            <span class="[&>svg]:w-7">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <!-- Notification counter -->
                            <!-- <span class="absolute -mt-4 ms-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white">1</span> -->
                        </a>
                        <!-- First dropdown menu -->
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                            <!-- First dropdown menu items -->
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Action</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Another action</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Something else here</a>
                            </li>
                        </ul>
                    </div>
                    @auth
                    <!-- Second dropdown container -->
                    <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                        <!-- Second dropdown trigger -->
                        <a class="flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none" href="#" id="dropdownMenuButton2" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                            <!-- User avatar -->
                            <img src="{{ asset('storage/avatars/' . $user->avatar ) }}" class="rounded-full" style="height: 35px; width: 35px" alt="" loading="lazy" />
                        </a>
                        <!-- Second dropdown menu -->
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                            <!-- Second dropdown menu items -->
                            <li>
                                <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('profile.edit') }}" data-twe-dropdown-item-ref>
                                    {{ __('Perfil') }}
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('logout') }}" data-twe-dropdown-item-ref onclick="event.preventDefault();
                            this.closest('form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @else
                    <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="{{ url('/login') }}">
                        Iniciar sesión
                    </a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <header>
        <nav class="navbar flex-no-wrap relative flex w-full items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4">
            <div class="container-navbar flex w-full flex-wrap items-center justify-between px-3">
                <!-- Hamburger button for mobile view -->
                <button class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden" type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Hamburger icon -->
                    <span class="logo [&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#003049" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </span>
                </button>

                <!-- Collapsible navigation container -->
                <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent1" data-twe-collapse-item>
                    <!-- Logo -->
                    <a class="mb-4 me-5 ms-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0" href="#">
                        <img src="<?= url("storage/logotipos/isotipo_visitway.png"); ?>" style="height: 50px" alt="Logo Visitway" loading="lazy" />
                    </a>
                    <!-- Left navigation links -->
                    <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <!-- Inicio link -->
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="<?= url("/"); ?>" data-twe-nav-link-ref>Inicio</a>
                        </li>
                        <!-- Provincias link -->
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="{{ route('provincias.mostrar') }}" data-twe-nav-link-ref>Provincias</a>
                        </li>
                        <!-- Cronograma link -->
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="{{ route('cronograma.mostrar') }}" data-twe-nav-link-ref>Cronograma</a>
                        </li>
                        <!-- Blog link -->
                        <li class="relative mb-4 lg:mb-0 lg:pe-2" data-twe-dropdown-ref data-twe-dropdown-alignment="start">
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2 cursor-pointer" href="#" id="dropdownBlogLink" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                                Blog
                            </a>
                            <!-- Blog dropdown menu -->
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownBlogLink" data-twe-dropdown-menu-ref>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('posteos.mostrar') }}" data-twe-dropdown-item-ref>Posteos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('alternativas.mostrar') }}" data-twe-dropdown-item-ref>Actividades Alternativas</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Sobre Visitway link -->
                        <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="<?= url("/sobre-visitway"); ?>" data-twe-nav-link-ref>Sobre Visitway</a>
                        </li>
                        <li class="relative mb-4 lg:mb-0 lg:pe-2" data-twe-dropdown-ref data-twe-dropdown-alignment="start">
                            <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2 cursor-pointer" href="#" id="dropdownPanelAdministradorLink" data-twe-dropdown-toggle-ref aria-expanded="false">
                                Panel Administrador
                            </a>
                            <!-- PanelAdministrador dropdown menu -->
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownPanelAdministradorLink" data-twe-dropdown-menu-ref>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.usuarios.mostrar') }}" data-twe-dropdown-item-ref>Usuarios</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.actividades') }}" data-twe-dropdown-item-ref>Actividades</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.alojamientos') }}" data-twe-dropdown-item-ref>Alojamientos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.locales_gastronomicos') }}" data-twe-dropdown-item-ref>Locales Gastronomicos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.posteos.mostrar') }}" data-twe-dropdown-item-ref>Posteos</a>
                                </li>
                                <li>
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('administrador.actividades-alternativas.mostrar') }}" data-twe-dropdown-item-ref>Actividades Alternativas</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>

                <!-- Right elements -->
                <div class="relative flex items-center">
                    <!-- Icon -->
                    <a class="me-4 text-neutral-600 dark:text-white" href="{{ route('favoritos.mostrar') }}">
                        <span class="[&>svg]:w-7">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor">
                                <path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                            </svg>
                        </span>
                    </a>

                    <!-- First dropdown container -->
                    <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                        <!-- First dropdown trigger -->
                        <a class="me-4 flex items-center text-neutral-600 dark:text-white" href="#" id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                            <!-- Dropdown trigger icon -->
                            <span class="[&>svg]:w-7">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <!-- Notification counter -->
                            <!-- <span class="absolute -mt-4 ms-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white">1</span> -->
                        </a>
                        <!-- First dropdown menu -->
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                            <!-- First dropdown menu items -->
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Action</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Another action</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="#" data-twe-dropdown-item-ref>Something else here</a>
                            </li>
                        </ul>
                    </div>
                    @auth
                    <!-- Second dropdown container -->
                    <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                        <!-- Second dropdown trigger -->
                        <a class="flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none" href="#" id="dropdownMenuButton2" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                            <!-- User avatar -->
                            <img src="{{ asset('storage/avatars/' . $user->avatar ) }}" class="rounded-full" style="height: 35px; width: 35px" alt="" loading="lazy" />
                        </a>
                        <!-- Second dropdown menu -->
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
                            <!-- Second dropdown menu items -->
                            <li>
                                <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('profile.edit') }}" data-twe-dropdown-item-ref>
                                    {{ __('Perfil') }}
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="poppins-regular block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('logout') }}" data-twe-dropdown-item-ref onclick="event.preventDefault();
                            this.closest('form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @else
                    <a class="poppins-medium text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2" href="{{ url('/login') }}">
                        Iniciar sesión
                    </a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <div class="fondo-rojo"></div>
    <div class="fondo-blanco">

        @yield('content')

    </div>

    <div>
        @include('layouts.terminos-condiciones')
    </div>

    <footer>
        <div class="fondo-rojo"></div>
        <div class="fondo-azul-footer">
            <div class="encabezado-footer">
                <div>
                    <ul>
                        <div>
                            <li class="li-footer transform hover:scale-110 transition-transform duration-200">
                                <p data-twe-toggle="modal" data-twe-target="#exampleModalScrollable">Términos y condiciones</p>
                            </li>
                            <li class="li-footer transform hover:scale-110 transition-transform duration-200"><a href="{{ url('/sobre-visitway') }}#nuestro-equipo">Nuestro equipo</a></li>
                            <li class="li-footer transform hover:scale-110 transition-transform duration-200"><a href="{{ url('/sobre-visitway') }}#preguntas-frecuentes">Preguntas frecuentes</a></li>
                        </div>
                    </ul>
                </div>
                <div>
                    <div>
                        <img class="logo-negativo-footer" src="<?= url("storage/logotipos/isotipo_visitway_negativo.png"); ?>" alt="Logo Visitway Negativo">
                    </div>
                </div>
                <div>
                    <div class="redes-footer">
                        <div>
                            <a href="#">
                                <svg class="transform hover:scale-110 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#fdf0d5" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="#">
                                <svg class="transform hover:scale-110 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" height="32" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#fdf0d5" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                </svg>
                            </a>
                        </div>

                        <div class="facebook-svg">
                            <a href="#">
                                <svg class="transform hover:scale-110 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" height="24" width="20" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#fdf0d5" d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pie-footer">
                <div class="linea-footer"></div>
            </div>
            <p class="p-footer">© 2024 Visitway | Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>