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
                    <li class="<?= (is_post_type_archive('les-stages') || is_singular('les-stages')) ? 'active':'';?>">
                        <a href="<?= get_site_url(); ?>/les-stages/">
                            Nos programmes
                        </a>
                    </li>
                    <li class="<?= (get_the_id() == '406') ? 'active' : ''; ?>">
                        <a href="<?= get_site_url(); ?>/a-propos/">
                            À propos
                        </a>
                    </li>
                    <li class="<?= (is_post_type_archive('agenda')) ? 'active':'';?>">
                        <a href="<?= get_site_url(); ?>/agenda/">
                            Agenda
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="open-modal-contact">
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
                <a href="<?= get_site_url(); ?>/agenda/" class="button">Je reserve mon stage</a>
            </div>
        </div>
    </div>
</div>

<?php custom_breadcrumb(); ?>
