<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
          <h2 class="text-lg font-semibold mb-4">Miércoles</h2>
          <ul class="space-y-4">
          @if (empty($actividadesMiercoles))
    <p>No hay actividades registradas</p>
    @else
            @foreach ($actividadesMiercoles as $actividadMiercoles)
            <li class="flex items-center justify-between">
              <div>
                <h3 class="font-medium">{{ $actividadMiercoles->actividad->nombre_actividad }}</h3>
                <p class="text-gray-500 dark:text-gray-400 text-sm">{{ $actividadMiercoles->hora_inicio }} - {{ $actividadMiercoles->hora_fin }}</p>
              </div>
              <div class="flex items-center space-x-2">
                <!-- Edit Button -->
                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10" data-twe-toggle="modal" data-twe-target="#editModal{{ $actividadMiercoles->id }}" data-twe-ripple-init data-twe-ripple-color="light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                    <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                    <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
                  </svg>
                </button>

                <!-- Duplicate Button -->
                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10" data-twe-toggle="modal" data-twe-target="#duplicateModal{{ $actividadMiercoles->id }}" data-twe-ripple-init data-twe-ripple-color="light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                  </svg>
                </button>

                <!-- Delete Button -->
                <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10" data-twe-toggle="modal" data-twe-target="#deleteModal{{ $actividadMiercoles->id }}" data-twe-ripple-init data-twe-ripple-color="light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                    <path d="M3 6h18"></path>
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                  </svg>
                </button>

              </div>
            </li>

            <!-- Edit Modal -->
            <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="editModal{{ $actividadMiercoles->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $actividadMiercoles->id }}" aria-hidden="true">
              <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                  <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                    <h5 class="text-xl font-medium leading-normal text-surface dark:text-white" id="editModalLabel{{ $actividadMiercoles->id }}">
                      Edit Activity
                    </h5>
                    <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                      <span class="[&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </span>
                    </button>
                  </div>
                  <div class="relative flex-auto p-4" data-twe-modal-body-ref>
                    <form action="{{ route('cronograma.editar', ['id' => $actividadMiercoles->id]) }}" method="post">
                      @csrf
                      <label for="nuevo_dia">Nuevo día:</label>
                      <select name="nuevo_dia" id="nuevo_dia">
                        <option value="1">Lunes</option>
                        <option value="2">Martes</option>
                        <option value="3">Miércoles</option>
                        <option value="4">Jueves</option>
                        <option value="5">Viernes</option>
                        <option value="6">Sábado</option>
                        <option value="7">Domingo</option>
                      </select>
                      <label for="nueva_hora_inicio">Nueva hora de inicio:</label>
                      <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required>
                      <label for="nueva_hora_fin">Nueva hora de fin:</label>
                      <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required>
                      <button type="submit" class="rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600">
                        Save changes
                      </button>
                    </form>
                  </div>
                  <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                    <button type="button" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400" data-twe-modal-dismiss data-twe-ripple-init data-twe-ripple-color="light">
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Duplicate Modal -->
            <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="duplicateModal{{ $actividadMiercoles->id }}" tabindex="-1" aria-labelledby="duplicateModalLabel{{ $actividadMiercoles->id }}" aria-hidden="true">
              <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                  <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                    <h5 class="text-xl font-medium leading-normal text-surface dark:text-white" id="duplicateModalLabel{{ $actividadMiercoles->id }}">
                      Duplicate Activity
                    </h5>
                    <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                      <span class="[&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </span>
                    </button>
                  </div>
                  <div class="relative flex-auto p-4" data-twe-modal-body-ref>
                    <form action="{{ route('cronograma.duplicar', ['id' => $actividadMiercoles->id, 'idActividad' => $actividadMiercoles->id_actividad]) }}" method="post">
                      @csrf
                      <label for="dia_semana">Día:</label>
                      <select name="dia_semana" id="dia_semana">
                        <option value="1">Lunes</option>
                        <option value="2">Martes</option>
                        <option value="3">Miércoles</option>
                        <option value="4">Jueves</option>
                        <option value="5">Viernes</option>
                        <option value="6">Sábado</option>
                        <option value="7">Domingo</option>
                      </select>
                      <label for="hora_inicio">Hora de inicio:</label>
                      <input type="time" name="hora_inicio" id="hora_inicio" required>
                      <label for="hora_fin">Hora de fin:</label>
                      <input type="time" name="hora_fin" id="hora_fin" required>
                      <button type="submit" class="rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600">
                        Save changes
                      </button>
                    </form>
                  </div>
                  <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                    <button type="button" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400" data-twe-modal-dismiss data-twe-ripple-init data-twe-ripple-color="light">
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Delete Modal -->
            <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="deleteModal{{ $actividadMiercoles->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $actividadMiercoles->id }}" aria-hidden="true">
              <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
                  <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                    <h5 class="text-xl font-medium leading-normal text-surface dark:text-white" id="deleteModalLabel{{ $actividadMiercoles->id }}">
                      Delete Activity
                    </h5>
                    <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                      <span class="[&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </span>
                    </button>
                  </div>
                  <div class="relative flex-auto p-4" data-twe-modal-body-ref>
                    <form action="{{ route('cronograma.eliminar', ['id' => $actividadMiercoles->id]) }}" method="post">
                      @csrf
                      @method('post')
                      <p>Are you sure you want to delete this activity?</p>
                      <button type="submit" class="rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600">
                        Delete
                      </button>
                    </form>
                  </div>
                  <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                    <button type="button" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400" data-twe-modal-dismiss data-twe-ripple-init data-twe-ripple-color="light">
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
            @endif
          </ul>
        </div>