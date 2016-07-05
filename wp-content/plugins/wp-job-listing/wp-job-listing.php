<?php

/**
 * Plugin Name: WP Job Listing
 * Description: Adds simple job listing to website
 * Author: Milan Stojanovic
 * Version: 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function soc_register_post_type(){
    $singular = 'Job Listing';
    $plural = 'Job Listings';

    $labels = [
        'name'                  => $plural,
        'singular_name'         => $singular,
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New ' . $singular,
        'edit'                  => 'Edit',
        'edit_item'             => 'Edit ' . $singular,
        'new_item'              => 'New ' . $singular,
        'view'                  => 'View ' . $singular,
        'view_item'             => 'View ' . $singular,
        'search_item'           => 'Search ' . $plural,
        'parent'                => 'Parent ' . $singular,
        'not_found'             => 'No ' . $plural . ' found',
        'not_found_in_trash'    => 'No ' . $plural . ' in Trash'
    ];



    register_post_type('job', [
        'labels'               => $labels,
        'description'          => '',
        'public'               => true,
        'hierarchical'         => false,
        'exclude_from_search'  => false,
        'publicly_queryable'   => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'show_in_nav_menus'    => true,
        'show_in_admin_bar'    => true,
        'menu_position'        => 6,
        'menu_icon'            => 'dashicons-businessman',
        'capability_type'      => 'post',
//        'capabilities'         => array(),
        'map_meta_cap'         => true,
        'supports'             => [
            'title',
            'editor',
            'author',
            'custom-fields'
        ],
        'has_archive'          => false,
        'rewrite'              => [
            'slug'      => 'jobs',
            'with_font' => true,
            'pages'     => true,
            'feeds'     => false
        ],
        'query_var'            => true,
        'can_export'           => true,
        'delete_with_user'     => false
    ]);
}
add_action('init', 'soc_register_post_type');