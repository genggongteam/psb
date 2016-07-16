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
date_default_timezone_set('Asia/Jakarta');
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

function kota_taxonomy() {

    $labels = array(
        'name' => _x('Kota', 'Nama Kota', 'santribaru'),
        'singular_name' => _x('Kota', 'Kota Singular Name', 'santribaru'),
        'menu_name' => __('Kota', 'santribaru'),
        'all_items' => __('Lihat Semua', 'santribaru'),
        'parent_item' => __('Parent Item', 'santribaru'),
        'parent_item_colon' => __('Parent Item:', 'santribaru'),
        'new_item_name' => __('Nama Kota Baru', 'santribaru'),
        'add_new_item' => __('Tambah Kota', 'santribaru'),
        'edit_item' => __('Edit Kota', 'santribaru'),
        'update_item' => __('Ubah Kota', 'santribaru'),
        'view_item' => __('Lihat Kota', 'santribaru'),
        'separate_items_with_commas' => __('Separate items with commas', 'santribaru'),
        'add_or_remove_items' => __('Tambah atau Hapus Kota', 'santribaru'),
        'choose_from_most_used' => __('Pilih dari yang sering digunakan', 'santribaru'),
        'items_list' => __('Daftar Kota', 'santribaru'),
        'items_list_navigation' => __('Items list navigation', 'santribaru'),
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

add_action('init', 'kota_taxonomy', 0);

/**
 * ============================================
 * --- Kelengkapan Data Taxonomy
 * ============================================
 * */

function status_taxonomy() {

    $labels = array(
        'name' => _x('Status', 'Nama Status', 'santribaru'),
        'singular_name' => _x('Status', 'Status Singular Name', 'santribaru'),
        'menu_name' => __('Status', 'santribaru'),
        'all_items' => __('Lihat Semua', 'santribaru'),
        'parent_item' => __('Parent Item', 'santribaru'),
        'parent_item_colon' => __('Parent Item:', 'santribaru'),
        'new_item_name' => __('Nama Status Baru', 'santribaru'),
        'add_new_item' => __('Tambah Status', 'santribaru'),
        'edit_item' => __('Edit Status', 'santribaru'),
        'update_item' => __('Ubah Status', 'santribaru'),
        'view_item' => __('Lihat Status', 'santribaru'),
        'separate_items_with_commas' => __('Separate items with commas', 'santribaru'),
        'add_or_remove_items' => __('Tambah atau Hapus Status', 'santribaru'),
        'choose_from_most_used' => __('Pilih dari yang sering digunakan', 'santribaru'),
        'items_list' => __('Daftar Status', 'santribaru'),
        'items_list_navigation' => __('Items list navigation', 'santribaru'),
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
    register_taxonomy('status', array('santri_baru'), $args);
}

add_action('init', 'status_taxonomy', 0);
/**
 * ============================================
 * --- Provinsi Santri Taxonomy
 * ============================================
 * */

function provinsi_taxonomy() {

    $labels = array(
        'name' => _x('Provinsi', 'Nama Provinsi', 'santribaru'),
        'singular_name' => _x('Provinsi', 'Provinsi Singular Name', 'santribaru'),
        'menu_name' => __('Provinsi', 'santribaru'),
        'all_items' => __('Lihat Semua', 'santribaru'),
        'parent_item' => __('Parent Item', 'santribaru'),
        'parent_item_colon' => __('Parent Item:', 'santribaru'),
        'new_item_name' => __('Nama Provinsi Baru', 'santribaru'),
        'add_new_item' => __('Tambah Provinsi', 'santribaru'),
        'edit_item' => __('Edit Provinsi', 'santribaru'),
        'update_item' => __('Ubah Provinsi', 'santribaru'),
        'view_item' => __('Lihat Provinsi', 'santribaru'),
        'separate_items_with_commas' => __('Separate items with commas', 'santribaru'),
        'add_or_remove_items' => __('Tambah atau Hapus Provinsi', 'santribaru'),
        'choose_from_most_used' => __('Pilih dari yang sering digunakan', 'santribaru'),
        'items_list' => __('Daftar Provinsi', 'santribaru'),
        'items_list_navigation' => __('Items list navigation', 'santribaru'),
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
    register_taxonomy('provinsi', array('santri_baru'), $args);
}

add_action('init', 'provinsi_taxonomy', 0);
/**
 * ============================================
 * --- Angkatan(Tahun Masuk Pesantren) Taxonomy
 * ============================================
 * */

function angkatan_taxonomy() {

    $labels = array(
        'name' => _x('Tahun Masuk', 'Tahun Masuk', 'santribaru'),
        'singular_name' => _x('Tahun Masuk', 'Tahun Masuk Singular Name', 'santribaru'),
        'menu_name' => __('Tahun Masuk', 'santribaru'),
        'all_items' => __('Lihat Semua', 'santribaru'),
        'parent_item' => __('Parent Item', 'santribaru'),
        'parent_item_colon' => __('Parent Item:', 'santribaru'),
        'new_item_name' => __('Tahun Masuk', 'santribaru'),
        'add_new_item' => __('Tambah Tahun Masuk', 'santribaru'),
        'edit_item' => __('Edit Tahun Masuk', 'santribaru'),
        'update_item' => __('Ubah Tahun Masuk', 'santribaru'),
        'view_item' => __('Lihat Tahun Masuk', 'santribaru'),
        'separate_items_with_commas' => __('Separate items with commas', 'santribaru'),
        'add_or_remove_items' => __('Tambah atau Hapus Kota', 'santribaru'),
        'choose_from_most_used' => __('Pilih dari yang sering digunakan', 'santribaru'),
        'items_list' => __('Daftar Tahun Masuk', 'santribaru'),
        'items_list_navigation' => __('Items list navigation', 'santribaru'),
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
    register_taxonomy('angkatan', array('santri_baru'), $args);
}

add_action('init', 'angkatan_taxonomy', 0);

/**
 * ============================================
 * --- Daftar Lembaga Taxonomy
 * ============================================
 * */

function lembaga_taxonomy() {

    $labels = array(
        'name' => _x('Lembaga', 'Nama Lembaga', 'santribaru'),
        'singular_name' => _x('Lembaga', 'Lembaga Singular Name', 'santribaru'),
        'menu_name' => __('Lembaga', 'santribaru'),
        'all_items' => __('Lihat Semua', 'santribaru'),
        'parent_item' => __('Parent Item', 'santribaru'),
        'parent_item_colon' => __('Parent Item:', 'santribaru'),
        'new_item_name' => __('Nama Lembaga Baru', 'santribaru'),
        'add_new_item' => __('Tambah Lembaga', 'santribaru'),
        'edit_item' => __('Edit Lembaga', 'santribaru'),
        'update_item' => __('Ubah Lembaga', 'santribaru'),
        'view_item' => __('Lihat Lembaga', 'santribaru'),
        'separate_items_with_commas' => __('Separate items with commas', 'santribaru'),
        'add_or_remove_items' => __('Tambah atau Hapus Lembaga', 'santribaru'),
        'choose_from_most_used' => __('Pilih dari yang sering digunakan', 'santribaru'),
        'items_list' => __('Daftar Lembaga', 'santribaru'),
        'items_list_navigation' => __('Items list navigation', 'santribaru'),
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
    register_taxonomy('lembaga', array('santri_baru'), $args);
}

add_action('init', 'lembaga_taxonomy', 0);

/**
 * ============================================
 * --- Daftar Asrama Pondok Taxonomy
 * ============================================
 * */

function pondok_taxonomy() {

    $labels = array(
        'name' => _x('Pondok', 'Nama Pondok', 'santribaru'),
        'singular_name' => _x('Pondok', 'Pondok Singular Name', 'santribaru'),
        'menu_name' => __('Pondok', 'santribaru'),
        'all_items' => __('Lihat Semua', 'santribaru'),
        'parent_item' => __('Parent Item', 'santribaru'),
        'parent_item_colon' => __('Parent Item:', 'santribaru'),
        'new_item_name' => __('Nama Pondok Baru', 'santribaru'),
        'add_new_item' => __('Tambah Pondok', 'santribaru'),
        'edit_item' => __('Edit Pondok', 'santribaru'),
        'update_item' => __('Ubah Pondok', 'santribaru'),
        'view_item' => __('Lihat Pondok', 'santribaru'),
        'separate_items_with_commas' => __('Separate items with commas', 'santribaru'),
        'add_or_remove_items' => __('Tambah atau Hapus Pondok', 'santribaru'),
        'choose_from_most_used' => __('Pilih dari yang sering digunakan', 'santribaru'),
        'items_list' => __('Daftar Pondok', 'santribaru'),
        'items_list_navigation' => __('Items list navigation', 'santribaru'),
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
    register_taxonomy('pondok', array('santri_baru'), $args);
}

add_action('init', 'pondok_taxonomy', 0);

/**
 * ============================================
 * --- Metabox Form
 * ============================================
 * */

// Disable No Induk Field
// function disable_noinduk_field( $field ) {
    
//     if( $field['value'] ) {
        
//         $field['disabled'] = true;
        
//     }

//     return $field;
    
// }
// add_filter('acf/prepare_field/name=no_induk_auto', 'disable_noinduk_field');

// No Induk Generator
function nomer_induk( $field ) {
        
     $myno_induk = date("Y").date("m").wp_count_posts('santri_baru')->publish+1;
        
     $field['default_value'] = $myno_induk;
     return $field;
         
}
add_filter('acf/load_field/name=no_induk_auto', 'nomer_induk');
// Tanggal Daftar
function tanggal_daftar( $field ) {
        
     $tgl_dft = date("d")."/".date("m")."/".date("Y");      
     $field['default_value'] = $tgl_dft;
     return $field;
         
}

add_filter('acf/load_field/name=tgl_daftar', 'tanggal_daftar');

include 'mb-projects.php';

/**
 * ============================================
 * --- Indonesian Date
 * ============================================
 * */

function todayID(){
date_default_timezone_set('id_ID'); 
//Array Hari
$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $array_hari[date("N")];

//Format Tanggal
$tanggal = date ("j");

//Array Bulan
$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober","November","Desember");
$bulan = $array_bulan[date("n")];

//Format Tahun
$tahun = date("Y");

//Menampilkan hari dan tanggal
echo $tanggal." ".$bulan." ".$tahun;
}