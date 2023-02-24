<section class="relative overflow-hidden">
  <a href="/promociones">
    <div class="carousel flex transition-transform delay-100" aria-label="carousel">
      <article class="relative flex-shrink-0 w-full h-full">
        <picture class="w-full h-full block relative md:static">
          <img src="<?= base_url('/images/pages/home/banner.webp') ?>" alt="Banner - Dulcerias Denny" class="w-full h-full object-cover">
          <h2 class="absolute top-1/2 right-0 -translate-y-1/2 text-denny-blue-300 text-xl font-black md:hidden w-1/2">Paquetes para Fiesta al 50% de Descuento</h2>
        </picture>
        <div class="md:absolute md:top-1/2 md:right-0 md:-translate-y-1/2 md:w-7/12 md:px-2">
          <h2 class="text-denny-blue-300 text-lg md:text-3xl lg:text-5xl font-black hidden md:block">Paquetes para Fiesta al 50% de Descuento</h2>
          <p class="text-denny-purple text-sm md:text-md lg:text-2xl lg:mt-4 lg:mb-8 font-medium">No pierdas tiempo y dinero, nosotros te enviamos el mejor surtido para tu celebración. </p>
          <p class="text-denny-dark-400 text-sm lg:text-lg"><small>Promoción válida hasta el 30 de noviembre o agotar existencias.</small></p>
        </div>
      </article>
      <article class="relative flex-shrink-0 w-full h-full">
        <picture class="w-full h-full block relative md:static">
          <img src="<?= base_url('/images/pages/home/banner.webp') ?>" alt="Banner - Dulcerias Denny" class="w-full h-full object-cover">
          <h2 class="absolute top-1/2 right-0 -translate-y-1/2 text-denny-blue-300 text-xl font-black md:hidden w-1/2">Paquetes para Fiesta al 60% de Descuento</h2>
        </picture>
        <div class="md:absolute md:top-1/2 md:right-0 md:-translate-y-1/2 md:w-7/12 md:px-2">
          <h2 class="text-denny-blue-300 text-lg md:text-3xl lg:text-5xl font-black hidden md:block">Paquetes para Fiesta al 60% de Descuento</h2>
          <p class="text-denny-purple text-sm md:text-md lg:text-2xl lg:mt-4 lg:mb-8 font-medium">No pierdas tiempo y dinero, nosotros te enviamos el mejor surtido para tu celebración. </p>
          <p class="text-denny-dark-400 text-sm lg:text-lg"><small>Promoción válida hasta el 30 de noviembre o agotar existencias.</small></p>
        </div>
      </article>
      <article class="relative flex-shrink-0 w-full h-full">
        <picture class="w-full h-full block relative md:static">
          <img src="<?= base_url('/images/pages/home/banner.webp') ?>" alt="Banner - Dulcerias Denny" class="w-full h-full object-cover">
          <h2 class="absolute top-1/2 right-0 -translate-y-1/2 text-denny-blue-300 text-xl font-black md:hidden w-1/2">Paquetes para Fiesta al 70% de Descuento</h2>
        </picture>
        <div class="md:absolute md:top-1/2 md:right-0 md:-translate-y-1/2 md:w-7/12 md:px-2">
          <h2 class="text-denny-blue-300 text-lg md:text-3xl lg:text-5xl font-black hidden md:block">Paquetes para Fiesta al 70% de Descuento</h2>
          <p class="text-denny-purple text-sm md:text-md lg:text-2xl lg:mt-4 lg:mb-8 font-medium">No pierdas tiempo y dinero, nosotros te enviamos el mejor surtido para tu celebración. </p>
          <p class="text-denny-dark-400 text-sm lg:text-lg"><small>Promoción válida hasta el 30 de noviembre o agotar existencias.</small></p>
        </div>
      </article>
    </div>
  </a>
  <div class="carousel__navigation mt-4 text-center">
    <label for="radio1">
      <input type="radio" id="radio1" name="radio-carousel-btn" class="cursor-pointer" checked>
    </label>
    <label for="radio2">
      <input type="radio" id="radio2" name="radio-carousel-btn" class="cursor-pointer">
    </label>
    <label for="radio3">
      <input type="radio" id="radio3" name="radio-carousel-btn" class="cursor-pointer">
    </label>
  </div>
</section>


<script type="module" defer>

	// Automatic carousel
  const carouselWrapper = document.querySelector('.carousel');
	const numSlidesCarousel = document.querySelectorAll('.carousel article').length;
  const btnsRadio = document.querySelectorAll('.carousel__navigation input');

  let currentSlideCarousel = 0;
  function changeSlideCarousel(){
		const porcentage = currentSlideCarousel * 100;
    carouselWrapper.style.transform = `translateX(-${porcentage}%)`;
  }

  setInterval(() => {
    currentSlideCarousel += 1;
		if(currentSlideCarousel >= numSlidesCarousel) currentSlideCarousel = 0;
    btnsRadio[currentSlideCarousel].checked = true;
		changeSlideCarousel();
  }, 5000)

  btnsRadio.forEach((btn, index) => btn.addEventListener('change', () => {
    currentSlideCarousel = index;
    changeSlideCarousel()
  }));

</script>
