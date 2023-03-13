<?php
$defaultOption = $options[0]; //this will change depends the category in the url
$restOptions = array_slice($options, 0)
?>


<div class="dropdown h-full relative">
    <div class="select flex justify-between items-center p-2 cursor-pointer hover:opacity-75">
        <span class="selected font-black text-xl lg:text-2xl"><?= esc($defaultOption['name']) ?></span>
        <span class="caret__dropdown inline-block transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" fill="#0D6FFF" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 15l-6 -6l-6 6h12" transform="rotate(180 12 12)" />
            </svg>
        </span>
    </div>
    <ul class="dropdown__menu grid gap-1 p-4 shadow-md absolute z-10 w-full invisible rounded-lg bg-white transition-all" role="menu">
        <?php foreach ($restOptions as $itr => $option) : ?>
            <li role="menuitem">
                <a href="#" class="font-bold hover:text-denny-blue-300"><?= esc($option['name']) ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>


<script type="module">
    const togglerDropDown = document.querySelector('.select');
    const dropDownMenu = document.querySelector('.dropdown__menu');
    const caretIcon = document.querySelector('.caret__dropdown');

    togglerDropDown.addEventListener('click', () => {
        dropDownMenu.classList.toggle('visible');
        dropDownMenu.classList.toggle('invisible');
        caretIcon.classList.toggle('rotate-180');
    })
</script>
