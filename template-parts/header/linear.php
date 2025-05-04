<?php
    $menu = get_field('menu_items', 'option');
?>

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <div class="burger-menu">
                    <div class="barre"></div>
                    <div class="barre"></div>
                    <div class="barre"></div>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="<?= get_site_url(); ?>/galerie/">
                            Nos programmes
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_site_url(); ?>/galerie/">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_site_url(); ?>/galerie/">
                            Agenda
                        </a>
                    </li>
                    <li>
                        <a href="<?= get_site_url(); ?>/galerie/">
                            Nous contacter
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-sm-2">
                <div class="logo">
                    <a href="<?= get_site_url(); ?>">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/styles/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-5 text-right">
                <a href="#devis" class="button">Je reserve mon stage</a>
            </div>
        </div>
    </div>
</div>

<?php custom_breadcrumb(); ?>
