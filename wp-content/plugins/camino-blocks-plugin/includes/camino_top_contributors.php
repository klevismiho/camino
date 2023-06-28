<?php 

function camino_top_contributors($attributes) {
	$args = array(
        'post_type' => 'contributor',
		'posts_per_page' => 20
	);	

	$recent_posts = get_posts($args);

	$posts = '<section class="section-top-contributors">';
    $posts .= '<h2>Top Contributors</h2>';
	$posts .= '<div class="container">';
    $posts .= '<div class="swiper contributors-slider">';
    $posts .= '<div class="swiper-wrapper">';

	foreach($recent_posts as $post) {

		$title = get_the_title($post);
		$permalink = get_permalink($post);
		$excerpt = get_the_excerpt($post);
        $terms = get_the_terms( $post->ID, 'contributor-type' );

		$posts .= '<div class="swiper-slide">
            <div class="item">
                ' . get_the_post_thumbnail( $post->ID ) . '
                <div class="content">
                    <span class="tag">' . $terms[0]->name . '</span>
                    <h3>' . $title . '</h3>
                    <p>' . $excerpt . '</p>
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
	$posts .= '</section>';

	return $posts;
}