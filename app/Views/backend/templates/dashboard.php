<?= $this->extend('backend/templates/page') ?>

<?= $this->section('head') ?>
    <!-- Plantilla para todas las páginas del backend que requieren sidebar -->

    <!-- Sección de etiquetas agregadas al head -->
    <?= $this->renderSection('head') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="drawer drawer-mobile">
        <!-- Checkbox oculto que controla la visibilidad del sidebar -->
        <input id="sidebar" type="checkbox" class="drawer-toggle">

        <div class="drawer-content flex flex-col min-h-screen">
            <!-- Barra de navegación en móvil -->
            <div class="navbar bg-base-300 w-full lg:hidden">
                <div class="flex-1">
                    <a
                        href="<?= url_to('backend.modules.prospects.index') ?>"
                        class="btn btn-ghost normal-case text-xl font-bold gap-2"
                    >
                        <img
                            src="<?= base_url(['uploads/settings', setting()->get('App.general', 'favicon')]) ?>"
                            alt="Favicon de <?= esc(setting()->get('App.general', 'company')) ?>"
                            class="w-6 h-6"
                        >
                        Dashboard
                    </a>
                </div>
                <div class="flex-none px-2 mx-2">
                    <label for="sidebar" class="btn btn-square btn-ghost">
                        <i class="ri-menu-fill text-2xl"></i>
                    </label>
                </div>
            </div>
            <!-- Fin de la barra de navegación en móvil -->

            <!-- Sección del contenido agregado a la página web -->
            <main class="grow container px-6 lg:px-12 py-6 lg:py-8">
                <?= $this->renderSection('content') ?>
            </main>
            <!-- Fin de la sección del contenido agregado a la página web -->

            <!-- Pie de página del dashboard -->
            <?= $this->include('backend/components/footer') ?>
        </div>

        <!-- Contenido del sidebar -->
        <div class="drawer-side">
            <label for="sidebar" class="drawer-overlay"></label>

            <?= $this->include('backend/components/menu') ?>
        </div>
        <!-- Fin del contenido del sidebar -->
    </div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <!-- Sección de scripts de javascript agregados a la página web -->
    <?= $this->renderSection('javascript') ?>
<?= $this->endSection() ?>
