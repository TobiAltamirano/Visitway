<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>

<body style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -webkit-text-size-adjust: none; background-color: #ffffff; color: #718096; height: 100%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;">
    <div style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; background-color: #ffffff;">
        <div style="padding: 20px; background-color: #ffffff;">
            <div style="text-align: center;">
                <h1 style="color: #3d4852; font-size: 24px; font-weight: bold; text-align: center;">Hola!</h1>
                <p style="font-size: 16px; color: #e53e3e; margin-top: 0; text-align: center;">Estás recibiendo este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.</p>
            </div>
            <div style="text-align: center; margin: 30px 0;">
                {{-- Botón de Acción --}}
                @isset($actionText)
                <?php
                $color = match ($level) {
                    'success', 'error' => $level,
                    default => 'primary',
                };
                ?>
                <x-mail::button :url="$actionUrl" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #2d3748; text-decoration: none; border-radius: 5px;">
                    Restablecer contraseña
                </x-mail::button>
                @endisset
            </div>
            <p style="font-size: 14px; color: #3d4852; text-align: center;">
                Este enlace para restablecer la contraseña caducará en 60 minutos.<br>
                Si no solicitó un restablecimiento de contraseña, no es necesario realizar ninguna otra acción.
            </p>
            <p style="font-size: 14px; color: #3d4852; text-align: center;">
                Saludos,
                Visitway
            </p>
            <p style="font-size: 14px; color: #718096; text-align: center;">
                @isset($actionText)
                @lang(
                "Si tienes problemas para hacer clic en el botón \"Restablecer contraseña\", copia y pega la URL siguiente\n".
                'en tu navegador web:',
                [
                'actionText' => $actionText,
                ]
                ) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
                @endisset
            </p>
        </div>
    </div>
</body>

</html>