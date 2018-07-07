<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Хлебные крошки
 *
 */

remove_action( 'woocommerce_before_main_content',
    'woocommerce_breadcrumb', 20 );

add_action('woocommerce_before_main_content',
    'main_breadcrumb', 20);
function main_breadcrumb(){
    ?>
    <div id="wb_bread">
        <div id="bread">
            <div class="row">
                <div class="col-1">
                    <div id="wb_Breadcrumb1">

                        <?php woocommerce_breadcrumb(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div id="wb_bread">-->
<!--        <div id="bread">-->
<!--            <div class="row">-->
<!--                <div class="col-1">-->
<!--                    <div id="wb_Breadcrumb1">-->
<!--                        <ul id="Breadcrumb1">-->
<!--                            <li><a href="">Home</a></li>-->
<!--                            <li><a href="">Parent Category</a></li>-->
<!--                            <li><a href="">Current Category</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <?php
}

// Функия выводит нужные теги в хлебных крошках
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
        'delimiter' => ' / ',
        'wrap_before' => '<ul id="Breadcrumb1">',
        'wrap_after' => '</ul >',
        'before' => '<li>',
        'after' => '</li>',
        'home' => _x( 'Главная', 'breadcrumb', 'woocommerce' ),
    );
}
