<!-- Avatar Section -->
<section class="space-y-6">
    <div>
        <h2 class="text-lg font-bold azul-principal roboto-flex">
            Avatar
        </h2>

        <p class="mt-1 text-md azul-principal roboto-flex">
            Modifica y escoje el avatar que mas te caracterice
        </p>
    </div>

    <div class="mt-6 flex flex-col items-start">
        <!-- Avatar Actual -->
        <div class="flex flex-col items-center mb-12">
            <h3 class="font-bold text-lg mb-2 azul-principal roboto-flex mb-6">Avatar Actual</h3>
            <img src="{{ asset('storage/avatars/' . $user->avatar ) }}" alt="Avatar Perfil" class="w-32 rounded-full shadow-lg">
        </div>

        <!-- Escoje tu Nuevo Avatar -->
        <div>
            <h3 class="font-bold text-lg mb-2 azul-principal roboto-flex">Escoje tu Nuevo Avatar</h3>
            <form action="{{ route('avatar.actualizar') }}" method="POST" class="flex flex-col items-center gap-4 space-y-4">
                @csrf
                <div class="flex ">
                    <div class="flex items-center">
                        <input type="radio" id="avatar1" name="avatar" value="avatar1.jpg" class="hidden">
                        <label for="avatar1" class="cursor-pointer">
                            <img src="{{ asset('storage/avatars/avatar1.jpg') }}" alt="Avatar 1" class="w-20 h-20 rounded-full mr-2">
                        </label>
                    </div>
    
                    <div class="flex items-center">
                        <input type="radio" id="avatar2" name="avatar" value="avatar2.png" class="hidden">
                        <label for="avatar2" class="cursor-pointer">
                            <img src="{{ asset('storage/avatars/avatar2.png') }}" alt="Avatar 2" class="w-20 h-20 rounded-full mr-2">
                        </label>
                    </div>

                    <!-- Agrega más opciones de avatar según sea necesario -->
                </div>

                <button type="submit" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">Guardar cambios</button>
            </form>
        </div>
    </div>

</section>