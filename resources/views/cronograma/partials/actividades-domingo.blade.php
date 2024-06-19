<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-4">
  <h2 class="text-lg font-semibold mb-4 azul-principal poppins-regular">Domingo</h2>
  <ul class="space-y-4">
    @if (empty($actividadesDomingo))
    <p class="roboto-flex rojo-principal">No hay actividades registradas</p>
    @else
    @foreach ($actividadesDomingo as $actividadDomingo)
    <li class="flex items-center justify-between">
      <div>
        <h3 class="azul-principal poppins-medium">{{ $actividadDomingo->actividad->nombre_actividad }}</h3>
        <p class="text-sm roboto-flex rojo-secundario pt-1">{{ $actividadDomingo->hora_inicio }} - {{ $actividadDomingo->hora_fin }}</p>
      </div>
      <div class="flex items-center space-x-2">
        <!-- Edit Button -->
        <button class="azul-principal inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10 hover:text-accent-foreground hover:bg-gray-100 dark:hover:bg-gray-800" data-twe-toggle="modal" data-twe-target="#editModal{{ $actividadDomingo->id }}" data-twe-ripple-init data-twe-ripple-color="light">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
            <path d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"></path>
            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
            <path d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"></path>
          </svg>
        </button>

        <!-- Duplicate Button -->
        <button class="azul-principal inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10 hover:text-accent-foreground hover:bg-gray-100 dark:hover:bg-gray-800" data-twe-toggle="modal" data-twe-target="#duplicateModal{{ $actividadDomingo->id }}" data-twe-ripple-init data-twe-ripple-color="light">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
            <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
            <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
          </svg>
        </button>

        <!-- Delete Button -->
        <button class="azul-principal inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10 hover:text-accent-foreground hover:bg-gray-100 dark:hover:bg-gray-800" data-twe-toggle="modal" data-twe-target="#deleteModal{{ $actividadDomingo->id }}" data-twe-ripple-init data-twe-ripple-color="light">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 rojo-principal">
            <path d="M3 6h18"></path>
            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
          </svg>
        </button>

      </div>
    </li>

    <!-- Modal editar -->
    <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="editModal{{ $actividadDomingo->id }}" data-twe-backdrop="static" data-twe-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel{{ $actividadDomingo->id }}" aria-hidden="true">
      <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
          <div class="flex items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
            <p class="azul-principal roboto-flex text-xl font-medium leading-normal text-surface dark:text-white" id="editModalLabel{{ $actividadDomingo->id }}">
              Editar actividad
            </p>
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
              <span class="azul-principal [&>svg]:h-6 [&>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </span>
            </button>
          </div>
          <div class="p-4" data-twe-modal-body-ref>
            <form action="{{ route('cronograma.editar', ['id' => $actividadDomingo->id]) }}" method="post">
              @csrf
              <div class="mb-4">
                <label for="nuevo_dia" class="roboto-flex azul-principal block mb-2 font-bold text-base">Nuevo día:</label>
                <select name="nuevo_dia" id="nuevo_dia" class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
                  <option value="1">Lunes</option>
                  <option value="2">Martes</option>
                  <option value="3">Miércoles</option>
                  <option value="4">Jueves</option>
                  <option value="5">Viernes</option>
                  <option value="6">Sábado</option>
                  <option value="7">Domingo</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="nueva_hora_inicio" class="roboto-flex azul-principal block mb-2 font-bold text-base">Nueva hora de inicio:</label>
                <input type="time" name="nueva_hora_inicio" id="nueva_hora_inicio" required class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500"></input>
              </div>
              <div class="mb-4">
                <label for="nueva_hora_fin" class="roboto-flex azul-principal block mb-2 font-bold text-base">Nueva hora de fin:</label>
                <input type="time" name="nueva_hora_fin" id="nueva_hora_fin" required class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
              </div>
              <button type="submit" class="roboto-flex azul-principal filtrar-boton boton-guardar-cambios poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                Guardar cambios
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal duplicar  -->
    <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="duplicateModal{{ $actividadDomingo->id }}" data-twe-backdrop="static" data-twe-keyboard="false" tabindex="-1" aria-labelledby="duplicateModalLabel{{ $actividadDomingo->id }}" aria-hidden="true">
      <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
          <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
            <p class="roboto-flex azul-principal text-xl font-medium leading-normal text-surface dark:text-white" id="duplicateModalLabel{{ $actividadDomingo->id }}">
              Duplicar actividad
            </p>
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
              <span class="azul-principal [&>svg]:h-6 [&>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </span>
            </button>
          </div>
          <div class="p-4" data-twe-modal-body-ref>
            <form action="{{ route('cronograma.duplicar', ['id' => $actividadDomingo->id, 'idActividad' => $actividadDomingo->id_actividad]) }}" method="post">
              @csrf
              <div class="mb-4">
                <label for="dia_semana" class="roboto-flex azul-principal block mb-2 font-bold text-base">Día:</label>
                <select name="dia_semana" id="dia_semana" class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
                  <option value="1">Lunes</option>
                  <option value="2">Martes</option>
                  <option value="3">Miércoles</option>
                  <option value="4">Jueves</option>
                  <option value="5">Viernes</option>
                  <option value="6">Sábado</option>
                  <option value="7">Domingo</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="hora_inicio" class="roboto-flex azul-principal block mb-2 font-bold text-base">Hora de inicio:</label>
                <input type="time" name="hora_inicio" id="hora_inicio" required class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
              </div>
              <div class="mb-4">
                <label for="hora_fin" class="roboto-flex azul-principal block mb-2 font-bold text-base">Hora de fin:</label>
                <input type="time" name="hora_fin" id="hora_fin" required class="roboto-flex azul-principal w-full px-3 py-2 rounded border-gray-300 focus:border-primary-500 focus:ring-primary-500">
              </div>
              <button type="submit" class="roboto-flex azul-principal filtrar-boton boton-guardar-cambios poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                Guardar cambios
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal eliminar -->
    <div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="deleteModal{{ $actividadDomingo->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $actividadDomingo->id }}" aria-hidden="true">
      <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
          <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
            <p class="roboto-flex azul-principal text-xl font-medium leading-normal text-surface dark:text-white" id="deleteModalLabel{{ $actividadDomingo->id }}">
              Quitar actividad
            </p>
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
              <span class="azul-principal [&>svg]:h-6 [&>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </span>
            </button>
          </div>
          <div class="flex flex-col justify-center items-center p-4" data-twe-modal-body-ref>
            <form action="{{ route('cronograma.eliminar', ['id' => $actividadDomingo->id]) }}" method="post">
              @csrf
              @method('post')
              <p class="text-center mb-6 roboto-flex rojo-principal">¿Estás seguro de que quieres quitar esta actividad de tu cronograma?</p>
              <button type="submit" class="roboto-flex azul-principal filtrar-boton boton-guardar-cambios poppins-semibold w-full text-white py-2 px-4 rounded-lg transition duration-300">
                Quitar actividad
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    @endforeach
    @endif
  </ul>
</div>