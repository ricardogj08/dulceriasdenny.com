const heroSection = document.querySelector('#hero')
heroSection.addEventListener('mousemove', parallaxMouse)
const candiesImages = heroSection.querySelectorAll('.layer')

function parallaxMouse (event) {
  candiesImages.forEach(candyImg => {
    const speed = Number(candyImg.dataset.speed)
    const coords = {
      x: (window.innerWidth - event.pageX * speed) / 100,
      y: (window.innerHeight - event.pageY * speed) / 100
    }

    candyImg.style.transform = `translate(${coords.x}px, ${coords.y}px)`
  })
}
