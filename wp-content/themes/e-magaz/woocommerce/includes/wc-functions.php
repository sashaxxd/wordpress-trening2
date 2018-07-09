<?php
/**
*  Стили
*/
function is_single_w ()
{
    if (is_product()) {
        echo '55';
    } else {
        echo '0';
    }
}

?>

<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<?php
/**
 * Функция проверки на страницу woocommerce
 */
function is_realy_woocommerce_page () {
if(  function_exists ( "is_woocommerce" ) && is_woocommerce()){
return true;
}
$woocommerce_keys   =   array ( "woocommerce_shop_page_id" ,
"woocommerce_terms_page_id" ,
"woocommerce_cart_page_id" ,
"woocommerce_checkout_page_id" ,
"woocommerce_pay_page_id" ,
"woocommerce_thanks_page_id" ,
"woocommerce_myaccount_page_id" ,
"woocommerce_edit_address_page_id" ,
"woocommerce_view_order_page_id" ,
"woocommerce_change_password_page_id" ,
"woocommerce_logout_page_id" ,
"woocommerce_lost_password_page_id" ) ;
foreach ( $woocommerce_keys as $wc_page_id ) {
if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
return true ;
}
}
return false;
}
?>


<?php
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
        <?php

        is_single_w();
        ?>
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

add_action( 'woocommerce_before_single_product', 'main_wrapper_product_start', 5 );

function main_wrapper_product_start(){
?>
   <div id="Обрамление карточки верх"></div>
<?php
}

add_action( 'woocommerce_after_single_product', 'main_wrapper_product_final', 5 );

function main_wrapper_product_final(){
    ?>
    <div id="Обрамление карточки верх низ"></div>
    <?php
}


add_action( 'woocommerce_before_single_product_summary', 'main_wrapper_product_image_start', 5 );
function main_wrapper_product_image_start() {
    ?>
    <div class="хуй">
    <?php
}
add_action( 'woocommerce_before_single_product_summary', 'main_wrapper_product_image_end', 25 );
function main_wrapper_product_image_end() {
    ?>
    </div>
    <?php
}
