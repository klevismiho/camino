<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Camino
 */

?>


<?php get_template_part('template-parts/newsletter'); ?>


<footer class="site-footer">

	<div class="site-info">
		<a href="<?php bloginfo('url'); ?>"><img width="199" height="37" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Camino" /></a>
		<p class="copyright-desktop">© Camino. All rights reserved 2023.</p>
	</div><!-- .site-info -->

	<div class="footer-content">
		<div class="socials">
			<div class="item">
				<a href="https://www.facebook.com/CaminoChurch" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Camino on Facebook" width="22" height="22" /></a>
				<div class="sub-socials">
					<a href="https://www.facebook.com/CaminoHealthCente">Camino Health Center</a>
					<a href="https://www.facebook.com/caminoarriba">Arriba</a>
					<a href="https://www.facebook.com/TheWearHouse127">The WearHouse</a>
					<a href="https://www.facebook.com/CaminoChurch">Camino Church</a>
				</div>
			</div>
			<div class="item">
				<a href="https://instagram.com/camino.stories?igshid=MzRlODBiNWFlZA==" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Camino on Instagram" width="22" height="22" /></a>
			</div>
			<div class="item">
				<a href="https://www.youtube.com/@caminostories2588/videos" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="Youtube on Facebook" width="22" height="22" /></a>
			</div>
			<div class="item">
				<a href="https://www.linkedin.com/company/caminohealthcenter/mycompany/verification/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Linkedin on Facebook" width="22" height="22" /></a>
			</div>
		</div>
		<nav class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_menu',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</div>

	<p class="copyright-mobile">© Camino. All rights reserved 2023.</p>

</footer>

</div><!-- page-wrapper -->

<nav id="mobile-menu" class="mobile-menu">
	<div id="mobile-menu-inner" class="mobile-menu-inner">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
			)
		);
		?>
	</div>
	<div class="mobile-header-top">
		<img width="120" height="20" class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Camino logo in mobile logo" />
		<?php
		if (wp_is_mobile()) {
			echo do_shortcode('[wpml_language_selector_widget]');
		}
		?>
		<button id="mobile-menu-close-button" class="mobile-menu-close-button">Close</button>
	</div>
</nav>

<?php wp_footer(); ?>

</body>

</html>