<?php /* Template Name: Annual Report */ ?>

<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php if(has_post_thumbnail()) : ?>
        <?php echo get_the_post_thumbnail_url(); ?>
        <header class="page-header" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
    <?php else : ?>
        <header class="page-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/annual-report-header.jpg)">
    <?php endif; ?>
		<div class="flex container">
			<div class="header-content">
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>
            </div>
		</div>
	</header>

    <?php the_content(); ?>

</main><!-- #main -->

<?php
get_footer();