/** @type {import('tailwindcss').Config} */
/**
 * Archivo de configuración de Tailwind CSS para el sitio web.
 */
module.exports = {
  content: [
    './app/Views/website/**/*.php',
    './public/js/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        denny: {
          blue: {
            100: '#0D6FFF',
            200: '#0D80FF',
            300: '#432CD2',
            400: '#4F20C6'
          },
          light: {
            100: '#DBDAE2',
            200: '#F6F4FF'
          },
          dark: {
            100: '#979797',
            200: '#A29FBA',
            300: '#666666',
            400: '#4A4A4A',
            500: '#2A2A2A'
          },
          green: '#06CC4A',
          red: {
            100: '#FF6F4C',
            200: '#EC054A'
          },
          pink: {
            100: '#FFCEF2',
            200: '#FFD5F4',
            300: '#FECEE3',
            400: '#FF007F'
          },
          purple: '#64007C',
          yelllow: '#FFD500'
        }
      },
      backgroundImage: {
        'blog-background': "url('../images/blog/blogBackground.webp')"
      },
      zIndex: {
        5: '5'
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography')
  ]
}
