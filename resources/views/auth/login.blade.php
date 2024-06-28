<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

@vite('resources/css/app.css')
@vite('resources/js/app.js')

<link rel="stylesheet" href="<?= url("css/main.css"); ?>">
<link rel="stylesheet" href="<?= url("css/auth.css"); ?>">
<link id="favicon-light" rel="icon" type="image/png" href="{{ asset('Fav-icon-positivo.png') }}">
<title>Iniciar sesión - Visitway</title>

<div class="grid lg:grid-cols-2 h-screen">
    <div class="bg-[url('https://media.traveler.es/photos/6137759ed7c7024f9175f2c1/master/w_1600,c_limit/112125.jpg')] bg-cover bg-center hidden lg:block bg-opacity-70"></div>
    <div class="flex items-center justify-center p-4 md:p-8 background-contenedor">
        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-full max-w-md background-form" data-v0-t="card">
            <div class="flex flex-col pt-6 pl-6 pr-6 space-y-1 items-center">
                <h3 class="poppins-bold azul-principal whitespace-nowrap font-semibold tracking-tight text-2xl">Crear una cuenta</h3>
                <p class="text-base roboto-flex azul-principal">Ingresa tus datos a continuación para comenzar</p>
                <div class="pr-4">
                    <x-boton-volver url="{{ route('index') }}">Volver al inicio</x-boton-volver>
                </div>
                <a href="{{ url('/') }}" class="mb-4 me-5 ms-2 pt-3 pb-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0" href="#">
                    <img src="<?= url("storage/logotipos/imagotipo_visitway.png"); ?>" style="height: 130px" alt="Logo Visitway" loading="lazy" />
                </a>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="pl-6 pr-6 pb-6 space-y-4">
                    <div class="space-y-2">
                        <label class="text-sm font-bold azul-principal roboto-flex" for="email" :value="__('Email')">
                            Email
                        </label>
                        <input class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Ingresa tu email" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 rojo-principal roboto-flex" />
                    </div>
                    <div class="space-y-2">
                        <label class="text-sm font-bold azul-principal roboto-flex" for="password" :value="__('Password')">
                            Contraseña
                        </label>
                        <input class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Ingresa una contraseña" id="password" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 rojo-principal roboto-flex" />
                    </div>
                    <!-- Remember Me -->
                    <div class="space-y-2">
                        <input id="remember_me" type="checkbox" class="flex items-center relative float-left me-[6px] mt-[0.05rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" name="remember">
                        <span class="ms-2 text-base azul-principal roboto-flex">{{ __('Mantener sesión iniciada') }}</span>
                    </div>
                </div>
                <div class="space-y-2 flex items-center flex-col pl-6 pr-6 pt-2 mb-8">
                    <x-primary-button class="boton-registro inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full">
                        {{ __('Ingresar') }}
                    </x-primary-button>

                    @if (Route::has('password.request'))
                    <a class="text-sm pt-3 font-medium azul-principal roboto-flex text-gray-600 dark:text-gray-400 hover:underline dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Olvidé mi contraseña') }}
                    </a>
                    @endif

                    <a class="text-sm font-medium azul-principal roboto-flex text-gray-600 dark:text-gray-400 hover:underline dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                        {{ __('Registrarme') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>