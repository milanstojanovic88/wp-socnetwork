<?php
/**
 * Plugin Name: Basic Plugin
 * Author: Milan Stojanovic
 * Description: Job listings
 * Version: 1.0.0
 */

function soc_remove_dashboard_widget() {
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
}

add_action('wp_dashboard_setup', 'soc_remove_dashboard_widget');

function soc_add_google_link (){

    global $wp_admin_bar;

    $wp_admin_bar->add_menu([
        'id' => 'google_analytics',
        'title' => 'Google Analytics',
        'href' => 'http://google.com/analytics'
    ]);
}

add_action('wp_before_admin_bar_render', 'soc_add_google_link');