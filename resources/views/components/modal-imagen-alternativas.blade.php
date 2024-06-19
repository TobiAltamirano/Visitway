<link rel="stylesheet" href="<?= url("css/blog.css"); ?>">
<!-- Modal -->
<div id="imageModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="relative z-10 bg-white rounded-lg overflow-hidden shadow-lg">
        <button id="closeModal" class="boton-cerrar-modal absolute top-2 right-2 inline-flex items-center justify-center rounded-full bg-primary p-2 text-primary-foreground transition-colors hover:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
        <img id="modalImage" src="" alt="Modal Image" class="w-full h-auto">
    </div>
</div>

<!-- JavaScript para manejar el modal -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.getElementById('closeModal');

        document.querySelectorAll('.modal-image').forEach(image => {
            image.addEventListener('click', function() {
                modalImage.src = this.src;
                modal.classList.remove('hidden');
            });
        });

        closeModal.addEventListener('click', function() {
            modal.classList.add('hidden');
        });

        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
</script>