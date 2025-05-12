<?php
get_header();

// Variables pour la pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Arguments pour la WP_Query
$args = array(
    'post_type' => 'les-stages',
    'posts_per_page' => -1,
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
    <div class="container strate text-center marge-small">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h2><strong>Découvrez</strong> le stage<br/>
                    fait pour vous</h2>
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




    <div class="temoignages-archive white">
        <div class="container strate">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>La parole aux <br/><strong>comédiens</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <?= get_field("option_temoignage_1", 'option'); ?>
                </div>
                <div class="col-sm-4">
                    <?= get_field("option_temoignage_2", 'option'); ?>
                </div>
                <div class="col-sm-4">
                    <?= get_field("option_temoignage_3", 'option'); ?>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
?>