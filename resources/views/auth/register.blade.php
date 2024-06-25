@vite('resources/css/app.css')
@vite('resources/js/app.js')

<link rel="stylesheet" href="<?= url("css/main.css"); ?>">
<link rel="stylesheet" href="<?= url("css/auth.css"); ?>">
<title>Registrarse - Visitway</title>

<div class="grid lg:grid-cols-2 h-screen">
    <div class="bg-[url('https://www.elciudadanoweb.com/wp-content/uploads/2023/09/paisajes.jpg')] bg-cover bg-center hidden lg:block bg-opacity-70"></div>
    <div class="flex items-center justify-center p-4 md:p-8 background-contenedor">
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full max-w-md background-form" data-v0-t="card">
            <div class="flex flex-col pt-6 pl-6 pr-6 space-y-1 items-center">
                <h3 class="poppins-bold azul-principal whitespace-nowrap font-semibold tracking-tight text-2xl">Crear una cuenta</h3>
                <p class="text-base roboto-flex azul-principal">Ingresa tus datos a continuación para comenzar</p>
                <a href="{{ url('/') }}" class="pt-2 pb-2 inline-flex items-center hover:font-bold rojo-principal">Volver a inicio
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="{{ url('/') }}" class="mb-4 me-5 ms-2 pt-3 pb-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0" href="#">
                    <img src="<?= url("storage/logotipos/imagotipo_visitway.png"); ?>" style="height: 130px" alt="Logo Visitway" loading="lazy" />
                </a>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="pl-6 pr-6 pb-6 space-y-4">
                    <div class="space-y-2">
                        <!-- Name -->
                        <label class="text-sm font-bold azul-principal roboto-flex" for="name">
                            Nombre
                        </label>
                        <input class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Ingresa tu nombre" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 rojo-principal roboto-flex" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold azul-principal roboto-flex" for="email">
                            Email
                        </label>
                        <input class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Ingresa tu email" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 rojo-principal roboto-flex" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold azul-principal roboto-flex" for="password">
                            Contraseña
                        </label>
                        <input class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Ingresa una contraseña" id="password" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 rojo-principal roboto-flex" />
                    </div>
                    <div class="space-y-2">
                        <!-- Confirm Password -->
                        <label class="text-sm font-bold azul-principal roboto-flex" for="password_confirmation">
                            Confirmar contraseña
                        </label>
                        <input class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Reingresar tu contraseña" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 rojo-principal roboto-flex" />
                    </div>
                </div>
                <div class="space-y-2 flex items-center flex-col pl-6 pr-6 pt-2 mb-8">
                    <x-primary-button class="boton-registro inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full">
                        {{ __('Registrarme') }}
                    </x-primary-button>

                    <a class="text-sm pt-3 font-medium azul-principal roboto-flex text-gray-600 dark:text-gray-400 hover:underline dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Ya estás registrado? Iniciar sesión') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>