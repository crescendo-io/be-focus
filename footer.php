<?php

if(!is_front_page()): ?>

    <?php if(!is_single()): ?>

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
                                <p><img decoding="async" class="alignnone size-full wp-image-370 aligncenter" src="<?= get_site_url(); ?>/wp-content/uploads/2025/05/image-1156.png" alt="" width="78" height="78"></p>
                                <p style="text-align: center;"><strong>Exigence</strong><br>
                                    Nous privilégions la qualité plutôt que la quantité en proposant des groupes de formation à taille  humaine,  animés  autour  d’objectifs individualisés.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container-picto">
                            <div class="picto-description">
                                <p><img decoding="async" class="alignnone size-full wp-image-370 aligncenter" src="<?= get_site_url(); ?>/wp-content/uploads/2025/05/image-1156.png" alt="" width="78" height="78"></p>
                                <p style="text-align: center;"><strong>Transparence</strong><br>
                                    Nous partageons une vision réaliste du marché, afin de vous faire comprendre les rouages du métier et vous permettre de professionnaliser votre approche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="container-picto">
                            <div class="picto-description">
                                <p><img decoding="async" class="alignnone size-full wp-image-370 aligncenter" src="<?= get_site_url(); ?>/wp-content/uploads/2025/05/image-1156.png" alt="" width="78" height="78"></p>
                                <p style="text-align: center;"><strong>Considération</strong><br>
                                    Nous avons à cœur de respecter et de prendre soin des comédiens à travers un cadre de travail sécurisant et réellement centré sur leurs besoins.</p>
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
                    <img src="<?= get_site_url(); ?>/wp-content/uploads/2025/05/image-1144.png" class="image-strate" alt="" width="613" height="585" loading="lazy">
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

<?php if(is_post_type_archive('les-stages')): ?>
<div class="strate container-accordeon white" style="background: #000000">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordeon">
                    <div class="accordeon-item">
                        <div class="accordeon-item-title">
                            <p style="font-size: 22px;"><strong>Accès handicap</strong></p>
                        </div>
                        <div class="accordeon-item-text">
                            <p>Si le demandeur est en situation d’handicap, prendre contact pour l’acceptabilité à cette formation.&nbsp;Le référent pédagogique, administratif et sur la situation d’handicap est Jérémie Edery :&nbsp;<a href="mailto:contact@befocus.fr" style="color:#FFF;">contact@befocus.fr</a>&nbsp;/ 09 86 40 02 41</p>
                        </div>
                    </div>

                    <div class="accordeon-item">
                        <div class="accordeon-item-title">
                            <p style="font-size: 22px;"><strong>Indicateurs de satisfaction</strong></p>
                        </div>
                        <div class="accordeon-item-text">
                            <p>Période du 1er janvier 2024 au 20 mars 2025 :<br>
                                Nombre total de sessions : 7<br>
                                Nombre moyen de stagiaires / session : 9<br>
                                Nombre total de stagiaires : 62<br>
                                Taux de satisfaction : 98,08%<br>
                                Taux de retour d’enquête : 100%<br>
                                Taux d’abandon : 0%</p>
                        </div>
                    </div>

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
                    <div class="success">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="intro-modal">
                                        <div class="title-modal">
                                            Votre réservation a bien été reçue,<br/>
                                            <strong>Merci pour votre confiance.</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid form-resa">
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
                                    <select name="status" id="">
                                        <option value="1">Je suis intermittent du spectacle</option>
                                        <option value="2">Je ne suis pas intermittent du spectacle</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Prénom *
                                    <input type="text" name="firstname" required placeholder="Votre prénom">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Nom *
                                    <input type="text" name="lastname" required placeholder="Votre nom">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Ville *
                                    <input type="text" name="city" required placeholder="Votre ville">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Email *
                                    <input type="email" name="email" required placeholder="Votre email">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Téléphone *
                                    <input type="tel" name="phone" required placeholder="Votre téléphone">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label for="">
                                    Être vous en situation de handicap ?
                                    <p style="font-size:10px; font-weight: 400">Si oui, contactez-nous pour que nous puissions organiser ensemble les modalités d'accueil adaptées.</p>

                                    <select name="handicap" id="">
                                        <option value="1">Non</option>
                                        <option value="2">Oui</option>
                                    </select>
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

        <div class="modal-contact">
            <div class="background-modal"></div>
            <button class="cross-modal"></button>
            <div class="container-form">
                <form action="" id="form-contact">
                    <div class="success">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="intro-modal">
                                        <div class="title-modal">
                                            Votre message a bien été envoyé.<br/>
                                            <strong>Merci pour votre confiance.</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid form-resa">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="intro-modal">
                                    <div class="title-modal">
                                        Demande de
                                    </div>
                                    <div class="stage-type">Contact</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    Statut
                                    <select name="status" id="">
                                        <option value="1">Demande de contact</option>
                                        <option value="2">Demande de réclamation</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <label>
                                    Prénom *
                                    <input type="text" name="firstname" required placeholder="Votre prénom">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Nom *
                                    <input type="text" name="lastname" required placeholder="Votre nom">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Email *
                                    <input type="email" name="email" required placeholder="Votre email">
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    Téléphone *
                                    <input type="tel" name="phone" required placeholder="Votre téléphone">
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <label>
                                    Votre message *
                                    <textarea name="message" required placeholder="Votre message"></textarea>
                                </label>
                            </div>
                            <input type="hidden" name="stage_id" class="modal-stage-id">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="button">
                                    Envoyer mon message
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