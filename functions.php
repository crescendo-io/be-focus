<?php


function add_hreflang_tags() {
    // Définir l'URL de la version par défaut (x-default) du site
    $default_url = get_home_url(); // ou mettre une URL spécifique

    // Obtenir l'URL actuelle
    $current_url = home_url( add_query_arg( NULL, NULL ) );

    // Si la langue est française
    if ( get_locale() == 'fr_FR' ) {
        echo '<link rel="alternate" hreflang="fr" href="' . esc_url( $current_url ) . '" />' . "\n";
    }

    // Pour la version x-default
    echo '<link rel="alternate" hreflang="x-default" href="' . esc_url( $default_url ) . '" />' . "\n";
}
add_action( 'wp_head', 'add_hreflang_tags' );



function add_self_canonical_tag() {
    // Obtenir l'URL de la page actuelle
    $current_url = home_url( add_query_arg( NULL, NULL ) );

    // Ajouter la balise canonical
    echo '<link rel="canonical" href="' . esc_url( $current_url ) . '" />' . "\n";
}
add_action( 'wp_head', 'add_self_canonical_tag' );

add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
function wpm_enqueue_styles(){
    //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/styles/theme.css' );
    wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/styles/lightbox.css', array(), filemtime(get_template_directory() . '/styles/theme.css'));
    wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/styles/theme.css', array(), filemtime(get_template_directory() . '/styles/theme.css'));
    wp_enqueue_script(
        'beforeafter', // Identifiant unique du script
        get_stylesheet_directory_uri() . '/js/beforeafter.js', // URL du fichier JS
        array( 'jquery' ), // Dépendances (si besoin, ici 'jquery')
        null, // Version du script (null pour désactiver la gestion des versions)
        true // Charger dans le footer (true) ou dans le header (false)
    );

    wp_enqueue_script(
        'script', // Identifiant unique du script
        get_stylesheet_directory_uri() . '/js/script.js', // URL du fichier JS
        array( 'jquery' ), // Dépendances (si besoin, ici 'jquery')
        null, // Version du script (null pour désactiver la gestion des versions)
        true // Charger dans le footer (true) ou dans le header (false)
    );

    wp_localize_script('script', 'my_ajax', [
        'url' => admin_url('admin-ajax.php')
    ]);
}


function egp_custom_post_type() {
    $labels = array(
        'name'                => __( 'Agenda', 'lsd_lang'),
        'singular_name'       => __( 'Agenda', 'lsd_lang'),
        'menu_name'           => __( 'Agenda', 'lsd_lang'),
        'all_items'           => __( 'Tous les types de Agenda', 'lsd_lang'),
        'view_item'           => __( 'Voir tous les types de Agenda', 'lsd_lang'),
        'add_new_item'        => __( 'Ajouter une Agenda', 'lsd_lang'),
        'add_new'             => __( 'Ajouter', 'lsd_lang'),
        'edit_item'           => __( 'Editer un type la Agenda', 'lsd_lang'),
        'update_item'         => __( 'Modifier un type la Agenda', 'lsd_lang'),
        'not_found'           => __( 'Non trouvée', 'lsd_lang'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille', 'lsd_lang'),
    );

    $args = array(
        'label'               => __( 'Types de Agenda', 'lsd_lang'),
        'description'         => __( 'Tous les Agenda', 'lsd_lang'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'author', 'revisions', 'custom-fields' ),
        'show_in_rest'        => false,
        'show_ui'             => true,
        'menu_icon'           => 'dashicons-admin-home',
        'hierarchical'        => true,
        'public'              => true,
        'publicly_queryable' => true,
        'has_archive'         => 'agenda',
        'rewrite' => true
    );

    register_post_type( 'agenda', $args );

    // Product


    $labels = array(
        'name'                => __( 'Stages', 'lsd_lang'),
        'singular_name'       => __( 'Stage', 'lsd_lang'),
        'menu_name'           => __( 'Stages', 'lsd_lang'),
        'all_items'           => __( 'Tous les types de Stages', 'lsd_lang'),
        'view_item'           => __( 'Voir tous les types de Stages', 'lsd_lang'),
        'add_new_item'        => __( 'Ajouter un Stage', 'lsd_lang'),
        'add_new'             => __( 'Ajouter', 'lsd_lang'),
        'edit_item'           => __( 'Editer un type Stages', 'lsd_lang'),
        'update_item'         => __( 'Modifier un type Stages', 'lsd_lang'),
        'not_found'           => __( 'Non trouvée', 'lsd_lang'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille', 'lsd_lang'),
    );

    $args = array(
        'label'               => __( 'Stages', 'lsd_lang'),
        'description'         => __( 'Stages', 'lsd_lang'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'author', 'revisions', 'custom-fields', 'thumbnail'),
        'show_in_rest'        => false,
        'menu_icon'           => 'dashicons-admin-home',
        'hierarchical'        => true,
        'public'              => true,
        'publicly_queryable' => true,
        'has_archive'         => true,
        'rewrite' => array(
            'with_front' => true,
        )
    );

    register_post_type( 'les-stages', $args );

}

add_action( 'init', 'egp_custom_post_type', 0 );





function egp_taxonomy() {
    register_taxonomy(
        'typo_client',
        'galerie',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __( 'Marques', 'lsd_lang'),
            'query_var' => true
        )
    );

    register_taxonomy(
        'typo_product',
        'galerie',
        array(
            'hierarchical' => true,
            'show_admin_column' => true,
            'label' => __( 'Prestations', 'lsd_lang'),
            'query_var' => true
        )
    );

}
add_action( 'init', 'egp_taxonomy');


add_image_size('600_600', 600, 600, true);


// Hide native post type
function hide_post_type_from_admin_menu() {
    // Pour masquer les articles (post)
    remove_menu_page('edit.php');
    // Pour masquer les pages
    // remove_menu_page('edit.php?post_type=page');
}
add_action('admin_menu', 'hide_post_type_from_admin_menu');

function hide_post_type_from_frontend($args, $post_type) {
    if ($post_type === 'post') {  // Remplacez 'post' par le post type que vous voulez masquer
        $args['public'] = false;  // Rend le post type privé
        $args['publicly_queryable'] = false;  // Empêche les requêtes sur le front-end
        $args['show_ui'] = false;  // Masque du menu d'administration
        $args['exclude_from_search'] = true;  // Exclut des résultats de recherche
    }
    return $args;
}
add_filter('register_post_type_args', 'hide_post_type_from_frontend', 10, 2);


function migrate_products_to_pages() {
    // Vérifier que la fonction ACF existe
    if ( ! function_exists('get_field') || ! function_exists('update_field') ) {
        return;
    }

    // Récupérer tous les posts de type "product" y compris les brouillons
    $products = new WP_Query( array(
        'post_type' => 'product',
        'posts_per_page' => -1, // Pour tout récupérer
        'post_status' => array('publish', 'draft') // Inclure les brouillons
    ) );

    // Tableau pour stocker les ID des pages créées
    $created_pages = array();

    if ( $products->have_posts() ) {
        while ( $products->have_posts() ) {
            $products->the_post();

            // Récupérer l'ID du produit et son titre
            $product_id = get_the_ID();
            $product_title = get_the_title( $product_id );

            // Vérifier si la page existe déjà
            $existing_page_query = new WP_Query( array(
                'post_type' => 'page',
                'title'     => $product_title,
                'posts_per_page' => 1
            ) );

            if ( $existing_page_query->have_posts() ) {
                // Ajouter un message dans le log si la page existe déjà
                error_log( "La page pour le produit ID: $product_id existe déjà" );
                continue; // Passer au produit suivant
            }

            // Récupérer les champs ACF du produit
            $acf_fields = get_fields( $product_id );

            // Créer une nouvelle page avec le template "Page Produit"
            $new_page_id = wp_insert_post( array(
                'post_title'   => $product_title,
                'post_content' => get_the_content( $product_id ),
                'post_status'  => 'publish', // Mettre en statut 'publish' pour toutes les nouvelles pages
                'post_type'    => 'page',
                'page_template' => 'page-product.php', // Assurez-vous que le template est correct
            ) );

            // Vérifier si la page a bien été créée
            if ( $new_page_id && ! is_wp_error( $new_page_id ) ) {
                // Réassigner les champs ACF à la nouvelle page
                if ( $acf_fields ) {
                    foreach ( $acf_fields as $field_key => $field_value ) {
                        update_field( $field_key, $field_value, $new_page_id );
                    }
                }

                // Ajouter l'ID de la page créée au tableau
                $created_pages[$product_id] = $new_page_id;

                // Ajouter un message dans le log pour chaque page créée
                error_log( "Page créée pour le produit ID: $product_id avec la nouvelle page ID: $new_page_id" );
            } else {
                // Ajouter un message d'erreur dans le log
                error_log( "Erreur lors de la création de la page pour le produit ID: $product_id" );
            }
        }
        // Remettre la requête principale
        wp_reset_postdata();

        // Réaffecter les pages enfants
        foreach ( $created_pages as $product_id => $new_page_id ) {
            // Récupérer l'ID de la page parent (si elle existe)
            $parent_id = get_post_meta( $product_id, '_product_parent_page', true );

            if ( $parent_id && isset( $created_pages[$parent_id] ) ) {
                // Définir la page créée comme enfant de la page parent
                wp_update_post( array(
                    'ID' => $new_page_id,
                    'post_parent' => $created_pages[$parent_id]
                ) );
            }
        }
    } else {
        // Ajouter un message dans le log si aucun produit trouvé
        error_log( "Aucun produit trouvé pour migration" );
    }
}
//add_action( 'init', 'migrate_products_to_pages' );



// Fil d'ariane

function custom_breadcrumb() {
    // Start the breadcrumb with a link to the home page
    if (!is_front_page()) {
        echo '<nav class="breadcrumb">';
        echo '<a href="' . home_url() . '">Accueil</a> ';

        // If we're on a single post, custom post type or page
        if (is_singular()) {
            global $post;
            $post_type = get_post_type_object(get_post_type());

            // If the post type is not 'post', show the post type archive link
            if ($post_type && $post_type->has_archive) {
                echo '<a href="' . get_post_type_archive_link($post_type->name) . '">' . $post_type->labels->name . '</a> ';
            }

            // Get ancestors of the current post to show hierarchy
            $ancestors = array_reverse(get_post_ancestors($post));

            foreach ($ancestors as $ancestor) {
                echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a> ';
            }

            // Finally, the current post title
            echo '<span>' . get_the_title() . '</span>';
        }
        // If we're on a post type archive page
        elseif (is_post_type_archive()) {
            $post_type = get_post_type_object(get_post_type());
            if ($post_type) {
                echo '<span>' . $post_type->labels->name . '</span>';
            }
        }
        // If we're on a category or custom taxonomy archive page
        elseif (is_category() || is_tag() || is_tax()) {
            $term = get_queried_object();
            echo '<span>' . $term->name . '</span>';
        }
        // If we're on an archive page like date, author, etc.
        elseif (is_archive()) {
            if (is_date()) {
                if (is_day()) {
                    echo '<span>' . get_the_date() . '</span>';
                } elseif (is_month()) {
                    echo '<span>' . get_the_date('F Y') . '</span>';
                } elseif (is_year()) {
                    echo '<span>' . get_the_date('Y') . '</span>';
                }
            } elseif (is_author()) {
                echo '<span>' . get_the_author() . '</span>';
            }
        }
        // For 404 pages
        elseif (is_404()) {
            echo '<span>Erreur 404</span>';
        }
    }

    // Close nav tag
    echo '</nav>';
}

add_image_size( 'relsize', 1920, 1080, true );
add_image_size( 'crosslink', 900, 900, true );



use PHPMailer\PHPMailer\PHPMailer;
add_action('phpmailer_init', 'custom_mailjet_smtp');
function custom_mailjet_smtp(PHPMailer $phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'in-v3.mailjet.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 587;
    $phpmailer->Username   = '456ba360d83bb9ec9e665743728ebd34';    // Remplacez par votre clé API
    $phpmailer->Password   = '6e18ab8a5a34801fe3ef527ecc7541f5';  // Remplacez par votre secret
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->From       = 'contact@crescendo-studio.io';
    $phpmailer->FromName   = 'Be Focus';
}


// Traitement de la requête AJAX
add_action('wp_ajax_booking_form_submit', 'traitement_booking_form');
add_action('wp_ajax_nopriv_booking_form_submit', 'traitement_booking_form');

function traitement_booking_form() {
    parse_str($_POST['form_data'], $form_data);
    

    $email = $form_data['email'];
    $firstname = $form_data['firstname'];
    $lastname = $form_data['lastname'];
    $city = $form_data['city'];
    $phone = $form_data['phone'];
    $stage_id = $form_data['stage_id'];
    $status = $form_data['status'];

    if(get_post($stage_id) && $email && $firstname && $lastname && $city && $phone && $stage_id && $status){

        $to = 'bryanvidal01@gmail.com';
        $subject = 'Réservation de stage';
        $message = '
        <html>
        <head>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { width: 100%; max-width: 600px; margin: 0 auto; border: 1px solid #eee; padding: 20px; background-color: #FEF8EF; }
            h2 { color: #FF435A; }
            table { width: 100%; border-collapse: collapse; }
            td { padding: 8px 0; }
            .label { font-weight: bold; width: 150px; }
        </style>
        </head>
        <body>
        <div class="container">
            <img src="'. get_stylesheet_directory_uri() . '/styles/img/banner.jpg" width=100%" alt="">
            <h2>Nouvelle réservation de stage</h2>
            <p>Une nouvelle demande de réservation vient d\'être soumise avec les informations suivantes :</p>
            <table>
            <tr><td class="label">Prénom :</td><td>' . esc_html($firstname) . '</td></tr>
            <tr><td class="label">Nom :</td><td>' . esc_html($lastname) . '</td></tr>
            <tr><td class="label">Email :</td><td>' . esc_html($email) . '</td></tr>
            <tr><td class="label">Téléphone :</td><td>' . esc_html($phone) . '</td></tr>
            <tr><td class="label">Ville :</td><td>' . esc_html($city) . '</td></tr>
            <tr><td class="label">ID du stage :</td><td>' . esc_html(get_the_title($stage_id)) . '</td></tr>
            <tr><td class="label">Date du stage :</td><td>' . get_field('agenda_date', $stage_id) . '</td></tr>
            <tr><td class="label">Intermittent du spectacle :</td><td>' . (($status == 1) ? 'Oui' : 'Non') . '</td></tr>
            </table>
        </div>
        </body>
        </html>';
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $message, $headers);
    }




    wp_send_json_success('Réservation reçue !');
}
