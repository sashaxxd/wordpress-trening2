<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-magaz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'e-magaz' ); ?><!--</a>-->

	<header id="masthead" class="site-header">
        <!--        Шапка -->

        <div id="site_bookm">
            <div id="bookm">
                <div class="row">
                    <div class="col-1">
                    </div>
                </div>
            </div>
        </div>
        <div id="site_pod_menu">
            <div id="pod_menu">
                <div class="row">
                    <div class="col-1">
                        <div id="site_header_menu">
                            <div id="header_menu">
                                <div class="row">
                                    <div class="col-1">
                                        <div id="site_logo_img">
                                            <?php  $logo_id = carbon_get_theme_option('est_header_logo');
                                            $logo = $logo_id ? wp_get_attachment_image_src($logo_id , 'full') : '';  ?>
                                            <a href="<?php echo home_url('/');?>"><img src="<?php echo $logo[0];?>" id="logo_img" alt=""></a>


                                        </div>
                                        <div id="site_logo">
                                            <span id="site_uid0">MODNYI-KOSTUM
                                                <br></span><span id="site_uid1">магазин модной одежды</span><span id="site_uid2"> </span>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div id="site_ResponsiveMenu">
                                            <?php
                                            e_magaz_primary_menu();
                                            ?>
                                            <label class="toggle" for="ResponsiveMenu-submenu" id="ResponsiveMenu-title"><span id="ResponsiveMenu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                                            <input type="checkbox" id="ResponsiveMenu-submenu">
                                            <ul class="ResponsiveMenu" id="ResponsiveMenu">
                                                <li><a href="#">&#1043;&#1083;&#1072;&#1074;&#1085;&#1072;&#1103;</a></li>
                                                <li><a href="#">&#1058;&#1088;&#1080;&#1082;&#1086;&#1090;&#1072;&#1078;&#1085;&#1099;&#1077;&nbsp;&#1082;&#1086;&#1089;&#1090;&#1102;&#1084;&#1099;</a></li>
                                                <li><a href="#">&#1042;&#1103;&#1079;&#1072;&#1085;&#1099;&#1077;&nbsp;&nbsp;&#1082;&#1086;&#1089;&#1090;&#1102;&#1084;&#1099;</a></li>
                                                <li><a href="#">&#1055;&#1083;&#1072;&#1090;&#1100;&#1103;</a></li>
                                                <li><a href="#">&#1044;&#1086;&#1089;&#1090;&#1072;&#1074;&#1082;&#1072;&nbsp;&#1080;&nbsp;&#1086;&#1087;&#1083;&#1072;&#1090;&#1072;</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div id="site_phone_text">
                                            <div id="phone_text"><i class="fa fa-phone">&nbsp;</i></div>
                                        </div>
                                        <div id="site_phone_img">
                                            <span id="site_uid3">8 (985) 691-18-91</span>
                                        </div>
                                        <hr id="Line7">
                                        <div id="site_cart_img">
                                            <div id="cart_img"><i class="fa fa-shopping-cart">&nbsp;</i></div>
                                        </div>
                                        <div id="site_cart_text">
                                            <span id="site_uid4">ТОВАРОВ: 3 <br>НА СУММУ: 7000 РУБ.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="site_hit">
            <div id="hit">
                <div class="row">
                    <div class="col-1">
                        <div id="site_Text2">
                            <span id="site_uid5">
                                <?php  $site_name = carbon_get_theme_option('est_site_name') ? carbon_get_theme_option('est_site_name') : get_bloginfo('name'); ?>
                                <?php echo $site_name; ?>
                               </span>
                        </div>
                        <div id="site_Text3">
                            <span id="site_uid6">8 (985) 691-18-91</span><span id="site_uid7"> цены низкие как никогда!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--        Конец шапки-->


<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$e_magaz_description = get_bloginfo( 'description', 'display' );
//			if ( $e_magaz_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $e_magaz_description; /* WPCS: xss ok. */ ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'e-magaz' ); ?><!--</button>-->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
