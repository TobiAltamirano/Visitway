<section class="space-y-6">
    <div>
        <h2 class="text-lg font-bold azul-principal roboto-flex">
            Eliminar cuenta
        </h2>

        <p class="mt-1 text-md azul-principal roboto-flex">
            Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente
        </p>
    </div>

    <button type="button" class="inline-flex h-10 w-full sm:w-auto items-center justify-center rounded-md bg-gray-900 px-8 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:bg-gray-50 dark:text-gray-900 dark:hover:bg-gray-50/90 dark:focus-visible:ring-gray-300 boton-eliminar roboto-flex" data-twe-toggle="modal" data-twe-target="#exampleModal" data-twe-ripple-init data-twe-ripple-color="light">
        Eliminar Cuenta
    </button>

    <!-- Modal -->
    <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                    <h5 class="text-xl roboto-flex font-medium azul-principal" id="exampleModalLabel">
                        Confirmación de eliminación de cuenta
                    </h5>
                    <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                        <span class="[&>svg]:h-6 [&>svg]:w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                    </button>
                </div>

                <!-- Modal body -->
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium roboto-flex azul-principal">
                        ¿Estás seguro que deseas eliminar tu cuenta?
                    </h2>

                    <p class="mt-1 text-sm roboto-flex azul-principal">
                        Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Ingrese su contraseña para confirmar que desea eliminar permanentemente su cuenta.
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                        <x-text-input id="password" name="password" type="password" class="roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="{{ __('Contraseña') }}" />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <!-- Modal footer -->
                    <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                        <div class="mt-6 flex justify-end">
                            <x-secondary-button data-twe-modal-dismiss data-twe-ripple-init>
                                Cancelar
                            </x-secondary-button>

                            <x-danger-button class="ms-3">
                                Eliminar cuenta
                            </x-danger-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>