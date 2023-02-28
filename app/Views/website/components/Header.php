<!-- Use Contact component -->
<div id="contact-wrapper" class="lg:max-w-lg fixed right-0 translate-x-full top-0 bottom-0 z-20 transition-all">
  <span id="btn-contact-close" class="absolute top-2 left-2 inline-block" role="button">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none" class="w-4/5 sm:w-full">
      <circle cx="18" cy="18" r="18" fill="#F90059" />
      <path fill="#fff" fill-rule="evenodd" d="M18 31.5c7.4566 0 13.5-6.0434 13.5-13.5S25.4566 4.5 18 4.5 4.5 10.5434 4.5 18 10.5434 31.5 18 31.5ZM7.0312 18c0-6.0592 4.9096-10.9688 10.9688-10.9688S28.9688 11.9409 28.9688 18 24.0592 28.9688 18 28.9688 7.0312 24.0592 7.0312 18Z" clip-rule="evenodd" />
      <path fill="#FF007F" d="M30.75 18c0 7.0424-5.7076 12.75-12.75 12.75v1.5c7.8709 0 14.25-6.3791 14.25-14.25h-1.5ZM18 5.25c7.0424 0 12.75 5.7076 12.75 12.75h1.5c0-7.8709-6.3791-14.25-14.25-14.25v1.5ZM5.25 18c0-7.0424 5.7076-12.75 12.75-12.75v-1.5C10.1291 3.75 3.75 10.1291 3.75 18h1.5ZM18 30.75c-7.0424 0-12.75-5.7076-12.75-12.75h-1.5c0 7.8709 6.3791 14.25 14.25 14.25v-1.5Zm0-24.4688C11.5266 6.2813 6.2812 11.5267 6.2812 18h1.5C7.7813 12.355 12.355 7.7812 18 7.7812v-1.5ZM29.7188 18c0-6.4734-5.2454-11.7188-11.7188-11.7188v1.5c5.645 0 10.2188 4.5738 10.2188 10.2188h1.5ZM18 29.7188c6.4734 0 11.7188-5.2454 11.7188-11.7188h-1.5c0 5.645-4.5738 10.2188-10.2188 10.2188v1.5ZM6.2812 18c0 6.4734 5.2454 11.7188 11.7188 11.7188v-1.5C12.355 28.2188 7.7812 23.645 7.7812 18h-1.5Z" />
      <path fill="#fff" stroke="#FF007F" d="M13.7292 13.7285c.4957-.4904 1.2972-.4904 1.7455 0l2.4785 2.4838 2.526-2.4838c.4957-.4904 1.2972-.4904 1.7455 0 .5378.4957.5378 1.2973 0 1.7455l-2.4364 2.4785 2.4364 2.526c.5378.4957.5378 1.2973 0 1.7455-.4483.5379-1.2498.5379-1.7455 0l-2.526-2.4363-2.4785 2.4363c-.4483.5379-1.2498.5379-1.7455 0-.4905-.4482-.4905-1.2498 0-1.7455l2.4837-2.526-2.4837-2.4785c-.4905-.4482-.4905-1.2498 0-1.7455Z" />
    </svg>
  </span>
  <?= $this->include('website/components/Contact') ?>
</div>
<!-- Overlay -->
<div id="overlay"></div>

<!-- Header -->
<header class="sticky top-0 left-0 right-0 z-10">
  <div class="px-6 py-3 flex items-center justify-between bg-denny-blue-300 text-white min-h-[50px] ">
    <p>Llámanos: +52 (462) 113 09 53</p>
  </div>
  <div class="md:min-h-[90px] py-3 grid grid-cols-3 items-center px-6 bg-white text-denny-dark-300 shadow-md lg:relative">
    <button id="btn-menu" class="lg:hidden" aria-label="menu" aria-haspopup="true" aria-controls="nav-menu">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" stroke="#666666" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <line x1="4" y1="6" x2="20" y2="6" />
          <line x1="4" y1="12" x2="20" y2="12" />
          <line x1="4" y1="18" x2="20" y2="18" />
        </svg>
      </span>
    </button>
    <!-- Navbar -->
    <nav class="absolute lg:min-h-min left-0 right-0 -top-[250%] lg:static lg:top-auto justify-self-start z-20  transition-all ease-in-out delay-75 overflow-y-scroll lg:overflow-y-visible h-64 lg:h-auto bg-white" id="nav-menu" aria-labelledby="btn-menu">
      <ul class="flex flex-col lg:flex-row lg:gap-2">
        <li class="font-bold border-b border-denny-light-100 lg:border-0 p-2 lg:p-0">
          <a href="<?= url_to('website.pages.home') ?>" class="py-2 px-3 rounded-3xl hover:bg-denny-light-200 transition ease-in delay-100">Inicio</a>
        </li>
        <li id="btn-submenu" class="font-bold border-b border-denny-light-100 lg:border-0 p-2 lg:p-0">
          <span class="py-2 px-3 rounded-3xl hover:bg-denny-light-200 transition ease-in delay-75 cursor-pointer">Productos</span>
          <section id="submenu" class="px-6 lg:px-0 lg:bg-denny-light-200 text-denny-dark-300 scale-0 h-0 lg:absolute lg:top-[100%] lg:left-0 lg:right-0 lg:w-full">
            <div class="lg:py-8 lg:container lg:flex lg:justify-between lg:items-center">
              <div class="lg:flex lg:w-2/5 justify-between">
                <div>
                  <h3 class="text-denny-dark-500 font-black">Categorias</h3>
                  <ul class="lg:flex lg:flex-col gap-2 grid grid-cols-2 md:grid-cols-4">
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.fiestas') ?>" role="menuitem" class="hover:text-denny-blue-100">Articulos de fiesta</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.chocolotes') ?>" role="menuitem" class="hover:text-denny-blue-100">Chocolates</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.paletas') ?>" role="menuitem" class="hover:text-denny-blue-100">Paletas</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.caramelos') ?>" role="menuitem" class="hover:text-denny-blue-100">Caramelos</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.enchilados') ?>" role="menuitem" class="hover:text-denny-blue-100">Dulces enchilados</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.botonas') ?>" role="menuitem" class="hover:text-denny-blue-100">Botanas</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.chicles') ?>" role="menuitem" class="hover:text-denny-blue-100">Chicles</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.gomitas') ?>" role="menuitem" class="hover:text-denny-blue-100">Gomitas</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.bombones') ?>" role="menuitem" class="hover:text-denny-blue-100">Bombones</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.tipicos') ?>" role="menuitem" class="hover:text-denny-blue-100">Dulces tipicos</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.surtidos') ?>" role="menuitem" class="hover:text-denny-blue-100">Surtidos</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.categories.galletas') ?>" role="menuitem" class="hover:text-denny-blue-100">Galletas</a></li>
                  </ul>
                </div>
                <div>
                  <h3 class="text-denny-dark-500 font-black">Temporadas</h3>
                  <ul class="lg:flex lg:flex-col gap-2 grid grid-cols-2 md:grid-cols-4">
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.cumpleanos') ?>" role="menuitem" class="hover:text-denny-blue-100">Cumpleaños</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.mesas') ?>" role="menuitem" class="hover:text-denny-blue-100">Mesa de dulces</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.valentin') ?>" role="menuitem" class="hover:text-denny-blue-100">San Valentin</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.nino') ?>" role="menuitem" class="hover:text-denny-blue-100">Dia del niño</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.madres') ?>" role="menuitem" class="hover:text-denny-blue-100">Dia de la madre</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.patrias') ?>" role="menuitem" class="hover:text-denny-blue-100">Fiestas patrias</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.muertos') ?>" role="menuitem" class="hover:text-denny-blue-100">Dias de muertos</a></li>
                    <li class="ml-2 lg:ml-0"><a href="<?= url_to('website.seasons.navidad') ?>" role="menuitem" class="hover:text-denny-blue-100">Navidad</a></li>
                  </ul>
                </div>
              </div>
              <div class="hidden my-4 lg:my-0 lg:w-2/5 lg:flex gap-4 flex-col lg:flex-row">
                <article class="lg:w-1/2 p-4 bg-denny-blue-100 text-white rounded-2xl min-h-[250px] flex items-center">
                  <div class="-rotate-90">
                    <h3 class="text-2xl font-bold">Promociones</h3>
                    <p class="outline__text text-5xl">Promos</p>
                  </div>
                  <a href="/promociones" class="self-end inline-flex py-2 px-3 bg-white rounded-3xl">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" fill="none">
                        <path fill="#0D6FFF" stroke="#0D6FFF" stroke-width=".5" d="M9.97 9.3917c-.0236-.2144-.1166-.4168-.2663-.5796l-6.6706-7.35c-.1773-.2478-.4583-.4126-.7721-.4526-.3139-.04-.631.048-.8717.2426-.241.1944-.3823.4766-.389.7757-.0068.299.1217.5866.3536.7905L7.4105 9.49 1.354 16.162c-.2319.2041-.3604.4917-.3537.7908.0068.299.1482.5813.3891.7756.2407.1946.5578.2827.8717.2427.3138-.0403.5948-.2049.7721-.4527l6.6706-7.35c.196-.2143.2921-.4944.2663-.7766v-.0001Z" />
                      </svg>
                    </span>
                  </a>
                </article>
                <article class="lg:w-1/2 p-4 bg-denny-purple text-white rounded-2xl min-h-[250px] flex flex-col items-center justify-center">
                  <div class="mt-auto">
                    <p class="outline__text text-5xl font-light">+ 150</p>
                    <h3 class="text-2xl font-bold">Marcas</h3>
                  </div>
                  <a href="/marcas-dulces" class="self-end mt-auto inline-flex py-2 px-3 bg-white rounded-3xl">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" fill="none">
                        <path fill="#0D6FFF" stroke="#0D6FFF" stroke-width=".5" d="M9.97 9.3917c-.0236-.2144-.1166-.4168-.2663-.5796l-6.6706-7.35c-.1773-.2478-.4583-.4126-.7721-.4526-.3139-.04-.631.048-.8717.2426-.241.1944-.3823.4766-.389.7757-.0068.299.1217.5866.3536.7905L7.4105 9.49 1.354 16.162c-.2319.2041-.3604.4917-.3537.7908.0068.299.1482.5813.3891.7756.2407.1946.5578.2827.8717.2427.3138-.0403.5948-.2049.7721-.4527l6.6706-7.35c.196-.2143.2921-.4944.2663-.7766v-.0001Z" />
                      </svg>
                    </span>
                  </a>
                </article>
              </div>
            </div>
          </section>
        </li>
        <li class="font-bold border-b border-denny-light-100 lg:border-0 p-2 lg:p-0">
          <a href="/nosotros" role="menuitem" class="py-2 px-3 rounded-3xl hover:bg-denny-light-200 transition ease-in delay-75">Nosotros</a>
        </li>
        <li class="font-bold border-b border-denny-light-100 lg:border-0 p-2 lg:p-0">
          <a href="/donde-comprar-dulces-mayoreo" role="menuitem" class="py-2 px-3 rounded-3xl hover:bg-denny-light-200 transition ease-in delay-75">Sucursales</a>
        </li>
        <li class="font-bold border-b border-denny-light-100 lg:border-0 p-2 lg:p-0">
          <a href="/blog" role="menuitem" class="py-2 px-3 rounded-3xl hover:bg-denny-light-200 transition ease-in delay-75">Blog</a>
        </li>
      </ul>
    </nav>
    <a href="<?= url_to('website.pages.home') ?>" class="inline-flex w-28 md:w-36 md:-mt-11 justify-self-center">
      <img src="<?= base_url('logo.svg') ?>" alt="Dulcerias Denny Logo" class="w-3/4 md:w-full h-full object-cover" />
    </a>
    <div class="justify-self-end">
      <button id="btn-contact-open" class="py-2 px-2 sm:px-3 rounded-3xl sm:text-sm text-xs font-semibold bg-denny-blue-100 text-white hover:bg-denny-blue-300 transition-colors delay-100">
        Contactanos
      </button>
    </div>
  </div>
  <div class="absolute -bottom-12 right-8 z-40 animate-bounce">
    <?= $this->include('website/components/Whatsapp') ?>
  </div>
</header>
