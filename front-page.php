<?php
get_header();

?>

    <!-- Slider main container -->


<?php if( have_rows('page') ):

    $i = 0;
    while ( have_rows('page') ) : the_row(); $i++;
        get_template_part('template-parts/strates/' . get_row_layout());

        if($i == 5){ ?>

            <div class="strate next-sessions">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center white">
                            <h2><strong>Nos prochaines</strong> <br/>sessions</h2>
                        </div>
                    </div>

                    <?php
                    $today = date('Y-m-d H:i:s');; // format Ymd, standard pour les dates ACF
                    $args = [
                        'post_type'      => 'agenda',
                        'posts_per_page' => 2,
                        'post_status'    => 'publish',
                        'meta_key'       => 'agenda_date',
                        'orderby'        => 'meta_value',
                        'order'          => 'ASC',
                        'meta_query'     => [
                            [
                                'key'     => 'agenda_date',
                                'value'   => $today,
                                'compare' => '>',
                                'type'    => 'DATETIME',
                            ],
                        ],
                    ];

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        $nombre = 1;
                        while ($query->have_posts()) {

                            $nombre++;

                            $query->the_post();

                            $agenda_type = get_field("agenda_type");

                            $image          = get_field('agenda_image');
                            $imageArray     = get_custom_thumb($image, 'large');

                            ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-session-fontpage">
                                        <div class="row">
                                            <div class="col-sm-6 <?= ($nombre%2 == 1)? 'visible-xs' : ''?>">
                                                <?php if($imageArray['url']): ?>
                                                <img src="<?= $imageArray['url']; ?>" alt="<?= get_the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="container-info-session">
                                                    <div class="title-session"><?= get_the_title(); ?></div>
                                                    <div class="date-session"><?= get_field('agenda_date'); ?></div>
                                                    <div class="intervenent-session">
                                                        <?= get_field('agenda_intervenant'); ?>
                                                        <a href="#" class="button open-modal">Réserver le stage</a>
                                                        <a href="<?= get_the_permalink($agenda_type); ?>" class="button secondary">Découvrir le stage</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php if ($nombre%2 == 1): ?>
                                            <div class="col-sm-6 hidden-xs">
                                                <?php if($imageArray['url']): ?>
                                                    <img src="<?= $imageArray['url']; ?>" alt="<?= get_the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo '<p>Aucun événement à venir.</p>';
                            }
                            ?>
                        <?php } ?>
                </div>
            </div>

        <?php
    endwhile;
endif; ?>


<?php get_footer();
