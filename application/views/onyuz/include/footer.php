<!--==================== FOOTER ====================-->
<?php $config = Ayarlar::find(1); ?>
<footer class="footer">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        <img src="<?= base_url().$config->logo;?>" alt="">
                        <?= $config->baslik; ?>
                    </a>
                    <p class="footer__description">
                        <?= $config->aciklama; ?>
                    </p>
                </div>
                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Ana Menü</h3>
                        <ul class="footer__links">
                            <li>
                                <a href="<?= base_url( ); ?>" class="footer__link">Kategoriler</a>
                            </li>
                            <li>
                                <a href="<?= base_url('yemekler'); ?>" class="footer__link">Yemekler</a>
                            </li>
                            <li>
                                <a href="<?= base_url('tatlilar'); ?>" class="footer__link">Tatlılar</a>
                            </li>
                            <li>
                                <a href="<?= base_url('icecekler'); ?>" class="footer__link">İçecekler</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Bilgilendirme</h3>
                        <ul class="footer__links">
                            <li>
                                <a href="<?= base_url('iletisim'); ?>" class="footer__link">İletişim</a>
                            </li>
                            <li>
                                <a href="<?= base_url('wifi'); ?>" class="footer__link">Wi-Fi Bilgileri</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Adres</h3>
                        <ul class="footer__links">
                            <li class="footer__information">
                            <?= $config->adres; ?>
                            </li>
                            <li class="footer__information">
                            <?= $config->saat; ?>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Sosyal Medya</h3>
                        <ul class="footer__social">
                            <a href="<?= $config->facebook; ?>" class="footer__social-link"><i class="ri-facebook-circle-fill"></i></a>
                            <a href="<?= $config->instagram; ?>" class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                            <a href="<?= $config->twitter; ?>" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
                        </ul>
                    </div>
                </div>
                <img src="<?= base_url('assets/front/');?>assets/img/spring-onion.png" alt="" class="footer__onion">
                <img src="<?= base_url('assets/front/');?>assets/img/spinach-leaf.png" alt="" class="footer__spinach">
                <img src="<?= base_url('assets/front/');?>assets/img/leaf-branch-4.png" alt="" class="footer__leaf">
            </div>
            <div class="footer__info container">
                <div class="footer__card">
                    <img src="<?= base_url('assets/front/');?>assets/img/footer-card-1.png" alt="">
                    <img src="<?= base_url('assets/front/');?>assets/img/footer-card-2.png" alt="">
                    <img src="<?= base_url('assets/front/');?>assets/img/footer-card-3.png" alt="">
                    <img src="<?= base_url('assets/front/');?>assets/img/footer-card-4.png" alt="">
                </div>
                <span class="footer__copy">
                    2022 &#169; Tüm Hakları Sakldır.
                </span>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="<?= base_url('assets/front/');?>assets/js/scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="<?= base_url('assets/front/');?>assets/js/main.js"></script>
    </body>
</html>