<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-magaz
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <div id="site_block52">
                <div id="block52">
                    <div class="row">
                        <div class="col-1">
                            <div id="site_block51">
                                <div id="block51">
                                    <div class="row">
                                        <div class="col-1">
                                            <div id="site_Text45">
                                                <span id="site_uid232">
                                                    <?php  $footer_text = carbon_get_theme_option('est_footer_text') ? carbon_get_theme_option('est_footer_text') : get_bloginfo('name'); ?>
                                                    <?php echo $footer_text; ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                        </div>
                                        <div class="col-3">
                                            <div id="site_FontAwesomeIcon1">
                                                <a href="#bookm"><div id="FontAwesomeIcon1"><i class="fa fa-angle-up">&nbsp;</i></div></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
