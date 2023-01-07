<?php $this->load->view('onyuz/include/header'); ?>
<!--==================== MAIN ====================-->
        <main class="main">


            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <span class="section__subtitle">Kategoriler</span>
                <h2 class="section__title">Kategoriler</h2>

                <div class="popular__container container grid">
                    <?php foreach ($kategoriler as $kategori) {?>
                    <a href="<?= base_url().$kategori->link; ?>">
                        <article class="popular__card">
                            <img class="popular__img2" src="<?= base_url().$kategori->image;?>" style="width:50%;" alt="Image">
                            <h3 class="popular__name"><?= $kategori->name ?></h3>
                        </article>
                    </a>
                    <?php } ?>
                </div>
            </section>

        </main>

<?php $this->load->view('onyuz/include/footer'); ?>        