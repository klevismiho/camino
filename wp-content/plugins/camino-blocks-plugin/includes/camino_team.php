<?php 

function camino_team($attributes) {
	$args = array(
        'post_type' => 'team',
		'posts_per_page' => 20
	);	

	$recent_posts = get_posts($args);

	$posts = '<section class="section-team">';
    $posts .= '<h2>' . __('The Team', 'camino') . '</h2>';
	$posts .= '<div class="container">';
    $posts .= '<div class="swiper team-slider">';
    $posts .= '<div class="swiper-wrapper">';

	foreach($recent_posts as $post) {

		$posts .= '<div class="swiper-slide">
            <div class="item">
                <div class="image-wrapper">' . get_the_post_thumbnail( $post->ID ) . '</div>
                <div class="item-content">
                    <div class="item-content-inner">
                        <h3>' . get_the_title($post) . '</h3>
                        <h5>' . get_field( 'team_title', $post) . '</h5>
                        <p>' . get_the_excerpt($post) . '</p>
                    </div>
                </div>
            </div>
        </div>';
	}

    $posts .= '</div>';
    $posts .= '<div class="swiper-button-next" role="button" aria-label="Next slide"></div>
    <div class="swiper-button-prev role="button" aria-label="Previous slide"></div>
    <div class="swiper-pagination"></div>';
    $posts .= '</div>';
	$posts .= '</div>';
	$posts .= '</section>';

	return $posts;
}