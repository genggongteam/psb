<?php
/**
 * understrap enqueue scripts
 *
 * @package understrap
 */

function understrap_scripts() {
    wp_enqueue_style( 'web-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700', false );
    wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.5');
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.5', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


/** 
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","understrap_slider");
  
function understrap_slider(){
    if ( is_front_page() ) {    
    $data = array(
        "timeout"=> intval( get_theme_mod( 'understrap_theme_slider_time_setting', 5000 )),
        "items"=> intval( get_theme_mod( 'understrap_theme_slider_count_setting', 1 ))
    	);

    wp_enqueue_script("understrap-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), '0.4.5');
    wp_localize_script( "understrap-slider-script", "understrap_slider_variables", $data );
    }
}
endif;

