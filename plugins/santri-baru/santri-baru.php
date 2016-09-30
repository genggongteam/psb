<?php

/*
  Plugin Name: Santri Baru APP
  Description: Core System for Santri Baru APP. Build with love by Rio Bahtiar
  Version: 1.0
  Author: Rio Bahtiar
  Author URI: http://www.rio.my.id
 */

// Declare Local Time Zone
date_default_timezone_set('Asia/Jakarta');

/**
 * ============================================
 * --- Include All libs
 * ============================================
 * */

// ACF Features
include 'acf-addons/acf.php';
// Metabox Fields
include 'mb-projects.php';
// Custom Post Type
include 'cpt.init.php';


/**
 * ============================================
 * --- ACF Configuration
 * ============================================
 * */


// Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');
// Disable all plugin updates
add_filter('auto_update_plugin', '__return_false');
// Disable all Themes updates
add_filter('auto_update_theme', '__return_false');


/**
 * ============================================
 * --- Enqueque Scrips
 * ============================================
 * */
function load_custom_wp_admin_style()
{
    wp_register_style('custom_wp_admin_css', plugin_dir_url(__FILE__) . 'custom-style.css', false, '1.0.0');
    wp_enqueue_style('custom_wp_admin_css');
}

add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

// Nomer Indux Generator
function nomer_induk($field)
{

    $myno_induk = date("Y") . date("m") . wp_count_posts('santri_baru')->publish + 1;

    $field['default_value'] = $myno_induk;
    return $field;

}

add_filter('acf/load_field/name=no_induk_auto', 'nomer_induk');
// Tanggal Daftar
function tanggal_daftar($field)
{

    $tgl_dft = date("d") . "/" . date("m") . "/" . date("Y");
    $field['default_value'] = $tgl_dft;
    return $field;

}

add_filter('acf/load_field/name=tgl_daftar', 'tanggal_daftar');

/**
 * ============================================
 * --- Indonesian Date
 * ============================================
 * */

function todayID()
{
    date_default_timezone_set('id_ID');
//Array Hari
    $array_hari = array(1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
    $hari = $array_hari[date("N")];

//Format Tanggal
    $tanggal = date("j");

//Array Bulan
    $array_bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    $bulan = $array_bulan[date("n")];

//Format Tahun
    $tahun = date("Y");

//Menampilkan hari dan tanggal
    echo $tanggal . " " . $bulan . " " . $tahun;
}

/**
 * ============================================
 * --- Count Term
 * ============================================
 * */

function countPostByTax($cpt='',$tax='',$terms_slug=''){
    $args = array(
        'post_type' => $cpt,
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => $tax,
                'field'    => 'slug',
                'terms'    => $terms_slug,
            ),
        ),
    );
    $query = new WP_Query( $args );
    $count = $query->found_posts;
    return $count;
}

/**
 * ============================================
 * --- Default Term
 * ============================================
 * */

// Kota
$parent_term = term_exists( 'santri_baru', 'kota' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id']; // get numeric term id
wp_insert_term(
    'Belum ditentukan', // the term
    'kota', // the taxonomy
    array(
        'description'=> 'Belum ditentukan atau Diisi',
        'slug' => 'uncategorized',
        'parent'=> $parent_term_id
  )
);

// Status
$parent_term = term_exists( 'Belum ditentukan', 'status' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id']; // get numeric term id
wp_insert_term(
    'Belum ditentukan', // the term
    'status', // the taxonomy
    array(
        'description'=> 'Belum ditentukan atau Diisi',
        'slug' => 'uncategorized',
        'parent'=> $parent_term_id
    )
);

// Provinsi
$parent_term = term_exists( 'Belum ditentukan', 'provinsi' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id']; // get numeric term id
wp_insert_term(
    'Belum ditentukan', // the term
    'provinsi', // the taxonomy
    array(
        'description'=> 'Belum ditentukan atau Diisi',
        'slug' => 'uncategorized',
        'parent'=> $parent_term_id
    )
);

// Angkatan
$parent_term = term_exists( 'Belum ditentukan', 'angkatan' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id']; // get numeric term id
wp_insert_term(
    'Belum ditentukan', // the term
    'angkatan', // the taxonomy
    array(
        'description'=> 'Belum ditentukan atau Diisi',
        'slug' => 'uncategorized',
        'parent'=> $parent_term_id
    )
);

// Lembaga
$parent_term = term_exists( 'Belum ditentukan', 'lembaga' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id']; // get numeric term id
wp_insert_term(
    'Belum ditentukan', // the term
    'lembaga', // the taxonomy
    array(
        'description'=> 'Belum ditentukan atau Diisi',
        'slug' => 'uncategorized',
        'parent'=> $parent_term_id
    )
);

// Pondok
$parent_term = term_exists( 'Belum ditentukan', 'pondok' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id']; // get numeric term id
wp_insert_term(
    'Belum ditentukan', // the term
    'pondok', // the taxonomy
    array(
        'description'=> 'Belum ditentukan atau Diisi',
        'slug' => 'uncategorized',
        'parent'=> $parent_term_id
    )
);