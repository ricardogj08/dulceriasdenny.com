<!-- Muestra todas las categorías de dulces -->
<details class="categories__details">
    <summary class="list-none">
        <!-- Categorías iniciales -->
        <div class="categories__wrapper grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))] sm:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center mt-6 mb-4 overflow-hidden">
            <?php foreach ($initialCategories as $category): ?>
                <?= $this->setVar('category', $category)->include('website/components/Category') ?>
            <?php endforeach ?>
        </div>

        <button id="btn-more-categories" class="flex items-center mx-auto text-denny-blue-100 font-bold">
            <strong class="lg:text-lg">
                Ver más categorías
            </strong>
            <span class="inline-block rotate-180 ml-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-triangle" width="14" height="14" viewBox="0 0 24 24" stroke-width="1" stroke="#0D6FFF" fill="#0D6FFF" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"/>
                </svg>
            </span>
        </button>
    </summary>

    <!-- Resto de categorías -->
    <div class="categories__wrapper grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))] sm:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center mb-8 overflow-hidden">
        <?php foreach ($restCategories as $category): ?>
            <?= $this->setVar('category', $category)->include('website/components/Category') ?>
        <?php endforeach ?>
    </div>

    <button id="btn-less-categories" class="flex items-center mx-auto text-denny-blue-100 font-bold">
        <strong class="lg:text-lg">
            Ver menos categorías
        </strong>
        <span class="inline-block ml-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-triangle" width="14" height="14" viewBox="0 0 24 24" stroke-width="1" stroke="#0D6FFF" fill="#0D6FFF" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
            </svg>
        </span>
    </button>
</details>

<script defer type="module">
    // See more categories
    const btnMoreCategories = document.querySelector("#btn-more-categories");
    const btnLessCategories = document.querySelector("#btn-less-categories");
    const detailsCategories = document.querySelector(".categories__details");
    btnMoreCategories.addEventListener("click", toggleCategories);
    btnLessCategories.addEventListener("click", toggleCategories);

    function toggleCategories() {
        detailsCategories.open = !detailsCategories.open;
        btnMoreCategories.classList.toggle("hidden");
    }
</script>
