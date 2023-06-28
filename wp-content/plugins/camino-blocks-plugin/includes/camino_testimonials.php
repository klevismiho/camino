<?php 

function camino_testimonials($attributes) {
	$args = array(
        'post_type' => 'testimonial',
		'posts_per_page' => 20
	);	

	$testimonials = get_posts($args);

	$content = '<section class="section-testimonials ';
    if($attributes['fullBackground']) {
        $content .= 'has-background ';
    }
    if($attributes['halfBackground']) {
        $content .= 'has-half-background';
    }
    $content .= '">';
    $content .= '<h2>' . __('Testimonials', 'camino') . '</h2>';
	$content .= '<div class="container">';
    $content .= '<div class="swiper testimonials-slider">';
    $content .= '<div class="swiper-wrapper">';

	foreach($testimonials as $post) {

		$title = get_the_title($post);
		$excerpt = get_the_excerpt($post);

		$content .= '<div class="swiper-slide">
            <div class="item">
                ' . get_the_post_thumbnail( $post->ID ) . '
                <div class="content">
                    <h3>' . $title . '</h3>
                    <p>' . $excerpt . '</p>
                </div>
            </div>
        </div>';
	}

    $content .= '</div>';
    $content .= '<div class="swiper-button-next" role="button" aria-label="Next slide"></div>
    <div class="swiper-button-prev" role="button" aria-label="Previous slide"></div>
    <div class="swiper-pagination"></div>';
    $content .= '</div>';
	$content .= '</div>';
	$content .= '</section>';

	return $content;
}