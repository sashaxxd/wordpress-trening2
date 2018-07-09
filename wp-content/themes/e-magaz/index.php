<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package e-magaz
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
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
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
