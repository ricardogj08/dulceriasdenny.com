<section class="p-8 bg-denny-light-200 text-denny-dark-300 h-full">
  <header class="mb-4 text-center">
    <h2 class="text-2xl text-denny-blue-300">Realiza tu pedido de dulces</h2>
    <h3 class="mt-1 mb-2 text-denny-blue-300 font-bold text-xl">Venta de dulces por Mayoreo</h3>
    <p class="">Para cualquier duda, escríbenos y nos comunicaremos contigo lo antes posible.</p>
  </header>
  <div>
    <form action="" class="grid gap-y-4">
      <label for="name" class="visually__hidden">Nombre:</label>
      <input type="text" id="name" placeholder="Nombre" class="w-full p-3 bg-white rounded-3xl" aria-label="Nombre" required aria-required="true">
      <div class="w-full flex gap-x-2">
        <label for="phone" class="visually__hidden">Teléfono:</label>
        <input type="tel" id="phone" placeholder="Teléfono" class="w-full p-3 bg-white rounded-3xl" aria-label="Teléfono" maxlength="10" pattern="[0-9]{10}" required aria-required="true">
        <label for="email" class="visually__hidden">Email:</label>
        <input type="email" id="email" placeholder="Email" class="w-full p-3 bg-white rounded-3xl" aria-label="Email" required aria-required="true">
      </div>
      <label for="interests" class="visually__hidden">Interes en:</label>
      <input type="text" id="interests" placeholder="Interés en" class="w-full p-3 bg-white rounded-3xl">
      <label for="message" class="visually__hidden">Mensaje:</label>
      <textarea name="" id="message" cols="30" rows="5" placeholder="Mensaje" class="w-full p-3 bg-white rounded-3xl" required aria-required="true"></textarea>
      <!-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> -->
      <!-- <div id="html_element"></div> -->
      <input type="submit" value="Enviar" class="w-2/5 mx-auto mt-4 py-2 px-3 bg-denny-pink-400 text-white rounded-3xl cursor-pointer">
    </form>
  </div>
</section>
