

            <!-- Avatar Section -->
    <div class="mt-6 flex items-center space-x-4">
        <!-- Avatar Image -->
        <div>
            <h3 class="font-bold text-lg mb-2">Avatar</h3>
            <img src="{{ asset('storage/avatars/' . $user->avatar ) }} " alt="Avatar Perfil">
        </div>

        <!-- Change Avatar Button -->
        <h3>Escoje tu avatar</h3>
        <form action="{{ route('avatar.actualizar') }}" method="POST">
                        @csrf
                        <div class="flex items-center mb-4">
                            <input type="radio" id="avatar1" name="avatar" value="avatar1.jpg" class="hidden">
                            <label for="avatar1" class="cursor-pointer">
                                <img src="{{ asset('storage/avatars/avatar1.jpg') }}" alt="Avatar 1" class="w-20 h-20 rounded-full mr-2">
                            </label>
                        </div>
                        
                        <div class="flex items-center mb-4">
                            <input type="radio" id="avatar2" name="avatar" value="avatar2.png" class="hidden">
                            <label for="avatar2" class="cursor-pointer">
                                <img src="{{ asset('storage/avatars/avatar2.png') }}" alt="Avatar 2" class="w-20 h-20 rounded-full mr-2">
                            </label>
                        </div>
                        
                        <!-- Agrega más opciones de avatar según sea necesario -->

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar cambios</button>
                    </form>

    </div>