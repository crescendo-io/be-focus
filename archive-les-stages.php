<?php
get_header();

// Variables pour la pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Arguments pour la WP_Query
$args = array(
    'post_type' => 'les-stages',
    'posts_per_page' => -1,
    'post_parent'    => 0
);


// La Query WP
$query = new WP_Query($args);

?>
    <div class="strate-hero middle dark " style="color: #ffffff; background: ">
        <img src="<?= get_site_url(); ?>/wp-content/uploads/2025/05/image-1137.png" class="strate-hero_image" alt="" width="3456" height="1930">
        <div class="strate-hero_inner">
            <h1><em><strong>Nos </strong></em>stages</h1>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="strate marge-small"></div>
    <div class="strate marge-small"></div>
    <div class="strate text-center marge-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <h2><strong>Découvrez</strong> le stage<br/>
                        fait pour vous</h2>
                </div>
            </div>
        </div>
    </div>


    <?php
    if ($query->have_posts()) {

        $i = 1;
        while ($query->have_posts()) {
            $query->the_post();
            $stage_short_desc = get_field('stage_short_desc');
            $thumb_stage = get_the_post_thumbnail_url();
            $i++;
            ?>

            <div class="strate container-image-text" style="background: <?= ($i == 2 || $i == 4) ? "#ffffff" : '#fef8ef'; ?>">
                <?php if($i == 2): ?>
                <div class="background-cut bottom" style="background-color: #fef8ef; height: 20%;"></div>
                <?php endif; ?>
                <?php if($i == 4): ?>
                    <div class="background-cut top" style="background-color: #FEF8EF; height: 20%;"></div>
                <?php endif; ?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 <?= ($i%2 == 1) ? 'visible-xs' : ''; ?>">
                            <?php if($thumb_stage): ?>
                            <img src="<?= $thumb_stage; ?>" class="image-strate" alt="" width="480" height="650" loading="lazy">
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-content">
                                <h3><?= get_the_title(); ?></h3><br/>
                                <?= $stage_short_desc; ?>
                                <div class="container-buttons">
                                    <a href="<?= get_the_permalink(); ?>" target="" class="button primary ">
                                        Découvrir le stage
                                    </a>
                                </div>

                            </div>
                        </div>
                        <?php if($i%2 == 1) :?>
                            <div class="col-sm-6 <?= ($i%2 == 1) ? 'hidden-xs' : ''; ?>">
                                <?php if($thumb_stage): ?>
                                    <img src="<?= $thumb_stage; ?>" class="image-strate" alt="" width="480" height="650" loading="lazy">
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>Aucun Stage à venir.</p>';
    }
    ?>




    <div class="strate marge small" style="background: #fef8ef">
    </div>
    <div class="strate container-text-only center  marge-small" style="background: #fef8ef">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 style="text-align: center;"><strong>Ce qu’ils disent</strong> de nous</h3>

                </div>
            </div>
        </div>
    </div>
    <div class="strate container-slider-quotes  marge-small" style="background: #fef8ef">

        <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-itemsdesk="1" data-itemstablet="1" data-itemsmobile="1">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" id="swiper-wrapper-f1e7cf7d859110e14" aria-live="polite">


                <div class="swiper-slide swiper-slide-active" style="width: 2130px;" role="group" aria-label="1 / 6" data-swiper-slide-index="0">
                    <div class="citation">
                        <div class="text">
                            <p>Stage différent des autres, très bon climat de confiance et de bienveillance.</p>
                        </div>

                        <div class="image-author">
                            <img src="" alt="" loading="lazy">
                        </div>
                        <div class="author-infos">
                            <div class="name">Emma Julien</div>
                            <div class="post">Comédienne</div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide swiper-slide-next" style="width: 2130px;" role="group" aria-label="2 / 6" data-swiper-slide-index="1">
                    <div class="citation">
                        <div class="text">
                            <p>Stage bien pensé qui va dans le sens des comédien·ne·s et de notre métier, avec des directeurs de casting qui savent diriger en étant bienveillants. Points très positifs : l’homogénéité du niveau et des rushs de qualité qui sont réellement exploitables.</p>
                        </div>

                        <div class="image-author">
                            <img src="" alt="" loading="lazy">
                        </div>
                        <div class="author-infos">
                            <div class="name">Laurène Thomas</div>
                            <div class="post">Comédienne</div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide" style="width: 2130px;" role="group" aria-label="3 / 6" data-swiper-slide-index="2">
                    <div class="citation">
                        <div class="text">
                            <p>Extrêmement satisfait du stage, le groupe de travail était remarquable. Le niveau était homogène et de très grande qualité. Une bienveillance à toute épreuve de la part des organisateurs, des intervenants et des stagiaires. Je repars avec des outils, des connaissances, des matériaux utilisables et surtout de la joie. Une envie : recommencer tout de suite, avec le même groupe !</p>
                        </div>

                        <div class="image-author">
                            <img src="" alt="" loading="lazy">
                        </div>
                        <div class="author-infos">
                            <div class="name">Loïc Carcassès</div>
                            <div class="post">Comédien</div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide" style="width: 2130px;" role="group" aria-label="4 / 6" data-swiper-slide-index="3">
                    <div class="citation">
                        <div class="text">
                            <p>Le format, les participants, les intervenants et les outils proposés font de ce stage un moment très précieux pour avancer dans ce métier de l’image.</p>
                        </div>

                        <div class="image-author">
                            <img src="" alt="" loading="lazy">
                        </div>
                        <div class="author-infos">
                            <div class="name">Victoire Goupil</div>
                            <div class="post">Comédienne</div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide" style="width: 2130px;" role="group" aria-label="5 / 6" data-swiper-slide-index="4">
                    <div class="citation">
                        <div class="text">
                            <p>Très agréablement surpris par la précision et la qualité de l’offre qui cible parfaitement les réels besoins. Garder cet esprit et ces stages en petits groupes. Merci, et à très vite !</p>
                        </div>

                        <div class="image-author">
                            <img src="" alt="" loading="lazy">
                        </div>
                        <div class="author-infos">
                            <div class="name">Paul Luneau</div>
                            <div class="post">Comédien</div>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 2130px;">
                    <div class="citation">
                        <div class="text">
                            <p>Excellente formation ! Très bonne organisation. Pertinence des modules et très bons intervenants.</p>
                        </div>

                        <div class="image-author">
                            <img src="" alt="" loading="lazy">
                        </div>
                        <div class="author-infos">
                            <div class="name">Valentin Fruitier</div>
                            <div class="post">Comédien</div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-f1e7cf7d859110e14"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-f1e7cf7d859110e14"></div>
            <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>


            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
    <div class="strate marge small" style="background: #fef8ef">
    </div>




<?php
get_footer();
?>