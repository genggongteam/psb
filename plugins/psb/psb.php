<?php

/**
 * @package PSB_Genggong
 * @version 1.0
 */
/*
Plugin Name: PSB Genggong
Plugin URI: http://rio.my.id
Description: Ini adalah plugin pendaftaran siswa baru. plugin ini dapat di aktifkan setelah anda menginstal plugin meta-box. karena plugin ini menggunakan library metabox. plugin ini di develop oleh rio bahtiar
Author: Rio Bahtiar
Version: 1.0
Author URI: http://rio.my.id
 */

/** Custom Post Type **/
add_action('init', 'cpt_santri_baru');
function cpt_santri_baru() {
	register_post_type('santri_baru',
		array(
			'labels' => array(
				'name' => __('Santri Baru'),
				'singular_name' => __('Santri Baru'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'santri-baru'),
			'menu_icon' => 'dashicons-welcome-widgets-menus',
		)
	);
	flush_rewrite_rules();
}
// Costumize default Style
add_action('init', 'init_add_cpt_santri_baru_support');
function init_add_cpt_santri_baru_support() {
	$post_type = 'santri_baru';
	add_post_type_support($post_type, 'thumbnail', 'revision');
}
add_action('init', 'init_remove_cpt_santri_baru_support');
function init_remove_cpt_santri_baru_support() {
	$post_type = 'santri_baru';
	remove_post_type_support($post_type, 'editor');
}
function form_title_cpt_santri_baru($title) {
	$screen = get_current_screen();

	if ('santri_baru' == $screen->post_type) {
		$title = 'Nama Lengkap Santri';
	}

	return $title;
}
add_filter('enter_title_here', 'form_title_cpt_santri_baru');

/** Register Lembaga Taxonomy **/
function lembaga_taxonomy() {

	$labels = array(
		'name' => _x('Lembaga Pendidikan', 'Lembaga General Name', 'text_domain'),
		'singular_name' => _x('Lembaga Pendidikan', 'Lembaga Singular Name', 'text_domain'),
		'menu_name' => __('Lembaga Pendidikan', 'text_domain'),
		'all_items' => __('Lihat Semua', 'text_domain'),
		'parent_item' => __('Parent Item', 'text_domain'),
		'parent_item_colon' => __('Parent Item:', 'text_domain'),
		'new_item_name' => __('New Item Name', 'text_domain'),
		'add_new_item' => __('Tambahkan Lembaga', 'text_domain'),
		'edit_item' => __('Edit Lembaga', 'text_domain'),
		'update_item' => __('Update Lembaga', 'text_domain'),
		'view_item' => __('Lihat Lembaga', 'text_domain'),
		'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
		'add_or_remove_items' => __('Tambah atau Hapus', 'text_domain'),
		'choose_from_most_used' => __('Choose from the most used', 'text_domain'),
		'popular_items' => __('Lembaga Populer', 'text_domain'),
		'search_items' => __('Cari Lembaga', 'text_domain'),
		'not_found' => __('Tidak Ketemu', 'text_domain'),
		'no_terms' => __('No items', 'text_domain'),
		'items_list' => __('Daftar Lembaga', 'text_domain'),
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
	register_taxonomy('lembaga', array('santri_baru'), $args);

}
add_action('init', 'lembaga_taxonomy', 0);

/** Register Daerah atau Pondok Taxonomy **/
function pondok_taxonomy() {

	$labels = array(
		'name' => _x('Pondok / Daerah', 'Pondok General Name', 'text_domain'),
		'singular_name' => _x('Pondok / Daerah', 'Pondok Singular Name', 'text_domain'),
		'menu_name' => __('Pondok / Daerah', 'text_domain'),
		'all_items' => __('Lihat Semua', 'text_domain'),
		'parent_item' => __('Parent Item', 'text_domain'),
		'parent_item_colon' => __('Parent Item:', 'text_domain'),
		'new_item_name' => __('Nama Pondok Baru', 'text_domain'),
		'add_new_item' => __('Tambahkan Pondok', 'text_domain'),
		'edit_item' => __('Edit Pondok', 'text_domain'),
		'update_item' => __('Update Pondok', 'text_domain'),
		'view_item' => __('Lihat Pondok', 'text_domain'),
		'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
		'add_or_remove_items' => __('Tambah atau Hapus', 'text_domain'),
		'choose_from_most_used' => __('Gunakan dari yang sering digunakan', 'text_domain'),
		'popular_items' => __('Sering Digunakan', 'text_domain'),
		'search_items' => __('Cari Pondok', 'text_domain'),
		'not_found' => __('Tidak Ditemukan', 'text_domain'),
		'no_terms' => __('Tidak ada Pondok', 'text_domain'),
		'items_list' => __('Daftar Pondok', 'text_domain'),
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
	register_taxonomy('pondok', array('santri_baru'), $args);

}
add_action('init', 'pondok_taxonomy', 0);

/**
 * ============================================
 * --- Metabox Form
 * ============================================
 **/
include 'metabox-santri.php';