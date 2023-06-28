<?php get_header(); ?>

<main id="primary" class="site-main">

	<header class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/news-header.jpg)">
		<div class="flex container">
			<div class="header-content">
				<h1><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php _e('News', 'camino'); ?></a> - <?php echo single_cat_title(); ?></h1>
				<?php 
				$categories = get_categories( array(
					'orderby' => 'name',
					'order'   => 'ASC'
				) );
				?>
				<div class="header-categories-wrapper">
					<button class="secondary button with-icon"><?php _e('Categories', 'camino'); ?></button>
					<ul>
						<?php
						foreach( $categories as $category ) {
							echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
						} ?>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<section class="section-news">
		<div class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				$category = get_the_category();
				?>
				<div class="news-item">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<span class="tag">
						<?php echo $category[0]->cat_name; ?>
					</span>
					<div class="item-content">
						<div class="item-content-inner">
							<time datetime="<?php the_time(); ?>"><?php the_time(); ?></time>
							<h2><?php the_title(); ?></h2>
							<p><?php echo custom_excerpt(100); ?></p>
							<a href="<?php the_permalink(); ?>" class="button with-icon"><?php _e('Find out more', 'camino'); ?></a>
						</div>
					</div>
				</div>
			
			<?php endwhile; ?>

		</div>

		<div class="buttons pagination">
			<?php
			previous_posts_link( 'Prev' ); 
			next_posts_link( 'Next' );
			?>
		</div>

	</section>

</main><!-- #main -->

<?php
get_footer();
