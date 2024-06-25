@vite('resources/css/app.css')
@vite('resources/js/app.js')

<link rel="stylesheet" href="<?= url("css/main.css"); ?>">
<link rel="stylesheet" href="<?= url("css/auth.css"); ?>">

<div class="h-screen flex items-center justify-center">
    <div class="flex items-center justify-center p-4 md:p-8 background-contenedor">
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full max-w-md background-form" data-v0-t="card">
            <div class="flex flex-col pt-6 pl-6 pr-6 space-y-1 items-center">
                <h3 class="poppins-bold azul-principal whitespace-nowrap font-semibold tracking-tight text-2xl">Recuperar contraseña</h3>
                <p class="text-base roboto-flex azul-principal">¿Olvidaste tu contraseña? No hay problema. Ingresa tu correo electronico y recibirás un link para restablecerla</p>
                <a href="{{ url('/login') }}" class="pt-2 pb-2 inline-flex items-center hover:font-bold rojo-principal">Volver
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="{{ url('/') }}" class="mb-4 me-5 ms-2 pt-3 pb-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0" href="#">
                    <img src="<?= url("storage/logotipos/imagotipo_visitway.png"); ?>" style="height: 130px" alt="Logo Visitway" loading="lazy" />
                </a>
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="pl-6 pr-6 pb-6 space-y-4">
                    <div class="space-y-2">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4 roboto-flex celeste-secundario" :status="session('status')" />
                        <label class="text-sm font-bold azul-principal roboto-flex" for="email" :value="__('Email')">
                            Email de recuperación
                        </label>
                        <input class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Ingresa tu correo electrónico" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="space-y-2 flex items-center flex-col pl-6 pr-6 pt-2 mb-8">
                    <x-primary-button class="boton-registro inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full">
                        {{ __('Enviar link de recuperación') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>