<?php get_header(); ?>

<main id="primary" class="site-main">

    <header class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/annual-report-header.jpg)">
        <div class="flex container">
            <div class="header-content">
                <h1><?php _e('Page not found', 'camino'); ?></h1>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </header>

    <?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>

</main><!-- #main -->

<?php
get_footer();