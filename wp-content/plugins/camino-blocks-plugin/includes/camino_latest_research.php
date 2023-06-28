<?php 

function camino_latest_research($attributes) {
	$args = array(
        'post_type' => 'research',
		'posts_per_page' => 20
	);	

	$recent_posts = get_posts($args);

	$posts = '<section class="section-latest-research">';
    $posts .= '<h2>' . __('Latest Research', 'camino') . '</h2>';
	$posts .= '<div class="container">';
    $posts .= '<div class="container-inner">';
    $posts .= '<div class="swiper latest-research-slider">';
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
                        <h3>' . $title . '</h3>
                        <p>' . $excerpt . '</p>
                        <div class="buttons">';
                        if( get_field( 'link', $post) ) {
                            $posts .= '<a target="_blank" href="' . get_field( 'link', $post). '" class="button with-icon">' . __('Read', 'camino') . '</a>';
                        }
                        if( get_field( 'video', $post) ) {
                            $posts .= '<a target="_blank" href="' . get_field( 'video', $post) . '" class="dark secondary button with-icon">' . __('Watch', 'camino') . '</a>';
                        }
                    
        $posts .= '     </div>
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