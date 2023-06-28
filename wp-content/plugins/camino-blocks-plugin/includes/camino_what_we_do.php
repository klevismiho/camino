<?php

function camino_what_we_do($attributes) {
	$args = array(
		'post_type' => 'what-we-do',
		'posts_per_page' => 20
	);	

	$recent_posts = get_posts($args);
	
	$posts = '<section class="section-what-we-do"' . get_block_wrapper_attributes() . '>';
    $posts .= '<h2>' . $attributes['title'] . '</h2>';
	$posts .= '<div class="container">';

	foreach($recent_posts as $post) {

		$title = get_the_title($post);
		$permalink = get_permalink($post);
		if( get_field( 'link', $post)) { 
			$posts .= '<a target="_blank" class="item" href="' . esc_url( get_field( 'link', $post )) . '"><div class="button-wrapper"><button class="button with-icon">' . __('Find out more', 'camino') . '</button></div>' . get_the_post_thumbnail( $post, 'large' ) . '</a>';
		} else {
			$posts .= '<a class="item" href="' . esc_url($permalink) . '"><div class="button-wrapper"><button class="button with-icon">' . __('Find out more', 'camino') . '</button></div>' . get_the_post_thumbnail( $post, 'large' ) . '</a>';
		}
	}

	$posts .= '</div>';
	$posts .= '<a href="/what-we-do/" class="dark secondary button with-icon">Find out more</a>';
	$posts .= '</section>';

	return $posts;
}