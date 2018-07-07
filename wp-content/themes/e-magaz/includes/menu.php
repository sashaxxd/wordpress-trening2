<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

register_nav_menus(array(
    'one' => 'Верхнее',
    'to' => 'Дополнительное',
));


function e_magaz_primary_menu(){
    wp_nav_menu( array(
        'theme_location' => 'one',
        'menu_id'        => 'ResponsiveMenu',
        'menu_class' => 'ResponsiveMenu'


    ) );
}