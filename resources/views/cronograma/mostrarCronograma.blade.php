

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

            <!-- Editar -->
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