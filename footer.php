<?php if(!is_front_page()): ?>

    <?php if(!is_singular()): ?>
        <div class="strate marge <?= (is_post_type_archive('les-stages')) ? "marge-small" : ""; ?>" style="background: #fef8ef">
        </div>
        <div class="strate container-text-only center  marge-small" style="background: #fef8ef">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Nos <strong>valeurs</strong></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="strate container-pictos  marge-small" style="background: #fef8ef">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="container-picto">
                            <div class="picto-description">
                                <p><img decoding="async" class="alignnone size-full wp-image-370 aligncenter" src="https://harmony-builder.code/wp-content/uploads/2025/05/image-1156.png" alt="" width="78" height="78"></p>
                                <p style="text-align: center;"><strong>Pédagogie accessible</strong><br>
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container-picto">
                            <div class="picto-description">
                                <p><img decoding="async" class="alignnone size-full wp-image-370 aligncenter" src="https://harmony-builder.code/wp-content/uploads/2025/05/image-1156.png" alt="" width="78" height="78"></p>
                                <p style="text-align: center;"><strong>Pédagogie accessible</strong><br>
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container-picto">
                            <div class="picto-description">
                                <p><img decoding="async" class="alignnone size-full wp-image-370 aligncenter" src="https://harmony-builder.code/wp-content/uploads/2025/05/image-1156.png" alt="" width="78" height="78"></p>
                                <p style="text-align: center;"><strong>Pédagogie accessible</strong><br>
                                    Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                    </div>
                </div>
            </div>
        </div>
        <div class="strate marge " style="background: #fef8ef">
        </div>
    <?php endif; ?>
    <div class="strate container-image-text ">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <img src="https://harmony-builder.code/wp-content/uploads/2025/05/image-1144.png" class="image-strate" alt="" width="613" height="585" loading="lazy">
                </div>


                <div class="col-sm-6">
                    <div class="text-content">
                        <h2><strong>100% finançable par</strong><br>
                            France travail, AFDAS</h2>
                        <p>Parce que développer en permanence des compétences permettant d’élargir son champ de jeu est essentiel.<br>
                            Parce que être comédien demande un investissement important pour garder son profil à jour, nous souhaitons que nos stages soient financés uniquement par les droits à la formation pour lesquels tu cotises en travaillant.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php
    $option_logo_footer = get_field('option_logo_footer', 'option');
    $option_logo_footer_array = get_custom_thumb($option_logo_footer, 'full');
?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?= get_site_url(); ?>">
                            <img src="<?= $option_logo_footer_array['url']; ?>" class="logo-footer" alt="<?= $option_logo_footer_array['alt']; ?>">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <p>Accès Rapide</p>
                        <?= wp_nav_menu(array(
                            'menu'				=> "menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'		=> "",
                            'container_class'	=> "menu",// (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        )); ?>
                    </div>
                    <div class="col-sm-3">
                        <p>Liens utiles</p>
                        <?= wp_nav_menu(array(
                            'menu'				=> "footer", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'		=> "",
                            'container_class'	=> "menu",// (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        )); ?>
                    </div>
                    <div class="col-sm-3">
                        <?php get_template_part('template-parts/general/bloc-social');?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 center">
                        <div class="copyright">
                            Site Web By <a href="https://crescendo-studio.io/" rel="noopener" target="_blank">Crescendo</a> ©<?= date("Y"); ?> Tous droits reservés
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="modal-booking">
            <div class="background-modal"></div>
            <button class="cross-modal"></button>
            <div class="container-form">
                <form action="" id="form-booking">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="intro-modal">
                                    <div class="date">12/08/2025 12:15</div>
                                    <div class="title-modal">
                                        Inscription
                                    </div>
                                    <div class="stage-type">Stage Caméra</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    Statut
                                    <select name="" id="">
                                        <option value="1">Je suis intermittent du spectacle</option>
                                        <option value="2">Je ne suis pas intermittent du spectacle</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Prénom *
                                    <input type="text" placeholder="Votre prénom">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Nom *
                                    <input type="text" placeholder="Votre nom">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Ville *
                                    <input type="text" placeholder="Votre ville">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Email *
                                    <input type="email" placeholder="Votre email">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Téléphone *
                                    <input type="tel" placeholder="Votre téléphone">
                                </label>
                            </div>
                            <input type="hidden" name="stage_id" class="modal-stage-id">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="button">
                                    Valider ma demande d'inscription
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container sub-footer">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/styles/img/afdas.png" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/styles/img/qualiopi.png" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/styles/img/francetravail.png" alt="">
                </div>
            </div>
        </div>


        <?php
        $cookieConsent = $_COOKIE["cookieyes-consent"];

        $searchConsent = strpos($cookieConsent, 'analytics:yes');

        if($searchConsent && get_field('option_ga_code', 'option')):
            echo get_field('option_ga_code', 'option');
        endif;
        ?>




        <?php if(get_field('option_structured_datas', 'option')): ?>
            <?= get_field('option_structured_datas', 'option'); ?>
        <?php endif; ?>

        <?php wp_footer(); ?>
    </body>
</html>