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
            <h3 class="font-bold text-lg azul-principal roboto-flex mb-6">Avatar Actual</h3>
            <img src="{{ asset('storage/avatars/' . $user->avatar ) }}" alt="Avatar Perfil" class="w-32 rounded-full shadow-lg">
        </div>

        <!-- Escoje tu Nuevo Avatar -->
        <div>
            <h3 class="font-bold text-lg mb-2 azul-principal roboto-flex">Escoje tu Nuevo Avatar</h3>
            <form action="{{ route('avatar.actualizar') }}" method="POST" class="flex flex-col items-center gap-4 space-y-4">
                @csrf
                <div class="flex flex-wrap justify-center">
                    <div class="w-1/2 md:w-auto flex justify-center items-center mb-4">
                        <input type="radio" id="avatar1" name="avatar" value="avatar1.png" class="hidden">
                        <label for="avatar1" class="cursor-pointer avatar-label">
                            <img src="{{ asset('storage/avatars/avatar1.png') }}" alt="Avatar 1 - Messi" class="w-20 h-20 rounded-full mr-2 avatar-option">
                        </label>
                    </div>

                    <div class="w-1/2 md:w-auto flex justify-center items-center mb-4">
                        <input type="radio" id="avatar2" name="avatar" value="avatar2.png" class="hidden">
                        <label for="avatar2" class="cursor-pointer avatar-label">
                            <img src="{{ asset('storage/avatars/avatar2.png') }}" alt="Avatar 2 - Maradona" class="w-20 h-20 rounded-full mr-2 avatar-option">
                        </label>
                    </div>

                    <div class="w-1/2 md:w-auto flex justify-center items-center mb-4">
                        <input type="radio" id="avatar3" name="avatar" value="avatar3.png" class="hidden">
                        <label for="avatar3" class="cursor-pointer avatar-label">
                            <img src="{{ asset('storage/avatars/avatar3.png') }}" alt="Avatar 3 - Ricky Fort" class="w-20 h-20 rounded-full mr-2 avatar-option">
                        </label>
                    </div>

                    <div class="w-1/2 md:w-auto flex justify-center items-center mb-4">
                        <input type="radio" id="avatar4" name="avatar" value="avatar4.png" class="hidden">
                        <label for="avatar4" class="cursor-pointer avatar-label">
                            <img src="{{ asset('storage/avatars/avatar4.png') }}" alt="Avatar 4 - Moria Casan" class="w-20 h-20 rounded-full mr-2 avatar-option">
                        </label>
                    </div>

                    <div class="w-1/2 md:w-auto flex justify-center items-center mb-4">
                        <input type="radio" id="avatar5" name="avatar" value="avatar5.png" class="hidden">
                        <label for="avatar5" class="cursor-pointer avatar-label">
                            <img src="{{ asset('storage/avatars/avatar5.png') }}" alt="Avatar 5 - Mirtha Legrand" class="w-20 h-20 rounded-full mr-2 avatar-option">
                        </label>
                    </div>

                    <div class="w-1/2 md:w-auto flex justify-center items-center mb-4">
                        <input type="radio" id="avatar6" name="avatar" value="avatar6.png" class="hidden">
                        <label for="avatar6" class="cursor-pointer avatar-label">
                            <img src="{{ asset('storage/avatars/avatar6.png') }}" alt="Avatar 6 - Emilia Mernes y Duki" class="w-20 h-20 rounded-full mr-2 avatar-option">
                        </label>
                    </div>
                </div>

                <button type="submit" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 buton-1-cta roboto-flex">Guardar cambios</button>
            </form>
        </div>
    </div>

</section>