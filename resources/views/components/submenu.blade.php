<link rel="stylesheet" href="<?= url("css/provincias.css"); ?>">
<link rel="stylesheet" href="<?= url("css/main.css"); ?>">
<div class="relative submenu-button" data-twe-dropdown-ref>
    <a class="poppins-semibold submenu-boton flex items-center rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300  motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" href="#" type="button" id="dropdownMenuButton2" data-twe-dropdown-toggle-ref aria-expanded="false" data-twe-ripple-init data-twe-ripple-color="light">
        Explorar
        <span class="ms-2 w-2 [&>svg]:h-5 [&>svg]:w-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
        </span>
    </a>
    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="dropdownMenuButton2" data-twe-dropdown-menu-ref>
        <li>
            <a class="block w-full poppins-regular azul-principal whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('provincia.introduccion', ['id' => $provincia->id_provincia]) }}" data-twe-dropdown-item-ref>Introducción</a>
        </li>
        <li>
            <a class="block w-full poppins-regular azul-principal whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('provincia.tipos-actividades', ['id' => $provincia->id_provincia]) }}" data-twe-dropdown-item-ref>Actividades</a>
        </li>
        <li>
            <a class="block w-full poppins-regular azul-principal whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('provincia.tipos-gastronomia', ['id' => $provincia->id_provincia]) }}" data-twe-dropdown-item-ref>Gastronomía</a>
        </li>
        <li>
            <a class="block w-full poppins-regular azul-principal whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" href="{{ route('provincia.tipos-alojamientos', ['id' => $provincia->id_provincia]) }}" data-twe-dropdown-item-ref>Alojamientos</a>
        </li>
    </ul>
</div>