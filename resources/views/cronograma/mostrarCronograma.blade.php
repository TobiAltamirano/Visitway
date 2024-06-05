@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

<h1> Cronograma </h1>

<section>

<div>
    <!-- Lunes -->
    <div id="section-1">
        <h2> Actividades Lunes </h2>

        @foreach ($actividadesLunes as $actividadLunes)
        <div>
            <p>{{ $actividadLunes->actividad->nombre_actividad }} - Hora inicio: {{ $actividadLunes->hora_inicio }}, Hora fin: {{ $actividadLunes->hora_fin }}</p>

            <!-- Borrar -->
            <form action="{{ route('cronograma.eliminar', ['id' => $actividadLunes->id]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Borrar</button>
            </form>

            Editar
            <form action="{{ route('cronograma.editar', ['id' => $actividadLunes->id]) }}" method="post">
                @csrf
                
                <label for="nuevo_dia">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                </select>
                <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                <label for="nueva_hora_fin">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                <button type="submit">Editar</button>
            </form>

            <form action="{{ route('cronograma.duplicar', [
                'id' => $actividadLunes->id, 
                'idActividad' => $actividadLunes->id_actividad 
                ]) }}" method="post">
                @csrf
                @method('post')
                <label for="dia_semana">Día:</label>
                <select name="dia_semana" id="dia_semana">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
                <label for="hora_fin">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required>
                <button type="submit">Duplicar</button>
            </form>
        </div>
        @endforeach

        

    <!-- Martes -->
    <div id="section-2">
        <h2> Actividades Martes </h2>
        @foreach ($actividadesMartes as $actividadMartes)
        <div>
            <p>{{ $actividadMartes->actividad->nombre_actividad }} - Hora inicio: {{ $actividadMartes->hora_inicio }}, Hora fin: {{ $actividadMartes->hora_fin }}</p>
        
            <form action="{{ route('cronograma.eliminar', ['id' => $actividadMartes->id]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Borrar</button>
            </form>

            <form action="{{ route('cronograma.editar', ['id' => $actividadMartes->id]) }}" method="post">
                @csrf
                @method('post')
                <label for="nuevo_dia">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                <label for="nueva_hora_fin">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                <button type="submit">Editar</button>
            </form>

            <form action="{{ route('cronograma.duplicar', [
                'id' => $actividadMartes->id, 
                'idActividad' => $actividadMartes->id_actividad 
                ]) }}" method="post">
                @csrf
                @method('post')
                <label for="dia_semana">Día:</label>
                <select name="dia_semana" id="dia_semana">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
                <label for="hora_fin">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required>
                <button type="submit">Duplicar</button>
            </form>
        </div>
        @endforeach
    </div>

    <!-- Miércoles -->
    <div id="section-3">
        <h2> Actividades Miércoles  </h2>
        @foreach ($actividadesMiercoles as $actividadMiercoles)
        <div>
            <p>{{ $actividadMiercoles->actividad->nombre_actividad }} - Hora inicio: {{ $actividadMiercoles->hora_inicio }}, Hora fin: {{ $actividadMiercoles->hora_fin }}</p>
        
            <form action="{{ route('cronograma.eliminar', ['id' => $actividadMiercoles->id]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Borrar et</button>
            </form>

            <form action="{{ route('cronograma.editar', ['id' => $actividadMiercoles->id]) }}" method="post">
                @csrf
                @method('post')
                <label for="nuevo_dia">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                <label for="nueva_hora_fin">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                <button type="submit">Editar</button>
            </form>

            <form action="{{ route('cronograma.duplicar', [
                'id' => $actividadMiercoles->id, 
                'idActividad' => $actividadMiercoles->id_actividad 
                ]) }}" method="post">
                @csrf
                @method('post')
                <label for="dia_semana">Día:</label>
                <select name="dia_semana" id="dia_semana">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
                <label for="hora_fin">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required>
                <button type="submit">Duplicar</button>
            </form>
        </div>

        @endforeach
    </div>

    <!-- Jueves -->
    <div id="section-4">
        <h2> Actividades Jueves </h2>
        @foreach ($actividadesJueves as $actividadJueves)
        <div>
            <p>{{ $actividadJueves->actividad->nombre_actividad }} - Hora inicio: {{ $actividadJueves->hora_inicio }}, Hora fin: {{ $actividadJueves->hora_fin }}</p>
        
            <form action="{{ route('cronograma.eliminar', ['id' => $actividadJueves->id]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Borrar</button>
            </form>

            <form action="{{ route('cronograma.editar', ['id' => $actividadJueves->id]) }}" method="post">
                @csrf
                @method('post')
                <label for="nuevo_dia">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                <label for="nueva_hora_fin">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                <button type="submit">Editar</button>
            </form>

            <form action="{{ route('cronograma.duplicar', [
                'id' => $actividadJueves->id, 
                'idActividad' => $actividadJueves->id_actividad 
                ]) }}" method="post">
                @csrf
                @method('post')
                <label for="dia_semana">Día:</label>
                <select name="dia_semana" id="dia_semana">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
                <label for="hora_fin">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required>
                <button type="submit">Duplicar</button>
            </form>
        </div>

        @endforeach
    </div>

    <!-- Viernes -->
    <div id="section-5">
        <h2> Actividades Viernes </h2>
        @foreach ($actividadesViernes as $actividadViernes)
        <div>
            <p>{{ $actividadViernes->actividad->nombre_actividad }} - Hora inicio: {{ $actividadViernes->hora_inicio }}, Hora fin: {{ $actividadViernes->hora_fin }}</p>
        
            <form action="{{ route('cronograma.eliminar', ['id' => $actividadViernes->id]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Borrar</button>
            </form>

            <form action="{{ route('cronograma.editar', ['id' => $actividadViernes->id]) }}" method="post">
                @csrf
                @method('post')
                <label for="nuevo_dia">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                <label for="nueva_hora_fin">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                <button type="submit">Editar</button>
            </form>

            <form action="{{ route('cronograma.duplicar', [
                'id' => $actividadViernes->id, 
                'idActividad' => $actividadViernes->id_actividad 
                ]) }}" method="post">
                @csrf
                @method('post')
                <label for="dia_semana">Día:</label>
                <select name="dia_semana" id="dia_semana">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
                <label for="hora_fin">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required>
                <button type="submit">Duplicar</button>
            </form>
        </div>

        @endforeach
    </div>

    <!-- Sábado -->
    <div id="section-6">
        <h2> Actividades Sábado </h2>
        @foreach ($actividadesSabado as $actividadSabado)
        <div>
            <p>{{ $actividadSabado->actividad->nombre_actividad }} - Hora inicio: {{ $actividadSabado->hora_inicio }}, Hora fin: {{ $actividadSabado->hora_fin }}</p>
        
            <form action="{{ route('cronograma.eliminar', ['id' => $actividadSabado->id]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Borrar</button>
            </form>

            <form action="{{ route('cronograma.editar', ['id' => $actividadSabado->id]) }}" method="post">
                @csrf
                @method('post')
                <label for="nuevo_dia">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                <label for="nueva_hora_fin">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                <button type="submit">Editar</button>
            </form>

            <form action="{{ route('cronograma.duplicar', [
                'id' => $actividadSabado->id, 
                'idActividad' => $actividadSabado->id_actividad 
                ]) }}" method="post">
                @csrf
                @method('post')
                <label for="dia_semana">Día:</label>
                <select name="dia_semana" id="dia_semana">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
                <label for="hora_fin">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required>
                <button type="submit">Duplicar</button>
            </form>
        </div>
        @endforeach
    </div>

    <!-- Domingo -->
    <div id="section-7">
        <h2> Actividades Domingo </h2>
        @foreach ($actividadesDomingo as $actividadDomingo)
        <div>
            <p>{{ $actividadDomingo->actividad->nombre_actividad }} - Hora inicio: {{ $actividadDomingo->hora_inicio }}, Hora fin: {{ $actividadDomingo->hora_fin }}</p>

            <form action="{{ route('cronograma.eliminar', ['id' => $actividadDomingo->id]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit">Borrar</button>
            </form>

            <form action="{{ route('cronograma.editar', ['id' => $actividadDomingo->id]) }}" method="post">
                @csrf
                @method('post')
                <label for="nuevo_dia">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                <label for="nueva_hora_fin">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                <button type="submit">Editar</button>
            </form>

            <form action="{{ route('cronograma.duplicar', [
                'id' => $actividadDomingo->id, 
                'idActividad' => $actividadDomingo->id_actividad 
                ]) }}" method="post">
                @csrf
                @method('post')
                <label for="dia_semana">Día:</label>
                <select name="dia_semana" id="dia_semana">
                    <option value="1">Lunes</option>
                    <option value="2">Martes</option>
                    <option value="3">Miércoles</option>
                    <option value="4">Jueves</option>
                    <option value="5">Viernes</option>
                    <option value="6">Sábado</option>
                    <option value="7">Domingo</option>
                    <!-- Agrega opciones para los otros días -->
                </select>
                <label for="hora_inicio">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required>
                <label for="hora_fin">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required>
                <button type="submit">Duplicar</button>
            </form>
        </div>
        @endforeach
    </div>
</div>


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

<!--Tabs navigation for primary color-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home0"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-primary data-[twe-nav-active]:text-primary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-primary"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home0"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home0"
      aria-selected="true"
      >Lunes</a
    >
  </li>
</ul>

<!--Tabs content for primary color-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home0"
    role="tabpanel"
    aria-labelledby="tabs-home-tab0"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile0"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab0">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages0"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab0">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact0"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab0">
    Tab 4 content
  </div>
</div>

<!--Tabs navigation for secondary color-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home1"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-secondary data-[twe-nav-active]:text-secondary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-secondary"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home1"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home1"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-profile1"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-secondary data-[twe-nav-active]:text-secondary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-secondary"
      data-twe-toggle="pill"
      data-twe-target="#tabs-profile1"
      role="tab"
      aria-controls="tabs-profile1"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-messages1"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-secondary data-[twe-nav-active]:text-secondary dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-secondary"
      data-twe-toggle="pill"
      data-twe-target="#tabs-messages1"
      role="tab"
      aria-controls="tabs-messages1"
      aria-selected="false"
      >Messages</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-contact1"
      class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-contact1"
      role="tab"
      aria-controls="tabs-contact1"
      aria-selected="false"
      >Contact</a
    >
  </li>
</ul>

<!--Tabs content for secondary color-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home1"
    role="tabpanel"
    aria-labelledby="tabs-home-tab1"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile1"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab1">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages1"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab1">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact1"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab1">
    Tab 4 content
  </div>
</div>

<!--Tabs navigation for success color-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home2"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-success data-[twe-nav-active]:text-success dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-success"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home2"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home2"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-profile2"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-success data-[twe-nav-active]:text-success dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-success"
      data-twe-toggle="pill"
      data-twe-target="#tabs-profile2"
      role="tab"
      aria-controls="tabs-profile2"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-messages2"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-success data-[twe-nav-active]:text-success dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-success"
      data-twe-toggle="pill"
      data-twe-target="#tabs-messages2"
      role="tab"
      aria-controls="tabs-messages2"
      aria-selected="false"
      >Messages</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-contact2"
      class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-contact2"
      role="tab"
      aria-controls="tabs-contact2"
      aria-selected="false"
      >Contact</a
    >
  </li>
</ul>

<!--Tabs content for success color-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home2"
    role="tabpanel"
    aria-labelledby="tabs-home-tab2"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile2"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab2">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages2"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab2">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact2"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab2">
    Tab 4 content
  </div>
</div>

<!--Tabs navigation for danger color-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home3"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-danger data-[twe-nav-active]:text-danger dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-danger"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home3"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home3"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-profile3"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-danger data-[twe-nav-active]:text-danger dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-danger"
      data-twe-toggle="pill"
      data-twe-target="#tabs-profile3"
      role="tab"
      aria-controls="tabs-profile3"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-messages3"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-danger data-[twe-nav-active]:text-danger dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-danger"
      data-twe-toggle="pill"
      data-twe-target="#tabs-messages3"
      role="tab"
      aria-controls="tabs-messages3"
      aria-selected="false"
      >Messages</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-contact3"
      class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-contact3"
      role="tab"
      aria-controls="tabs-contact3"
      aria-selected="false"
      >Contact</a
    >
  </li>
</ul>

<!--Tabs content for danger color-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home3"
    role="tabpanel"
    aria-labelledby="tabs-home-tab3"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile3"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab3">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages3"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab3">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact3"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab3">
    Tab 4 content
  </div>
</div>

<!--Tabs navigation for warning color-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home4"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-warning data-[twe-nav-active]:text-warning dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-warning"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home4"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home4"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-profile4"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-warning data-[twe-nav-active]:text-warning dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-warning"
      data-twe-toggle="pill"
      data-twe-target="#tabs-profile4"
      role="tab"
      aria-controls="tabs-profile4"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-messages4"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-warning data-[twe-nav-active]:text-warning dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-warning"
      data-twe-toggle="pill"
      data-twe-target="#tabs-messages4"
      role="tab"
      aria-controls="tabs-messages4"
      aria-selected="false"
      >Messages</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-contact4"
      class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-contact4"
      role="tab"
      aria-controls="tabs-contact4"
      aria-selected="false"
      >Contact</a
    >
  </li>
</ul>

<!--Tabs content for warning color-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home4"
    role="tabpanel"
    aria-labelledby="tabs-home-tab4"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile4"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab4">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages4"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab4">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact4"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab4">
    Tab 4 content
  </div>
</div>

<!--Tabs navigation for info color-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home5"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-info data-[twe-nav-active]:text-info dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-info"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home5"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home5"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-profile5"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-info data-[twe-nav-active]:text-info dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-info"
      data-twe-toggle="pill"
      data-twe-target="#tabs-profile5"
      role="tab"
      aria-controls="tabs-profile5"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-messages5"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-info data-[twe-nav-active]:text-info dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:text-info"
      data-twe-toggle="pill"
      data-twe-target="#tabs-messages5"
      role="tab"
      aria-controls="tabs-messages5"
      aria-selected="false"
      >Messages</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-contact5"
      class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-contact5"
      role="tab"
      aria-controls="tabs-contact5"
      aria-selected="false"
      >Contact</a
    >
  </li>
</ul>

<!--Tabs content for info color-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home5"
    role="tabpanel"
    aria-labelledby="tabs-home-tab5"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile5"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab5">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages5"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab5">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact5"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab5">
    Tab 4 content
  </div>
</div>

<!--Tabs navigation for dark color-->
<ul
  class="mb-5 flex list-none flex-row flex-wrap border-b-0 ps-0"
  role="tablist"
  data-twe-nav-ref>
  <li role="presentation">
    <a
      href="#tabs-home7"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-neutral-800 data-[twe-nav-active]:text-neutral-800 dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:border-neutral-600 dark:data-[twe-nav-active]:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-home7"
      data-twe-nav-active
      role="tab"
      aria-controls="tabs-home7"
      aria-selected="true"
      >Home</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-profile7"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-neutral-800 data-[twe-nav-active]:text-neutral-800 dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:border-neutral-600 dark:data-[twe-nav-active]:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-profile7"
      role="tab"
      aria-controls="tabs-profile7"
      aria-selected="false"
      >Profile</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-messages7"
      class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[twe-nav-active]:border-neutral-800 data-[twe-nav-active]:text-neutral-800 dark:text-white/50 dark:hover:bg-neutral-700/60 dark:data-[twe-nav-active]:border-neutral-600 dark:data-[twe-nav-active]:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-messages7"
      role="tab"
      aria-controls="tabs-messages7"
      aria-selected="false"
      >Messages</a
    >
  </li>
  <li role="presentation">
    <a
      href="#tabs-contact7"
      class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
      data-twe-toggle="pill"
      data-twe-target="#tabs-contact7"
      role="tab"
      aria-controls="tabs-contact7"
      aria-selected="false"
      >Contact</a
    >
  </li>
</ul>

<!--Tabs content for dark color-->
<div class="mb-6">
  <div
    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-home7"
    role="tabpanel"
    aria-labelledby="tabs-home-tab7"
    data-twe-tab-active>
    Tab 1 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-profile7"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab7">
    Tab 2 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-messages7"
    role="tabpanel"
    aria-labelledby="tabs-profile-tab7">
    Tab 3 content
  </div>
  <div
    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
    id="tabs-contact7"
    role="tabpanel"
    aria-labelledby="tabs-contact-tab7">
    Tab 4 content
  </div>
</div>

@endsection