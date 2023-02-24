<!-- Formulario de contacto -->
<section class="p-8 bg-denny-light-200 text-denny-dark-300 h-full">
    <header class="mb-4 text-center">
        <h2 class="text-2xl text-denny-blue-300">
            Realiza tu pedido de dulces
        </h2>
        <h3 class="mt-1 mb-2 text-denny-blue-300 font-bold text-xl">
            Venta de dulces por Mayoreo
        </h3>
        <p>
            Para cualquier duda, escríbenos y nos comunicaremos contigo lo antes posible.
        </p>
    </header>
    <div>
        <?= form_open(url_to('website.prospects.create'), ['class' => 'grid gap-y-4']) ?>
            <!-- Campo del nombre -->
            <label for="name" class="visually__hidden">
                Nombre:
            </label>
            <input
                type="text"
                id="name"
                name="name"
                placeholder="Nombre"
                class="w-full p-3 bg-white rounded-3xl"
                aria-label="Nombre"
                required
                aria-required="true"
            >
            <!-- Fin del campo del nombre -->

            <div class="w-full flex gap-x-2">
                <!-- Campo del teléfono -->
                <label for="phone" class="visually__hidden">
                    Teléfono:
                </label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="Teléfono"
                    class="w-full p-3 bg-white rounded-3xl"
                    aria-label="Teléfono"
                    maxlength="10"
                    pattern="[0-9]{10}"
                    required aria-required="true"
                >
                <!-- Fin del campo del teléfono -->

                <!-- Campo del email -->
                <label for="email" class="visually__hidden">
                    Email:
                </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Email"
                    class="w-full p-3 bg-white rounded-3xl"
                    aria-label="Email"
                    required
                    aria-required="true"
                >
                <!-- Fin del campo de email -->
            </div>

            <!-- Campo del interés -->
            <label for="interests" class="visually__hidden">
                Interés en:
            </label>
            <input
                type="text"
                id="interests"
                name=""
                placeholder="Interés en"
                class="w-full p-3 bg-white rounded-3xl"
            >
            <!-- Fin del campo del interés -->

            <!-- Campo del mensaje -->
            <label for="message" class="visually__hidden">
                Mensaje:
            </label>
            <textarea
                id="message"
                name="message"
                cols="30"
                rows="5"
                placeholder="Mensaje"
                class="w-full p-3 bg-white rounded-3xl"
                required
                aria-required="true"
            ></textarea>
            <!-- Fin del campo del mensaje -->

            <!-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> -->
            <!-- <div id="html_element"></div> -->

            <!-- Botón de submit -->
            <input
                type="submit"
                value="Enviar"
                class="w-2/5 mx-auto mt-4 py-2 px-3 bg-denny-pink-400 text-white rounded-3xl cursor-pointer"
            >
        <?= form_close() ?>
    </div>
</section>
