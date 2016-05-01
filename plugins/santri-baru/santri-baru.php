<?php

/*
  Plugin Name: Santri Baru APP
  Description: Core System for Santri Baru APP. Build with love by Rio Bahtiar
  Version: 1.0
  Author: Rio Bahtiar
  Author URI: http://rio.my.id
 */



/**
 * ============================================
 * --- All Include and Configurations
 * ============================================
 * */
// Include ACF
include 'acf-addons/acf.php';

// Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');
// Disable all plugin updates
add_filter( 'auto_update_plugin', '__return_false' );
// Disable all Themes updates
add_filter( 'auto_update_theme', '__return_false' );




/**
 * ============================================
 * --- Enqueque Scrips
 * ============================================
 * */
function load_custom_wp_admin_style() {
    wp_register_style('custom_wp_admin_css', plugin_dir_url(__FILE__) . 'custom-style.css', false, '1.0.0');
    wp_enqueue_style('custom_wp_admin_css');
}

add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/**
 * ============================================
 * --- Custom Post Type 
 * ============================================
 * */
add_action('init', 'cpt_santri_baru');

function cpt_santri_baru() {
    register_post_type('santri_baru', array(
        'labels' => array(
            'name' => __('Santri Baru'),
            'singular_name' => __('Santri Baru'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'santri'),
        'menu_icon' => 'dashicons-analytics',
        'supports' => array('title', 'revisions'),
				'query_var' => true,
				'capability_type' => 'post',
        )
    );
    flush_rewrite_rules();
}


add_action('init', 'init_remove_santri_baru_support');

function init_remove_santri_baru_support() {
    $post_type = 'santri_baru';
    remove_post_type_support($post_type, 'editor');
}

function form_title_santri_baru($title) {
    $screen = get_current_screen();

    if ('santri_baru' == $screen->post_type) {
        $title = 'Nama Lengkap Santri';
    }

    return $title;
}

add_filter('enter_title_here', 'form_title_santri_baru');


/**
 * ============================================
 * --- Kota Santri Taxonomy
 * ============================================
 * */

function kota_santri_taxonomy() {

    $labels = array(
        'name' => _x('Kota', 'Nama Kota', 'text_domain'),
        'singular_name' => _x('Kota', 'Kota Singular Name', 'text_domain'),
        'menu_name' => __('Kota', 'text_domain'),
        'all_items' => __('Lihat Semua', 'text_domain'),
        'parent_item' => __('Parent Item', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'new_item_name' => __('Nama Kota Baru', 'text_domain'),
        'add_new_item' => __('Tambah Kota', 'text_domain'),
        'edit_item' => __('Edit Kota', 'text_domain'),
        'update_item' => __('Ubah Kota', 'text_domain'),
        'view_item' => __('Lihat Kota', 'text_domain'),
        'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
        'add_or_remove_items' => __('Tambah atau Hapus Kota', 'text_domain'),
        'choose_from_most_used' => __('Pilih dari yang sering digunakan', 'text_domain'),
        'items_list' => __('Daftar Kota', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('kota', array('santri_baru'), $args);
}

add_action('init', 'kota_santri_taxonomy', 0);

/**
 * ============================================
 * --- Metabox Form
 * ============================================
 * */
include 'mb-projects.php';
