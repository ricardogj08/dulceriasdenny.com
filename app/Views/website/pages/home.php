<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>★ Proveedores de Dulces al por Mayor | Dulcerías Denny</title>
<meta name="description" content="Contamos con 130 marcas diferentes de caramelos, chocolates, paletas, y más. Nuestros 30 años de experiencia nos respaldan. ¡Visítanos hoy mismo!">
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<script src="<?= base_url('js/components/parallax.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<!-- Hero -->
<main id="hero" class="w-full min-h-[50vh] flex items-center relative overflow-hidden bg-gradient-to-br from-denny-blue-200 to-denny-blue-400 text-white">
	<img src="<?= base_url('/images/pages/home/moritas.webp') ?>" alt="Dulce-moritas" class="layer absolute top-0 left-[3%] object-cover" data-speed="-4" />
	<img src="<?= base_url('/images/pages/home/gomitas.webp') ?>" alt="Dulce-gomitas" class="layer absolute bottom-0 left-[3%] md:left-[40%] object-cover" data-speed="5" />
	<img src="<?= base_url('/images/pages/home/dulces.webp') ?>" alt="Dulce-varios" class="layer absolute bottom-0 right-0 object-cover w-1/2 lg:w-auto min-w-[350px]" data-speed="-2" />
	<div class="container relative mb-10 lg:mb-0">
		<h1 class="text-4xl md:text-5xl lg:text-6xl font-black uppercase">Distribuidora de dulces</h1>
		<h2 class="text-xl font-bold md:text-2xl mt-1">Encuentra caramelos, paletas, botanas, y chocolates al mejor precio</h2>
	</div>
</main>

<!-- Automatic Carousel Banners -->
<section class="my-8">
	<div class="container">
		<?= $this->include('website/components/AutomaticCarousel') ?>
	</div>
</section>

<!-- Subcopy -->
<section class="mt-8 py-5">
	<div class="container text-center text-denny-dark-400">
		<p>En Dulcerías Denny trabajamos con 130 marcas diferentes y contamos con más de 2,000 productos disponibles para su venta inmediata en cualquiera de nuestras 24 sucursales.</p>
		<hgroup class="mt-8">
			<h2 class="font-bold text-denny-blue-300 mb-2 text-2xl">Dulces al mayoreo</h2>
			<p>Si necesitas un distribuidor de dulces para surtir tu negocio, nosotros somos tu mejor opción.</p>
		</hgroup>
	</div>
</section>

<!-- Categories section -->
<section class="mt-16 py-5">
	<div class="container">
		<h2 class="font-bold text-denny-blue-300 text-center text-2xl">¿Buscas algún producto en especial?</h2>
		<?= $this
			->setVar('initialCategories', array_slice($categories, 0, 4))
			->setVar('restCategories', array_slice($categories, 4))
			->include('website/components/SeeMore') ?>
	</div>
</section>

<!-- Favorites -->
<section class="mt-8 py-5 relative overflow-hidden min-h-[80vh] flex items-center">
	<img src="<?= base_url('/images/pages/home/confetti-left.svg') ?>" alt="Confetti-Left" class="w-[100px] lg:w-auto absolute top-0 -left-5">
	<img src="<?= base_url('/images/pages/home/confetti-right.svg') ?>" alt="Confetti-Right" class="w-[100px] lg:w-auto absolute bottom-0 -right-5">
	<div class="container">
		<h2 class="font-bold text-denny-blue-300 text-center text-2xl">Los favoritos de todos</h2>
		<div class="favorites__wrapper mt-8 grid grid-cols-[repeat(auto-fit,minmax(180px,1fr))] gap-x-4 gap-y-14 justify-center justify-items-center">
			<?php foreach ($favorites as $itr => $favorite) : ?>
				<?= $this->setVar('product', $favorite)->setVar('type', 'primary')->include('website/components/ProductItem') ?>
			<?php endforeach ?>
		</div>
	</div>
</section>


<!-- Seasons -->
<section class="mt-8 py-5">
	<div class="container">
		<hgroup>
			<h2 class="font-bold text-denny-blue-300 text-center text-2xl">Nuestros dulces por temporada</h2>
			<p class="text-denny-dark-400 text-center mt-3">Contamos con una amplia variedad de confitería para endulzar los mejores momentos de tu vida.</p>
		</hgroup>
		<?= $this->setVar('seasons', $seasons)->include('website/components/SeasonsCarousel') ?>
	</div>
</section>

<!-- Brands -->
<section class="mt-8 py-5">
	<div class="container text-center">
		<h2 class="font-bold text-denny-blue-300 text-center text-2xl">Nuestras marcas de dulces</h2>
		<?= $this->setVar('brands', $brands)->setVar('isNameVisible', false)->include('website/components/BrandsList') ?>
		<a href="<?= url_to('website.brands.index') ?>" class="py-2 px-3 inline-block bg-denny-blue-100 text-white rounded-3xl hover:bg-denny-blue-300 transition-colors delay-100">Ver todos los productos por marca</a>
	</div>
</section>


<!-- Banner -->
<section class="my-16 py-5">
	<div class="container">
		<div class="banner min-h-[250px] flex-col md:flex-row flex W-full md:w-4/5 justify-center items-center py-5 px-10 mx-auto bg-gradient-to-br from-denny-blue-400 to-denny-blue-100 text-white rounded-3xl">
			<picture class="min-w-[100px] max-w-[190px] w-3/4 lg:mr-auto lg:-translate-x-28 md:w-[30%] lg:w-[18%]">
				<img src="<?= base_url('/images/pages/home/shop.webp') ?>" alt="Dulces-Shop" class="w-full object-cover">
			</picture>
			<div class="mt-6 md:mt-0 md:mr-auto md:w-[90%] ml-6">
				<h3 class="font-bold text-2xl md:text-3xl lg:text-5xl">Permitenos ser tu proveedor de dulces</h3>
				<div class="flex flex-col md:flex-row justify-between">
					<ul class="banner__list mt-2 mb-2">
						<li>Precios especiales de mayoreo</li>
						<li>Descuentos por volumen y recompra </li>
						<li>+150 marcas y proveedores</li>
					</ul>
					<button id="btn-banner-contact" class="bg-denny-green text-white py-2 px-3 md:self-end rounded-3xl shadow-md transition-opacity delay-100 hover:opacity-90">Cotiza tu pedido</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Most selled products -->
<section class="mt-8 py-5">
	<div class="container">
		<h2 class="font-bold text-denny-blue-300 text-center text-xl">Los dulces y botanas más vendidos del mes</h2>
		<div class="favorites__wrapper mt-8 grid grid-cols-[repeat(auto-fit,minmax(180px,1fr))] gap-x-4 gap-y-20 justify-center justify-items-center">
			<?php foreach ($favorites as $itr => $favorite) : ?>
				<?= $this->setVar('product', $favorite)->setVar('type', 'primary')->include('website/components/ProductItem') ?>
			<?php endforeach ?>
		</div>
	</div>
</section>


<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
