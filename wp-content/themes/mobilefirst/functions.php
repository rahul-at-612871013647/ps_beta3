<?php

function bsimple_scripts() {
    wp_enqueue_style( 'bsimple-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bsimple-enhanced', get_template_directory_uri() . '/css/enhanced.css', '','','screen  and (min-width: 40.5em)' );
    
    wp_enqueue_script( 'bsimple-modernizr', get_template_directory_uri() . '/js/modernizr.js');
    wp_enqueue_script( 'bsimple-jq', get_template_directory_uri() . '/js/jquery.js' );
    wp_enqueue_script( 'bsimple-bootstrap', get_template_directory_uri() . '/js/init.js');
    
}    

add_action( 'wp_enqueue_scripts', 'bsimple_scripts' );

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
/* Logo */
add_theme_support( 'custom-logo' );

function mobilefirst_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
'unlink-homepage-logo' => true, 
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'mobilefirst_custom_logo_setup' );
