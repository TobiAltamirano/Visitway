<h1>Mis Alojamientos Favoritos a lo largo de Argentina</h1>

    <h2>Alojamientos Favoritos:</h2>
    @if ($alojamientosFavoritos->isEmpty())
        <p>No tienes ningún alojamiento guardado como favorito.</p>
    @else
        <ul>
            @foreach ($alojamientosFavoritos as $alojamiento)
                <li>{{ $alojamiento->nombre_alojamiento }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Actividades Favoritas:</h2>
    @if ($actividadesFavoritas->isEmpty())
        <p>No tienes ninguna actividad guardada como favorito.</p>
    @else
        <ul>
            @foreach ($actividadesFavoritas as $actividad)
                <li>{{ $actividad->nombre_actividad }}</li>
            @endforeach
        </ul>
    @endif

    <h2>Locales gastronomicos Favoritos:</h2>
    @if ($localesGastronomicosFavoritos->isEmpty())
        <p>No tienes ningun local gastronomico guardado como favorito.</p>
    @else
        <ul>
            @foreach ($localesGastronomicosFavoritos as $localGastronomico)
                <li>{{ $localGastronomico->nombre_local_gastronomico }}</li>
            @endforeach
        </ul>
    @endif
