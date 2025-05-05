<?php
get_header();
?>
<div class="container-single">
    <?php
    if( have_rows('page') ):
        while ( have_rows('page') ) : the_row();
            get_template_part('template-parts/strates/' . get_row_layout());
        endwhile;
    endif;
    ?>
    <div class="fixed-bar">
        <div class="card-fixed">
            <div class="progress-bar-posttype"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7">
                        <p>Notre stage caméra</p>
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="" class="button">
                            S'inscrire à la prochaine session
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
