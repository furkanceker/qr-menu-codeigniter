<?php $this->load->view('onyuz/include/header'); ?>
<!--==================== MAIN ====================-->
        <main class="main">


            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <span class="section__subtitle">En İyi Tatlılar</span>
                <h2 class="section__title">Popüler Tatlılar</h2>

                <div class="popular__container container grid">
                    <?php foreach ($tatlilar as $tatli) { ?>
                    <article class="popular__card">
                        <img class="popular__img" src="<?= base_url().$tatli->image;?>" style="width:100%;" alt="Image">
                        <h3 class="popular__name"><?= $tatli->title ?></h3>
                        <span class="popular__description"><?= $tatli->info ?></span>
                        <span class="popular__price"><?= $tatli->price ?>₺</span>

<!--                         <button class="popular__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>
                    <?php } ?>
                </div>
            </section>

        </main>

<?php $this->load->view('onyuz/include/footer'); ?>        