<!-- Modal de confirmación de acciones -->
<input type="checkbox" id="<?= $id ?>" class="modal-toggle">

<label for="<?= $id ?>" class="modal cursor-pointer modal-bottom lg:modal-middle">
    <label class="modal-box relative">
        <label for="<?= $id ?>" class="btn btn-sm btn-circle absolute right-2 top-2">
            ✕
        </label>

        <h3 class="font-bold text-lg">
            ¡Confirma tu acción!
        </h3>

        <p class="py-4">
            <?= $message ?>
        </p>

        <!-- Botones de acción -->
        <div class="modal-action">
            <a href="<?= url_to($method) ?>" class="btn btn-primary">
                Confirmar
            </a>

            <label for="<?= $id ?>" class="btn btn-secondary">
                Cancelar
            </label>
        </div>
    </label>
</label>

<!-- Fin del modal de confirmación de acciones -->
