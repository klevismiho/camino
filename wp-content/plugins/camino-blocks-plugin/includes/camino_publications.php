<?php 

function camino_publications($attributes) {
	$args = array(
        'post_type' => 'publication',
		'posts_per_page' => 20
	);	

	$recent_posts = get_posts($args);

	$posts = '<section class="section-publications">';
    $posts .= '<h2>' . __('Publications', 'camino') . '</h2>';
	$posts .= '<div class="container">';
    $posts .= '<div class="container-inner">';
    $posts .= '<div class="swiper publications-slider">';
    $posts .= '<div class="swiper-wrapper">';

	foreach($recent_posts as $post) {

		$title = get_the_title($post);
		$permalink = get_permalink($post);
		$excerpt = get_the_excerpt($post);

		$posts .= '<div class="swiper-slide">
            <div class="item">
                <div class="image-wrapper">' . get_the_post_thumbnail( $post->ID ) . '</div>
                <div class="item-content">
                    <div class="item-content-inner">
                        <span class="radius"></span>
                        <h3>' . $title . '</h3>
                        <p>' . $excerpt . '</p>
                        <div class="buttons">';
            if( get_field( 'link', $post) ) {
                $posts .= '<a target="_blank" href="' . get_field( 'link', $post). '" class="button with-icon" aria-label="View more about publications">' . __('Find out more', 'camino') . '</a>';
            }
            
        $posts .= '
                        </div>
                    </div>
                </div>
            </div>
        </div>';
	}

    $posts .= '</div>';
    $posts .= '<div class="swiper-button-next" role="button" aria-label="Next slide"></div>
    <div class="swiper-button-prev" role="button" aria-label="Previous slide"></div>
    <div class="swiper-pagination"></div>';
    $posts .= '</div>';
    $posts .= '</div>';
	$posts .= '</div>';
	$posts .= '</section>';

	return $posts;
}