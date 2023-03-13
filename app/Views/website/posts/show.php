<?= $this->extend('website/templates/page') ?>

<?= $this->section('head') ?>
<title>★ Blog de Dulcerías Denny | Todo sobre Dulces</title>
<meta name="description" content="¡Deslúmbrate con nuestros tips y recetas con Dulces! Nuestros 30 años de experiencia nos respaldan para aconsejarte sobre caramelos, chocolates, y más.">
<?= $this->endSection() ?>

<!-- JS -->
<?= $this->section('javascript') ?>
<script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<script src="<?= base_url('js/components/parallax.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>

<!-- Content -->
<?= $this->section('content') ?>
<?= $this->include('website/components/Header') ?>
<main>
    <!-- POST HEADER -->
    <header class="relative bg-blog-background bg-cover bg-no-repeat bg-center min-h-[380px]">
        <h1 class="absolute inset-0 grid place-items-center text-white text-3xl font-black backdrop-contrast-50 text-center px-8">
            Titulo del Post
        </h1>
    </header>
    <div class="container -mt-24 relative">

        <!-- POST -->
        <section class="bg-white py-4 px-2">
            <article class="w-11/12 mx-auto my-8">
                <h2 class="text-denny-blue-300 text-2xl font-black text-center mb-8">Subtitulo principal</h2>
                <p class="my-4">
                    Adipiscing viverra morbi vestibulum sit venenatis etiam accumsan taciti congue aptent curabitur a vestibulum parturient faucibus massa a scelerisque cum sit montes suspendisse vestibulum dui sem id. Adipiscing etiam bibendum parturient parturient cubilia iaculis a malesuada malesuada sapien dui montes etiam pharetra ullamcorper pharetra fusce. Hendrerit dictumst scelerisque potenti ullamcorper congue fames in inceptos interdum lobortis mi nec suspendisse id class praesent mi suspendisse dignissim orci volutpat. Ultrices lacinia mi mollis cras scelerisque scelerisque eu auctor maecenas mi eu cras a sociosqu amet lorem consectetur dui ullamcorper placerat enim. Justo odio a odio malesuada scelerisque ultrices consequat parturient curabitur parturient pharetra nulla parturient quam amet bibendum justo ut semper in risus duis quis mus penatibus penatibus arcu erat.
                </p>
                <picture class="my-4 w-1/2 block mx-auto min-w-[250px]">
                    <img src="/images/blog/post.webp" alt="Post" class="w-full object-cover">
                </picture>
                <h3 class="text-denny-dark-500 font-black text-xl">Subtitulo</h3>
                <p class="my-4">
                    Ultricies vestibulum adipiscing a a libero litora a accumsan sociosqu parturient adipiscing condimentum accumsan ad curae facilisis eleifend per duis pharetra eu facilisi est. Eu enim adipiscing libero orci bibendum suscipit pulvinar non neque semper vivamus suspendisse a quam parturient dis mi. Ad semper vel dis id scelerisque nisi malesuada dictum vestibulum fringilla himenaeos hendrerit vel lobortis urna vel sem lacinia aliquam nullam a. Et eu condimentum diam mollis facilisi mi ullamcorper a posuere elementum quam sed porta facilisi donec tincidunt eu a eros litora eros curabitur. Amet sociosqu metus nibh vehicula ridiculus velit cursus a habitant scelerisque ullamcorper odio a vivamus cum arcu velit potenti ultrices a ullamcorper nascetur parturient justo curae feugiat. Praesent a a a consectetur nulla posuere a class aliquam sagittis consectetur adipiscing ac condimentum torquent adipiscing suspendisse ullamcorper accumsan ad.
                </p>
                <p class="my-4">
                    A vel adipiscing gravida dui curae a suspendisse suscipit gravida orci nascetur cras nulla condimentum consequat mus nam rhoncus sem nunc senectus venenatis a. Cras duis in orci aliquam mollis vestibulum a laoreet dis eros duis scelerisque non ante parturient parturient ac mattis. A id suscipit enim cum justo scelerisque a a molestie scelerisque sodales a pretium ullamcorper per. Vestibulum vel scelerisque a condimentum semper erat posuere suspendisse a laoreet purus quis a hac id vulputate donec nulla cum a
                </p>
                <p class="my-4">
                    Nunc elementum ullamcorper in in adipiscing a scelerisque urna adipiscing bibendum imperdiet sem eu volutpat nam id ipsum condimentum vel tristique dignissim cum amet quisque feugiat. Ullamcorper gravida nam vivamus arcu ante faucibus condimentum integer non ligula consectetur fames adipiscing proin a accumsan iaculis lacinia nam aenean cursus dui rhoncus accumsan vulputate a. Sagittis curabitur in a a iaculis potenti laoreet tempus netus aliquam varius nec conubia metus tempor adipiscing orci vestibulum orci neque augue vestibulum a venenatis et nunc. Porta mi ornare ipsum suspendisse laoreet maecenas nascetur risus nisl condimentum elementum lectus velit adipiscing vitae vestibulum cum vestibulum dictumst ligula aliquet eleifend vestibulum.
                </p>
            </article>
        </section>

        <!-- Slider other posts -->
        <section>
            <h2 class="text-denny-blue-300 text-center font-black text-2xl">Tambien te puede interesar</h2>
            <?= $this->include('website/components/PostsCarousel') ?>
        </section>

        <!-- SHARE COMPONENT -->
        <section class="min-h-[25vh] grid place-items-center my-8">
            <?= $this->include('website/components/Share') ?>
        </section>
    </div>
</main>
<?= $this->include('website/components/Footer') ?>
<?= $this->endSection() ?>
