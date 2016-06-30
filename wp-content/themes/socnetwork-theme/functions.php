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