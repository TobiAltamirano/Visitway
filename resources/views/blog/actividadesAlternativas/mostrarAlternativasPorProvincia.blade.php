@extends('layouts.main')

@section('title', 'Actividades Alternativas Propias')

@section('content')

<section>

    <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Actividades alternativas<br></h1>

    @include('components.lineas-secundarias')

    <div class="flex justify-center mt-12 mb-12 gap-4">
        <div>
            <a href="{{ route('alternativas.propias') }}" class="roboto-flex azul-principal flex justify-center hover:font-bold">Ver mis actividades alternativas</a>
        </div>
        <div>
            <a href="{{route('alternativas.crear')}}" class="roboto-flex azul-principal flex justify-center hover:font-bold">Crear actividad alternativa</a></button>
        </div>
    </div>

    @if (session('status.message'))
    <div class="alert alert-success">
        {{ session('status.message') }}
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Botón desplegar filtros -->
    <div class="flex justify-center">
        <button id="mostrarFormulario" type="button" class="filtros-boton poppins-semibold inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:active:shadow-dark-strong">
            Desplegar filtros
        </button>
    </div>

    <!-- Filtros activos -->
    <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base azul-principal roboto-flex mt-12">Provincias seleccionadas: </p>
    <ul class="mt-4 flex justify-center flex-col text-center gap-2 roboto-flex azul-principal">
        @foreach($provinciasSeleccionadas as $provincia)
        <li>{{ $provincia }}</li>
        @endforeach
    </ul>
    <!-- Eliminar filtros -->
    <p class="text-center mt-4 roboto-flex rojo-principal hover:font-bold"><a href="{{ url()->previous() }}">Eliminar filtros</a></p>


    <!-- Formulario oculto -->
    @include('components.form-filtros-alternativas')

    <script>
        // Obtenemos referencias a los elementos del DOM
        const botonMostrarFormulario = document.getElementById('mostrarFormulario');
        const formularioContainer = document.getElementById('formularioContainer');

        // Agregamos un event listener al botón para mostrar u ocultar el formulario
        botonMostrarFormulario.addEventListener('click', function() {
            // Alternamos la clase 'hidden' en el contenedor del formulario para mostrarlo u ocultarlo
            formularioContainer.classList.toggle('hidden');

            // Cambiamos el texto del botón dinámicamente
            if (formularioContainer.classList.contains('hidden')) {
                botonMostrarFormulario.textContent = 'Desplegar Filtros';
            } else {
                botonMostrarFormulario.textContent = 'Cerrar Filtros';
            }
        });
    </script>

    <div class="container mx-auto px-4">
        <div class="grid gap-6 lg:grid-cols-3">
            @foreach($actividadesAlternativas as $actividadAlternativa)
            <div class="flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white md:max-w-xl md:flex-row">
                @if($actividadAlternativa->imagen1 !== null)
                <img src="{{ asset('storage/' . $actividadAlternativa->imagen1) }}" alt="Imagen Noticia - {{$actividadAlternativa->titulo }}" class="card-img-top">
                @else
                No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
                @endif
                <div class="flex flex-col justify-start p-6">
                    <p><strong>Usuario:</strong>{{ $actividadAlternativa->usuario->name }}</p>
                    <h5 class="mb-2 text-xl font-medium">{{ $actividadAlternativa->titulo }}</h5>
                    <p class="mb-4 text-base">
                        {{ $actividadAlternativa->descripcion }}
                    </p>
                    <p class="text-xs text-surface/75 dark:text-neutral-300">
                        {{ $actividadAlternativa->provincia }}
                    </p>
                    <div class="mt-4 flex justify-center gap-4">
                        @if($actividadAlternativa->id_usuario === auth()->id())
                        <button><a href="{{ route('alternativas.editar', $actividadAlternativa->id) }}">Editar Actividad Alternativa</a></button>
                        @endif

                        @if($actividadAlternativa->id_usuario === auth()->id())
                        <button><a href="{{ route('alternativas.eliminar', $actividadAlternativa->id) }}">Eliminar Actividad Alternativa</a></button>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</section>

@endsection