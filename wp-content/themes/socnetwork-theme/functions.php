<?php

    function socnetworkTheme_resources () {
        wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    }

    add_action('wp_enqueue_scripts', 'socnetworkTheme_resources');