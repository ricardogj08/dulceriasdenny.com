
// Open and close list of maps
const controlsArea = document.querySelector('.map__controls')
const listsOffices = Array.from(document.querySelectorAll('.list__offices'))

controlsArea.addEventListener('click', (e) => {
  const target = e.target
  if (!(target.classList.contains('btn__offices'))) return

  const id = target.dataset.btnofficesid
  listsOffices.forEach(list => {
    if (list.dataset.listid === id) {
      list.classList.remove('sr-only')
    } else {
      list.classList.add('sr-only')
    }
  })
})

// Open and close an specific Map
const btnMaps = document.querySelectorAll('.btn__map')
const iframeMap = document.querySelector('#iframe-map')

btnMaps.forEach(btnMap => btnMap.addEventListener('click', () => {
  const srcMap = btnMap.dataset.map
  iframeMap.src = `https://www.google.com/maps/embed?pb=${srcMap}`
}))
