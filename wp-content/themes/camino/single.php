<?php get_header(); ?>

<main id="primary" class="site-main">

	<?php while ( have_posts() ) : the_post(); ?>
		<header class="post-header" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
			<div class="flex container">
				<div class="header-content">
                    <span class="tag">
                        <?php
                        $category = get_the_category();
                        echo $category[0]->name;
                        ?>
                    </span>
					<h1><?php the_title(); ?></h1>
                    <div class="post-author">
                        <?php echo get_the_author_meta( 'first_name' ) . ' ' . get_the_author_meta( 'last_name' ); ?>
                    </div>
				</div>
			</div>
		</header>

		<div class="container">
            <article class="page-article">
                <?php the_content(); ?>
            </article>
        </div>

	<?php endwhile; ?>

    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'post__not_in' => array(get_the_ID()),
    );
    $related_posts = get_posts($args);
    ?>
    <?php if($related_posts) : ?>
        <section class="section-further-reading has-background">
            <h2><?php _e('Further Reading', 'camino'); ?> <a href="<?php echo get_home_url(); ?>" class="dark secondary button with-icon hide-for-small-only"><?php _e('View all', 'camino'); ?></a></h2>
            <div class="container">
                <div class="swiper further-reading-slider">
                    <div class="swiper-wrapper">
                        <?php foreach($related_posts as $post) : ?>
                            <div class="swiper-slide">
                                <div class="item">
                                    <a href="<?php echo get_the_permalink($post); ?>" class="image-wrapper">
                                        <?php echo get_the_post_thumbnail(); ?>
                                    </a>
                                    <div class="item-content">
                                        <h3><?php echo get_the_title($post); ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main><!-- #main -->

<?php
get_footer();