<?php

    function socnetworkTheme_resources () {
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');
    }

    add_action('wp_enqueue_scripts', 'socnetworkTheme_resources');



    // Customize excerpt word count length

    function custom_excerpt_length() {
        return 100;
    }

    add_filter('excerpt_length', 'custom_excerpt_length');



    function socnetworkTheme_setup() {

        // Nav menus
        register_nav_menus([
            'primary' => __( 'Primary Menu'),
            'footer' => __( 'Footer Menu')
        ]);

        //Featured image support
        add_theme_support('post-thumbnails');

        // Post format support
        add_theme_support('post-formats', ['aside', 'gallery', 'link']);

    }

    add_action('after_setup_theme', 'socnetworkTheme_setup');

    function custom_widgets_init () {
        // Sidebars
        register_sidebar([
            'name' => 'Right Side Sidebar',
            'id' => 'right_side_sidebar',
            'before_widget' => '<div class="col-md-3">',
            'after_widget' => '</div>'
        ]);
    }

    add_action('widgets_init', 'custom_widgets_init');

    function Socnetwork_customize_register ($wp_customize) {
         $wp_customize->add_setting('soc_link_color', [
            'default' => '#337ab7',
             'transport' => 'refresh'
         ]);

        $wp_customize->add_section('soc_standard_colors', [
           'title' => __('Standard Colors', 'Socnetwork'),
            'priority' => 30
        ]);

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'soc_link_color_control', [
            'label' => __('Link Color', 'Socnetwork'),
            'section' => 'soc_standard_colors',
            'settings' => 'soc_link_color'
        ]));
    }

    add_action('customize_register', 'Socnetwork_customize_register');

    function Socnetwork_customize_css () {
        ?>

        <style type="text/css">
            a:link, a:visited {
                color: <?php echo get_theme_mod('soc_link_color'); ?>
            }
        </style>

        <?php
    }

    add_action('wp_head', 'Socnetwork_customize_css');



    // Login redirection
    function redirect_login_page() {
        $login_page  = home_url( '/login/' );
        $page_viewed = basename($_SERVER['REQUEST_URI']);

        if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
            wp_redirect($login_page);
            exit;
        }
    }
    add_action('init','redirect_login_page');


    // Login verrify and errors
    function login_failed() {
        $login_page  = home_url( '/login/' );
        wp_redirect( $login_page . '?login=failed' );
        exit;
    }
    add_action( 'wp_login_failed', 'login_failed' );

    function verify_username_password( $user, $username, $password ) {
        $login_page  = home_url( '/login/' );
        if( $username == "" || $password == "" ) {
            wp_redirect( $login_page . "?login=empty" );
            exit;
        }
    }
    add_filter( 'authenticate', 'verify_username_password', 1, 3);

    //logout redirect
    function logout_page() {
        $login_page  = home_url( '/' );
        wp_redirect( $login_page . "?login=false" );
        exit;
    }
    add_action('wp_logout','logout_page');


//    // Class to images in gallery
//    function WPTime_add_custom_class_to_all_images($content){
//        $my_custom_class = "img-responsive img-rounded";
//        $add_class = str_replace('<img class="', '<img class="'.$my_custom_class.' ', $content);
//        return $add_class;
//    }
//    add_filter('the_content', 'WPTime_add_custom_class_to_all_images');