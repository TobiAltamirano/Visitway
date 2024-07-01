@extends('layouts.main')

@section('content')

<section>
<div class="flex items-center justify-center p-16">
        <div class="text-center">
            <h1 class="text-9xl font-bold mb-8 mt-6 rojo-principal">@yield('code')</h1>
            <p class="text-4xl mb-6 mt-4 azul-principal">@yield('message')</p>

            @include('components.lineas-secundarias')

            <a class="inline-flex mt-14 h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex" href="{{ route('index') }}">
                Volver al inicio
            </a>
        </div>
    </div>
</section>

@endsection