<x-mail::message>
{{-- Saludo --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('¡Ups!')
@else
# @lang('¡Hola!')
@endif
@endif

{{-- Líneas de Introducción --}}
@foreach ($introLines as $line)
Estás recibiendo este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.

@endforeach

{{-- Botón de Acción --}}
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
Restablecer contraseña
</x-mail::button>
@endisset

{{-- Líneas de Conclusión --}}
Este enlace para restablecer la contraseña caducará en 60 minutos.

Si no solicitó un restablecimiento de contraseña, no es necesario realizar ninguna otra acción.

{{-- Despedida --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Saludos'),<br>
{{ config('app.name') }}
@endif

{{-- Subcopiado --}}
@isset($actionText)
<x-slot:subcopy>
@lang(
    "Si tienes problemas para hacer clic en el botón "Restablecer contraseña", copia y pega la URL siguiente\n".
    'en tu navegador web:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>