<section class="mt-12 relative overflow-hidden" aria-label="carousel">
    <button id="btn-slider-prev" class="absolute top-1/2 -translate-y-1/2 left-0 z-[3]">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="50" viewBox="0 0 25 50" fill="none" class="w-8/12 mr-auto md:w-full">
                <path fill="#DBDAE2" d="M.0834 24.6814a3.0863 3.0863 0 0 1 .7396-1.7046L19.3524 1.3591A3.089 3.089 0 0 1 21.4973.0278a3.0876 3.0876 0 0 1 2.4213.7138 3.0857 3.0857 0 0 1 1.0807 2.2812 3.086 3.086 0 0 1-.9823 2.325L7.193 24.971l16.824 19.6232a3.0888 3.0888 0 0 1 .9823 2.3257 3.0854 3.0854 0 0 1-1.0807 2.2812 3.0878 3.0878 0 0 1-2.4213.7138 3.0915 3.0915 0 0 1-2.1449-1.3313L.823 26.966a3.0884 3.0884 0 0 1-.7396-2.2842v-.0004Z" />
            </svg>
        </span>
    </button>
    <button id="btn-slider-next" class="absolute top-1/2 -translate-y-1/2 right-0 z-[3]">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="50" viewBox="0 0 25 50" fill="none" class="w-8/12 ml-auto md:w-full">
                <path fill="#DBDAE2" d="M24.9166 24.6814a3.087 3.087 0 0 0-.7396-1.7046L5.6475 1.3591A3.0877 3.0877 0 0 0 1.0813.7416 3.0858 3.0858 0 0 0 .0008 3.0228a3.086 3.086 0 0 0 .9823 2.325L17.8071 24.971.9831 44.5942a3.089 3.089 0 0 0-.9824 2.3257 3.0855 3.0855 0 0 0 1.0807 2.2812 3.0878 3.0878 0 0 0 2.4213.7138 3.0913 3.0913 0 0 0 2.1448-1.3313L24.177 26.966a3.0889 3.0889 0 0 0 .7396-2.2842v-.0004Z" />
            </svg>
        </span>
    </button>
    <div class="slides__container flex transition-all ease-in delay-200">
        <!-- Posts slides -->
        <div class="slide w-full shrink-0" role="group">
            <figure class="w-10/12 sm:w-auto max-w-xl mx-auto">
                <img src="<?= base_url('images/blog/post2.webp') ?>" alt="Post - Dulcerias Denny" class="max-w-full aspect-auto object-cover">
                <figcaption class="mt-4 text-center text-denny-dark-500 font-black text-xl">Titulo</figcaption>
            </figure>
        </div>
        <div class="slide w-full shrink-0" role="group">
            <figure class="w-10/12 sm:w-auto max-w-xl mx-auto">
                <img src="<?= base_url('images/blog/post2.webp') ?>" alt="Post - Dulcerias Denny" class="max-w-full aspect-auto object-cover">
                <figcaption class="mt-4 text-center text-denny-dark-500 font-black text-xl">Titulo</figcaption>
            </figure>
        </div>
        <div class="slide w-full shrink-0" role="group">
            <figure class="w-10/12 sm:w-auto max-w-xl mx-auto">
                <img src="<?= base_url('images/blog/post2.webp') ?>" alt="Post - Dulcerias Denny" class="max-w-full aspect-auto object-cover">
                <figcaption class="mt-4 text-center text-denny-dark-500 font-black text-xl">Titulo</figcaption>
            </figure>
        </div>
    </div>
</section>



<script type="module" defer>
    // Carousel seasons
    // It's important every slide has a layer(a div) with a classlist of "slide w-full shrink-0"
    const slider = document.querySelector('.slides__container');
    const numSlides = document.querySelectorAll('.slide').length;
    const btnSliderPrev = document.querySelector('#btn-slider-prev');
    const btnSliderNext = document.querySelector('#btn-slider-next');
    let currentSlide = 0;

    btnSliderNext.addEventListener('click', () => {
        currentSlide += 1;
        if (currentSlide >= numSlides) currentSlide = 0;
        const porcentage = currentSlide * 100;
        slider.style.transform = `translateX(-${porcentage}%)`;
    })

    btnSliderPrev.addEventListener('click', () => {
        currentSlide -= 1;
        if (currentSlide < 0) currentSlide = numSlides - 1;
        const porcentage = currentSlide * 100;
        slider.style.transform = `translateX(-${porcentage}%)`;
    })
</script>
