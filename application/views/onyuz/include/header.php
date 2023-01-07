<?php $config = Ayarlar::find(1); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="<?= base_url().$config->icon;?>" type="image/x-icon">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="<?= base_url('assets/front/');?>assets/css/styles.css">

        <title><?= $config->baslik; ?></title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="<?= base_url(); ?>" class="nav__logo">
                    <img src="<?= base_url().$config->logo;?>" alt=""><?= $config->baslik; ?>
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="<?= base_url(); ?>" class="nav__link">Kategoriler</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?= base_url('yemekler'); ?>" class="nav__link">Yemekler</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?= base_url('tatlilar'); ?>" class="nav__link">Tatlılar</a>
                        </li>
                        <li class="nav__item">
                            <a href="<?= base_url('icecekler'); ?>" class="nav__link">İçecekler</a>
                        </li>
                    </ul>
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                    <img src="<?= base_url('assets/front/');?>assets/img/leaf-branch-4.png" alt="" class="nav__img-1">
                    <img src="<?= base_url('assets/front/');?>assets/img/leaf-branch-3.png" alt="" class="nav__img-2">
                </div>

                <div class="nav__buttons">
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-apps-2-line"></i>
                    </div>
                </div>
            </nav>
        </header>