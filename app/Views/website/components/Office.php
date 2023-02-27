<details class="group shadow-sm p-2 bg-denny-light-200 rounded-lg">
    <summary class="cursor-pointer group flex justify-between">
        <h3 class="inline-block text-denny-dark-500 font-bold text-lg"><?= esc($office['locationName']) ?></h3>
        <div class="inline-flex gap-x-4 summary-chevron-up">
            <button class="btn__map text-sm text-denny-blue-100 font-medium" data-map="<?= esc($office['mapCoords']) ?>">Ver mapa</button>
            <span class="bg-white rounded-full flex items-center justify-center p-1 opacity-50 group-hover:opacity-100 group-open:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </span>
        </div>
    </summary>
    <p class="py-2 text-denny-dark-400 border-t border-slate-300"><?= esc($office['location']) ?></p>
</details>
