@props(['value' => ''])

<!-- Button trigger modal -->
<div class="flex justify-center">
    <button type="button" class="share-btn" data-twe-toggle="modal" data-twe-target="#shareModal" data-twe-ripple-init data-twe-ripple-color="light">
        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="22.5" viewBox="0 0 576 512">
            <path fill="#003049" d="M400 255.4V240 208c0-8.8-7.2-16-16-16H352 336 289.5c-50.9 0-93.9 33.5-108.3 79.6c-3.3-9.4-5.2-19.8-5.2-31.6c0-61.9 50.1-112 112-112h48 16 32c8.8 0 16-7.2 16-16V80 64.6L506 160 400 255.4zM336 240h16v48c0 17.7 14.3 32 32 32h3.7c7.9 0 15.5-2.9 21.4-8.2l139-125.1c7.6-6.8 11.9-16.5 11.9-26.7s-4.3-19.9-11.9-26.7L409.9 8.9C403.5 3.2 395.3 0 386.7 0C367.5 0 352 15.5 352 34.7V80H336 304 288c-88.4 0-160 71.6-160 160c0 60.4 34.6 99.1 63.9 120.9c5.9 4.4 11.5 8.1 16.7 11.2c4.4 2.7 8.5 4.9 11.9 6.6c3.4 1.7 6.2 3 8.2 3.9c2.2 1 4.6 1.4 7.1 1.4h2.5c9.8 0 17.8-8 17.8-17.8c0-7.8-5.3-14.7-11.6-19.5l0 0c-.4-.3-.7-.5-1.1-.8c-1.7-1.1-3.4-2.5-5-4.1c-.8-.8-1.7-1.6-2.5-2.6s-1.6-1.9-2.4-2.9c-1.8-2.5-3.5-5.3-5-8.5c-2.6-6-4.3-13.3-4.3-22.4c0-36.1 29.3-65.5 65.5-65.5H304h32zM72 32C32.2 32 0 64.2 0 104V440c0 39.8 32.2 72 72 72H408c39.8 0 72-32.2 72-72V376c0-13.3-10.7-24-24-24s-24 10.7-24 24v64c0 13.3-10.7 24-24 24H72c-13.3 0-24-10.7-24-24V104c0-13.3 10.7-24 24-24h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H72z" />
        </svg>
    </button>
</div>

<!-- Modal Compartir -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="shareModal" data-twe-keyboard="false" tabindex="-1" aria-labelledby="shareModal" aria-hidden="true">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <p class="azul-principal roboto-flex text-xl font-medium leading-normal text-surface dark:text-white" id="shareModal">
                    Comparte este link
                </p>
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                    <span class="azul-principal roboto-flex [&>svg]:h-6 [&>svg]:w-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="p-4" data-twe-modal-body-ref>
                <x-text-input id="copy-link-input" name="copy-link-input" type="text" class="copy-link-dialog roboto-flex azul-principal flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" readonly />
                <button class="copy-link-btn pt-4 azul-principal roboto-flex" type="button" onclick="copyLink()">
                    <span id="copy-text" class="pl-2">Copiar link</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Función para obtener dinámicamente la URL y establecerla en el input
    function setDynamicUrl() {
        const copyText = document.getElementById("copy-link-input");
        // Ejemplo: Obtener la URL dinámicamente con JavaScript
        const dynamicUrl = window.location.href;
        copyText.value = dynamicUrl; // Establecer la URL en el input
    }

    function copyLink() {
        const copyText = document.getElementById("copy-link-input");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */
        navigator.clipboard.writeText(copyText.value).then(() => {
            const copyBtn = document.getElementById("copy-text");
            copyBtn.textContent = "Link copiado!";
            setTimeout(() => {
                copyBtn.textContent = "Copiar Link";
            }, 2000);
        });
    }

    // Llamar a la función setDynamicUrl() cuando se abre el modal
    document.addEventListener('DOMContentLoaded', function() {
        setDynamicUrl();
    });
</script>