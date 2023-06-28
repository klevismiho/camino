<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php wp_body_open(); ?>

<div class="page-wrapper">

<div class="header-wrapper">

	<?php if( get_field( 'top_notification', 'option' ) && ($_COOKIE['showTopbar'] != 'false') ) : ?>

		<div class="topbar-news" id="topbar-news">
			<?php the_field( 'top_notification', 'option' ); ?>
			<button class="close" id="close-topbar-news" aria-label="Close"></button>
		</div>

		<script>
		// Topbar
		const topBarNews = document.getElementById('topbar-news');
		if (typeof (topBarNews) != 'undefined' && topBarNews != null) {
		let topBarNewsButton = document.getElementById('close-topbar-news');
		topBarNewsButton.addEventListener('click', function () {
			topBarNews.remove();
			var date = new Date();
			date.setTime(date.getTime() + (7 * 24 * 60 * 60 * 1000)); // Set expiration to 7 days (1 week) from the current time
			var expires = "expires=" + date.toUTCString();
			document.cookie = "showTopbar=false; " + expires + "; path=/";
		})
		}
		</script>
	<?php endif; ?>

	<header class="site-header" id="site-header">

		<div class="site-branding">
			<a href="<?php bloginfo( 'url' ); ?>">
				<?php if(get_field('dark_header')) : ?>
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-color.svg" alt="Camino" width="240" height="45" />
				<?php else : ?>
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Camino" width="240" height="45" />
				<?php endif; ?>
			</a>
		</div><!-- .site-branding -->

		<nav class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<?php
			echo do_shortcode( '[wpml_language_selector_widget]' ); 
		?>

		<div class="header-secondary">
			<a href="<?php echo get_home_url(); ?>/camino-donations/" class="button with-icon"><?php _e('Donate', 'camino'); ?></a>
			<button id="mobile-menu-button" class="mobile-menu-icon" aria-label="Mobile Menu">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>

	</header><!-- #masthead -->

</div>