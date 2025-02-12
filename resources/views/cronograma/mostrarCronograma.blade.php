@extends('layouts.main')

@section('title', 'Cronograma')

@section('content')

<section>

  <h1 class="h1-provincias text-4xl text-2xl title-font mb-4 text-gray-900 rojo-secundario poppins-semibold">Cronograma</h1>

  <p class="lg:w-2/3 mx-auto text-center font-bold leading-relaxed text-base azul-principal roboto-flex">Personaliza tu rutina de viaje y anota todas tus aventuras</p>

  @include('components.lineas-secundarias')

  @include('components.toast-notification')

  <div class="w-full max-w-8xl mx-auto p-6 sm:p-8 mt-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      @include('cronograma.partials.actividades-lunes')

      @include('cronograma.partials.actividades-martes')

      @include('cronograma.partials.actividades-miercoles')

      @include('cronograma.partials.actividades-jueves')

      @include('cronograma.partials.actividades-viernes')

      @include('cronograma.partials.actividades-sabado')

      @include('cronograma.partials.actividades-domingo')

    </div>
  </div>

  @endsection