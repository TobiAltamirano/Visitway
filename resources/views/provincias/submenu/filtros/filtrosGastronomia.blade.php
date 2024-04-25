<h1>Locales gastronomicos:</h1>
<ul>
    @foreach ($localesGastronomicos as $localGastronomico)
    <li><a href="{{ route('provincia.detalleGastronomia', ['id' => $provincia->id_provincia, 'actividadId' => $localGastronomico->id_local_gastronomico]) }}">{{ $localGastronomico->nombre_local_gastronomico }}</li>
    @endforeach
</ul>