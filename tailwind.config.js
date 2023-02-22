/** @type {import('tailwindcss').Config} */
/**
 * Archivo de configuración de Tailwind CSS para el sitio web.
 */
module.exports = {
  content: [
    './app/Views/website/**/*.php',
    './public/js/website/**/*.js'
  ],
  theme: {
    extend: {}
  },
  plugins: [
    require('@tailwindcss/typography')
  ]
}
