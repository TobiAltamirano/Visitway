<!-- resources/views/pagination.blade.php -->

@if ($paginator->hasPages())
<nav aria-label="Page navigation example text-center">
  <ul class="list-style-none flex justify-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li>
      <a class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface/50 transition duration-300 dark:text-neutral-400 rojo-principal roboto-flex font-medium">Anterior</a>
    </li>
    @else
    <li>
      <a href="{{ $paginator->previousPageUrl() }}" class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:focus:text-primary-500 dark:active:bg-neutral-700 dark:active:text-primary-500 rojo-principal roboto-flex font-medium">Anterior</a>
    </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <li><span class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface">...</span></li>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li aria-current="page">
      <span class="relative block rounded bg-primary-100 px-3 py-1.5 text-sm font-medium text-primary-700 transition duration-300 focus:outline-none dark:bg-slate-900 dark:text-primary-500 azul-principal roboto-flex font-medium">{{ $page }}</span>
    </li>
    @else
    <li>
      <a href="{{ $url }}" class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:focus:text-primary-500 dark:active:bg-neutral-700 dark:active:text-primary-500 azul-principal roboto-flex font-medium">{{ $page }}</a>
    </li>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <li>
      <a href="{{ $paginator->nextPageUrl() }}" class="relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface transition duration-300 hover:bg-neutral-100 focus:bg-neutral-100 focus:text-primary-700 focus:outline-none active:bg-neutral-100 active:text-primary-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:focus:text-primary-500 dark:active:bg-neutral-700 dark:active:text-primary-500 rojo-principal roboto-flex font-medium">Siguiente</a>
    </li>
    @else
    <li>
      <a class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-surface/50 transition duration-300 dark:text-neutral-400 rojo-principal roboto-flex font-medium">Siguiente</a>
    </li>
    @endif
  </ul>
</nav>
@endif