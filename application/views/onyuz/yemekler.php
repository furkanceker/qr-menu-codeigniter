<?php $this->load->view('onyuz/include/header'); ?>
<!--==================== MAIN ====================-->
        <main class="main">


            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <span class="section__subtitle">En İyi Yemekler</span>
                <h2 class="section__title">Popüler Yemekler</h2>

                <div class="popular__container container grid">
                    <?php foreach ($yemekler as $yemek) { ?>
                    <article class="popular__card">
                        <img class="popular__img" src="<?= base_url().$yemek->image;?>" style="width:50%;" alt="Image">
                        <h3 class="popular__name"><?= $yemek->title ?></h3>
                        <span class="popular__description"><?= $yemek->info ?></span>
                        <span class="popular__price"><?= $yemek->price ?>₺</span>

<!--                         <button class="popular__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>
                    <?php } ?>
                </div>
            </section>

        </main>

<?php $this->load->view('onyuz/include/footer'); ?>        