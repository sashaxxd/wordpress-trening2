<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * Отключает родные стили woocommerce
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
//remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');