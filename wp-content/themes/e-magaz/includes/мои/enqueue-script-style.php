<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Cкрипты
 */
add_action( 'wp_enqueue_scripts', 'e_magaz_scripts' );
function e_magaz_scripts() {


    wp_enqueue_script( 'e-magaz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'e-magaz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script('jquery-main' , get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-ui' , get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, false);
    wp_enqueue_script('jquery-ui-effect' , get_template_directory_uri() . '/assets/js/jquery.ui.effect-bars.min.js', array('jquery'), null, false);
    wp_enqueue_script('slideshow' , get_template_directory_uri() . '/assets/js/slideshow.min.js', array('jquery'), null, false);
    wp_enqueue_script('script' , get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), null, false);
    wp_enqueue_script('slide' , get_template_directory_uri() . '/assets/js/slide.js', array('jquery'), null, false);
    wp_enqueue_script('main' , get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, false);


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


/**
 *  Стили
 */
add_action( 'wp_enqueue_scripts', 'e_magaz_style' );
function e_magaz_style() {

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array() , null, 'all');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css', array() , null, 'all');
    wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css', array() , null, 'all');
    wp_enqueue_style( 'e-magaz-style', get_stylesheet_uri() );
}
