<?php ?>
<!-- Menú de navegación -->
<ul class="menu p-4 w-64 bg-base-200 text-base-content">
    <li>
        <a
            href="<?= url_to('backend.modules.prospects.index') ?>"
            class="text-xl font-bold"
        >
            <img
                src="<?= base_url(['uploads/settings', setting()->get('App.general', 'favicon')]) ?>"
                alt="Favicon de <?= esc(setting()->get('App.general', 'company')) ?>"
                class="w-6 h-6"
            >
            Dashboard
        </a>
    </li>

    <li></li>

    <!-- Enlaces de navegación de los módulos -->
    <li class="menu-title">
        <span>Módulos</span>
    </li>

    <li>
        <a
            href="<?= url_to('backend.modules.prospects.index') ?>"
            class="<?= url_is_child('backend.modules.prospects.index') ? 'active' : '' ?>"
        >
            <i class="ri-folder-user-fill text-2xl"></i>
            Prospectos
        </a>
    </li>

    <li>
        <a
            href="<?= url_to('backend.modules.posts.index') ?>"
            class="<?= url_is_child('backend.modules.posts.index') ? 'active' : '' ?>"
        >
            <i class="ri-edit-box-fill text-2xl"></i>
            Blog
        </a>
    </li>

    <li>
        <a
            href="<?= url_to('backend.modules.socialNetworks.index') ?>"
            class="<?= url_is_child('backend.modules.socialNetworks.index') ? 'active' : '' ?>"
        >
            <i class="ri-chat-3-fill text-2xl"></i>
            Redes sociales
        </a>
    </li>

    <li>
        <a
            href="<?= url_to('backend.modules.popups.index') ?>"
            class="<?= url_is_child('backend.modules.popups.index') ? 'active' : '' ?>"
        >
            <i class="ri-stack-fill text-2xl"></i>
            Pop Ups
        </a>
    </li>
    <!-- Fin de los enlaces de navegación de los módulos -->

    <!-- Enlaces de navegación generales -->
    <li class="menu-title">
        <span>General</span>
    </li>

    <li>
        <a
            href="<?= url_to('backend.settings.index') ?>"
            class="<?= url_is_child('backend.settings.index') ? 'active' : '' ?>"
        >
            <i class="ri-settings-4-fill text-2xl"></i>
            Configuraciones
        </a>
    </li>

    <li>
        <a
            href="<?= url_to('backend.users.index') ?>"
            class="<?= url_is_child('backend.users.index') ? 'active' : '' ?>"
        >
            <i class="ri-shield-user-fill text-2xl"></i>
            Usuarios
        </a>
    </li>
    <!-- Fin de los enlaces de navegación generales -->

    <li class="grow bg-transparent"></li>

    <li></li>

    <div class="collapse collapse-arrow text-sm">
        <input type="checkbox" aria-label="Botón que desglosa las opciones de la cuenta del usuario" class="peer">
        <div class="collapse-title font-medium peer-checked:text-primary">
            Ricardo García Jiménez
        </div>
        <div class="collapse-content">
            <ul>
                <li>
                    <a
                        href="<?= url_to('backend.account.update') ?>"
                        class="<?= url_is_child('backend.account.update') ? 'active' : '' ?>"
                    >
                        <i class="ri-account-circle-fill text-xl"></i>
                        Mi cuenta
                    </a>
                </li>
                <li>
                    <a href="<?= url_to('backend.auth.logout') ?>">
                        <i class="ri-logout-circle-r-line text-xl"></i>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</ul>
<!-- Fin del menú de navegación -->
