<h1>Eliminar Local gastronómico</h1>

<p>¿Estás seguro de que quieres eliminar este local gastronómico?</p>
<p><strong>Título:</strong> {{ $localGastronomico->nombre_local_gastronomico }}</p>
@if($localGastronomico->imagen_local_gastronomico !== null)
        <img src="{{ asset('storage/' . $localGastronomico->imagen_local_gastronomico) }}" alt="Imagen Noticia - {{$localGastronomico->nombre_local_gastronomico }}" class="card-img-top">
    @else
        No se ha encontrado la imagen, puede que haya habido un error al cargarla. Porfavor, vuelve a intentarlo.
    @endif

<form action="{{ route('administrador.locales_gastronomicos.eliminar.procesar', ['id' => $localGastronomico->id_local_gastronomico]) }}" method="POST">
    @csrf
    @method('POST')
    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('administrador.locales_gastronomicos') }}">Cancelar</a>