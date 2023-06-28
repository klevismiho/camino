<?php 

function camino_our_services($attributes) {
	$args = array(
		'post_type' => 'service',
		'posts_per_page' => 20,
		'posts_status' => 'publish'
	);	

	$recent_posts = get_posts($args);
	

	$posts = '<section class="section-services">';
	$posts .= '<div class="container">';
	$posts .= '<div class="services-header">
		<h2>' . $attributes['title'] . '</h2>
		<p>' . $attributes['content'] . '</p>
	</div>';
	$posts .= '<div class="services-grid">';

	foreach($recent_posts as $post) {

		$title = get_the_title($post);
		$permalink = get_permalink($post);
		$excerpt = get_the_excerpt($post);
		$image = get_the_post_thumbnail( $post, 'large' );
		$logo = get_field( 'service_logo', $post->ID );

		$posts .= '<div class="service-item">';

		if(get_field( 'link', $post )) {
			$posts .= '<a target="_blank" href="' . get_field( 'link', $post ) . '" class="image-wrapper">';
		} else {
			$posts .= '<a href="' . get_the_permalink($post) . '" class="image-wrapper">';
		}

		$posts .= $image;
		$posts .= '<img class="logo" src="' . $logo['url'] . '" alt="" />';
		$posts .= '</a>';
		$posts .= '<div class="item-content">';
		$posts .= '<h3>' . $title . '</h3>';
		$posts .= '<p>' . $excerpt . '</p>';
		$posts .= '</div>';
		$posts .= '</div>';
	}
	
	$posts .= '</div>';
	$posts .= '</div>';
	$posts .= '</section>';

	return $posts;
}