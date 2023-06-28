<?php 

function camino_events($attributes) {
	$args = array(
        'post_type' => 'eventbrite_events',
		'posts_per_page' => 20
	);	

	$events = get_posts($args);

	$content = '<section class="section-upcoming-events">';

    if($events) { 

        $content .= '<h2>' . __('Upcoming Events') . '<a target="_blank" href="https://www.eventbrite.com/o/camino-30346255156" class="view-all-button dark button secondary with-icon">' . __('View all', 'camino') . '</a></h2>';
        $content .= '<div class="container">';
        $content .= '<div class="swiper events-slider">';
        $content .= '<div class="swiper-wrapper">';

        foreach($events as $post) {

            $title = get_the_title($post);
            $excerpt = get_the_excerpt($post);

            $meta = get_post_meta( $post->ID );
            $event_link = $meta['iee_event_link'][0];

            $content .= '<div class="swiper-slide">
                <div class="item">
                    <a class="image-wrapper" target="_blank" href="' . $event_link . '"><div class="button-wrapper"><button class="secondary button with-icon">' . __('Find out more', 'camino') . '</button></div>' . get_the_post_thumbnail( $post->ID ) . '</a>
                    <div class="content">
                        <h3>' . $title . '</h3>
                        <p>' . $excerpt . '</p>
                    </div>
                </div>
            </div>';

        }

        $content .= '</div>';
        $content .= '<div class="swiper-button-next" role="button" aria-label="Next Slide"></div>
        <div class="swiper-button-prev" role="button" aria-label="Previous Slide"></div>
        <div class="swiper-pagination"></div>';
        $content .= '</div>';
        $content .= '</div>';   

    } else {
        $content .= '<h2>' . __('No Upcoming Events', 'camino') . '</h2>';
    }

	$content .= '</section>';

	return $content;
}