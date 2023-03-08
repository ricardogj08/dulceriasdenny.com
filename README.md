# dulceriasdenny.com

Dulcerías Denny

* [Notion](https://ricardogj08.notion.site/587b0a12194246e4aff50a49d73dee2b?v=a982b01797dc41ea8d744e2f5a702358)

## Dependencias

* [PHP >= 7.4](https://www.php.net/)
* [Composer](https://getcomposer.org/)
* [MariaDB >= 5.1](https://mariadb.org/)
* [npm](https://www.npmjs.com/)

## Instalación

Clona el repositorio del proyecto:

	git clone https://github.com/ricardogj08/dulceriasdenny.com.git
	cd dulceriasdenny.com

Instala las dependencias del proyecto:

**Desarrollo**:

	composer install
	npm install

**Producción**:

	composer install --no-dev -o

## Configuración

Copia el archivo de configuración del proyecto `env` a `.env`:

	cp env .env

## Base de datos

Crea la base de datos de la aplicación:

	CREATE DATABASE IF NOT EXISTS dulceriasdennycom
	    CHARACTER SET = 'utf8mb4'
	    COLLATE = 'utf8mb4_spanish_ci';

o desde `spark`:

	php spark db:create dulceriasdennycom

Construye todas tablas de la base de datos:

	php spark migrate --all

Inicializa las tablas de la base de datos:

	php spark db:seed MainSeeder

## Ejecución

    php spark serve

* <http://localhost:8080/>

## Comandos

Estandariza la guía de estilo de todo el código PHP:

	composer run prettier

Estandariza la guía de estilo de todo el código JavaScript:

	npx standard

Compila Tailwind CSS para el sitio web:

	npm run tailwindcss

Compila Tailwind CSS para el backend:

	npm run tailwindcss-backend

Comprueba y finaliza todos los Pop Ups publicados que cuentan con una fecha de término:

	php spark popups:finish

## Referencias

* [CodeIgniter4 User Guide](https://codeigniter4.github.io/userguide/)
* [Translations for CodeIgniter 4 System Messages](https://github.com/codeigniter4/translations)
* [CodeIgniter 4 Settings](https://github.com/codeigniter4/settings)
* [CodeIgniter Coding Standard](https://github.com/CodeIgniter/coding-standard)
* [Tailwind CSS documentation](https://tailwindcss.com/docs/installation)
* [Remix Icon](https://github.com/Remix-Design/remixicon)
* [daisyUI - Tailwind CSS Components](https://daisyui.com/)
* [Flowbite - Tailwind CSS component library](https://flowbite.com/)
* [JavaScript Standard Style](https://standardjs.com/)
* [Google Tag Manager - Guía de inicio rápido](https://developers.google.com/tag-manager/quickstart?hl=es)
* [Configurar e instalar Tag Manager](https://support.google.com/tagmanager/answer/6103696?hl=es)
* [Servicio de ayuda de WhatsApp - Cómo usar la función de clic para chatear](https://faq.whatsapp.com/5913398998672934/?helpref=uf_share)
* [Google reCAPTCHA v2](https://developers.google.com/recaptcha/docs/display)
* [Google reCAPTCHA - Registra un sitio nuevo](https://www.google.com/recaptcha/admin/create)
* [Google reCAPTCHA - Verifying the user's response](https://developers.google.com/recaptcha/docs/verify)
* [Tinify - API Reference](https://tinypng.com/developers/reference/php)
* [Clippy - CSS clip-path maker](https://bennettfeely.com/clippy/)
* [Hostinger Tutoriales - CodeIgniter Tutorial: The Complete Guide](https://www.hostinger.com/tutorials/codeigniter-tutorial)
* [Trix - A rich text editor for everyday writing](https://trix-editor.org/)
* [Trix with support multiple headings](https://github.com/Quimbee/trix)
* [Google - Cómo escribir y enviar un archivo robots.txt](https://developers.google.com/search/docs/crawling-indexing/robots/create-robots-txt?hl=es)
* [GoOnlineTools - Share Link Generator](https://goonlinetools.com/share-link-generator/)
* [Siema - Lightweight and simple carousel with no dependencies](https://pawelgrzybek.github.io/siema/)
* [Siema call makes carousel invisible if element has not yet been inserted into the page](https://github.com/pawelgrzybek/siema/issues/127)
* [Udacity Git Commit Message Style Guide](https://udacity.github.io/git-styleguide/)
* [W3C - Markup Validation Service](https://validator.w3.org/)
* [Lighthouse - Automated auditing, performance metrics, and best practices for the web](https://github.com/GoogleChrome/lighthouse)
* [browserling - UTF8 Decoder](https://www.browserling.com/tools/utf8-decode)
* [WooRank - Análisis SEO y evaluación de sitios web](https://www.woorank.com/es/extension)
* [SVG Viewer - View, edit, and optimize SVGs](https://www.svgviewer.dev/)
* [Lorem Picsum - The Lorem Ipsum for photos](https://picsum.photos/)
* [Google - Canonicalización de URLs de páginas duplicadas y uso de la etiqueta canónica](https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls?hl=es)
* [Sitemaps XML format](https://www.sitemaps.org/protocol.html)
* [Google - Crear y enviar un sitemap](https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap?hl=es)
* [Google - Etiquetas meta y atributos que Google admite](https://developers.google.com/search/docs/crawling-indexing/special-tags?hl=es)
* [Facebook - https://developers.facebook.com/docs/sharing/webmasters/#markup](https://developers.facebook.com/docs/sharing/webmasters)
* [DCMI Metadata Terms](https://www.dublincore.org/specifications/dublin-core/dcmi-terms/)
* [Dublin Core en castellano](https://www.rediris.es/search/dces/)
* [EDteam - Microdatos y OpenGraph - Curso HTML5 Desde Cero (16)](https://youtu.be/M0WuqvwFLyo)
* [Google - Introducción al marcado de datos estructurados en la Búsqueda de Google](https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data?hl=es)
* [Google - Prueba tus datos estructurados](https://developers.google.com/search/docs/appearance/structured-data?hl=es)
* [The Open Graph protocol](https://www.ogp.me/)
* [Twitter - Cards Markup Tag Reference](https://developer.twitter.com/en/docs/twitter-for-websites/cards/overview/markup)
* [Twitter - Getting Started Guide](https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started)
* [Geo Tag Generator](https://www.geo-tag.de/generator/en.html)
* [Format of HTML Geo-Tags](https://www.geo-tag.de/informator/en2.html)
* [Git-ftp - Uploads to FTP servers the Git way](https://github.com/git-ftp/git-ftp)
* [WhatsApp - Cómo usar la función de clic para chatear](https://faq.whatsapp.com/5913398998672934/?helpref=hc_fnav&locale=es_LA)
* [Hostinger Tutoriales - How to Force HTTPS Using .htaccess (Updated 2023)](https://www.hostinger.com/tutorials/ssl/force-https-using-htaccess)

## Licencia

    Copyright (C) 2023 - Genotipo (R)
