<?php $this->load->view('onyuz/include/header'); ?>
<!--==================== MAIN ====================-->
        <main class="main">


            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <span class="section__subtitle">En İyi İçecekler</span>
                <h2 class="section__title">Popüler İçecekler</h2>

                <div class="popular__container container grid">
                    <?php foreach ($icecekler as $icecek) { ?>
                    <article class="popular__card">
                        <img class="popular__img" src="<?= base_url().$icecek->image;?>" style="width:40%;" alt="Image">
                        <h3 class="popular__name"><?= $icecek->title ?></h3>
                        <span class="popular__description"><?= $icecek->info ?></span>
                        <span class="popular__price"><?= $icecek->price ?>₺</span>

<!--                         <button class="popular__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button> -->
                    </article>
                    <?php } ?>
                </div>
            </section>

        </main>

<?php $this->load->view('onyuz/include/footer'); ?>        