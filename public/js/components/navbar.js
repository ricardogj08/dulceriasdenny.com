// Menu elements
const navMenu = document.querySelector('#nav-menu')
const overlay = document.querySelector('#overlay')
const menuNavBtn = document.querySelector('#btn-menu')
// Submenu elements
const btnSubmenu = document.querySelector('#btn-submenu')
const subMenu = document.querySelector('#submenu')
// Contact elements
const contactWrapper = document.querySelector('#contact-wrapper')
const btnContactOpen = document.querySelector('#btn-contact-open')
const btnContactClose = document.querySelector('#btn-contact-close')

// Menu
menuNavBtn.addEventListener('click', () => {
  navMenu.classList.toggle('top-[100%]')
  subMenu.classList.remove('nav__submenu-toggle')
  overlay.classList.toggle('overlay__toggle')
})

// Submenu
btnSubmenu.addEventListener('click', () => {
  subMenu.classList.toggle('nav__submenu-toggle')
})

// Contact toggle button in navbar
function openContact () {
  contactWrapper.classList.remove('translate-x-full')
  contactWrapper.classList.add('translate-x-0')
  overlay.classList.add('overlay__toggle')
}
btnContactOpen.addEventListener('click', openContact)

btnContactClose.addEventListener('click', () => {
  contactWrapper.classList.add('translate-x-full')
  contactWrapper.classList.remove('translate-x-0')
  overlay.classList.remove('overlay__toggle')
})
