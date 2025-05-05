<?php
get_header();

// Variables pour la pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Arguments pour la WP_Query
$args = array(
    'post_type' => 'articles',
    'posts_per_page' => 20,
    'paged' => $paged,
    'tax_query' => array(
        'relation' => 'AND',
    ),
);


// La Query WP
$galerie_query = new WP_Query($args);

?>
    <div class="strate-hero middle dark " style="color: #ffffff; background: ">
        <img src="https://harmony-builder.code/wp-content/uploads/2025/05/image-1137.png" class="strate-hero_image" alt="" width="3456" height="1930">
        <div class="strate-hero_inner">
            <h1><em><strong>Agenda </strong></em></h1>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="strate marge-small"></div>
    <div class="strate marge-small"></div>
    <div class="container strate text-center marge-small">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h2><strong>Découvrez</strong> les stages<br/>
                    à venir</h2>
            </div>
        </div>
    </div>

<?php
$today = date('Y-m-d H:i:s');; // format Ymd, standard pour les dates ACF
$args = [
    'post_type'      => 'agenda',
    'posts_per_page' => -1,
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
    while ($query->have_posts()) {
        $query->the_post(); ?>

            <div class="card-agenda">
                <div class="title-event">
                    <?= get_the_title(); ?>
                </div>
            </div>

        <?php
    }
    wp_reset_postdata();
} else {
    echo '<p>Aucun événement à venir.</p>';
}
?>


<?php
get_footer();
?>