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
    <div class="strate container-image-text " style="background: #ffffff">
        <div class="background-cut bottom" style="background-color: #fef8ef; height: 20%;"></div>
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <img src="https://harmony-builder.code/wp-content/uploads/2025/05/image.jpg" class="image-strate" alt="" width="480" height="650" loading="lazy">
                </div>


                <div class="col-sm-6">
                    <div class="text-content">
                        <h3>Stage <strong>caméra</strong></h3>
                        <p>Parce que développer en permanence des compétences permettant d’élargir son champ de jeu est essentiel.<br>
                            Parce que être comédien demande un investissement important pour garder son profil à jour, nous souhaitons que nos stages soient financés uniquement par les droits à la formation pour lesquels tu cotises en travaillant.</p>


                        <div class="container-buttons">
                            <a href="#" target="" class="button primary ">
                                Découvrir le stage        </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="strate container-image-text " style="background: #fef8ef">
        <div class="container">
            <div class="row">


                <div class="col-sm-6 visible-xs">
                    <img src="https://harmony-builder.code/wp-content/uploads/2025/05/image.jpg" class="image-strate" alt="" loading="lazy">
                </div>

                <div class="col-sm-6">
                    <div class="text-content">
                        <h3>Stage <strong>caméra</strong></h3>
                        <p>Parce que développer en permanence des compétences permettant d’élargir son champ de jeu est essentiel.<br>
                            Parce que être comédien demande un investissement important pour garder son profil à jour, nous souhaitons que nos stages soient financés uniquement par les droits à la formation pour lesquels tu cotises en travaillant.</p>


                        <div class="container-buttons">
                            <a href="#" target="" class="button primary ">
                                Découvrir le stage        </a>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 hidden-xs">
                    <img src="https://harmony-builder.code/wp-content/uploads/2025/05/image.jpg" class="image-strate" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="temoignages-archive white">
        <div class="container strate">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>La parole aux <br/><strong>comédiens</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <iframe width="100%" height="560"
                            src="https://www.youtube.com/embed/Sjb8nhMwtwM"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe width="100%" height="560"
                            src="https://www.youtube.com/embed/Sjb8nhMwtwM"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe width="100%" height="560"
                            src="https://www.youtube.com/embed/Sjb8nhMwtwM"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
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

<?php
get_footer();
?>