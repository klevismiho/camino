<?php 

function camino_latest_posts($attributes) {
	$args = array(
		'posts_per_page' => $attributes['numberOfPosts'],
		'posts_status' => 'publish',
		'order' => $attributes['order'],
		'orderby' => $attributes['orderBy']
	);	
	if(isset($attributes['categories'])) {
		$args['category__in'] = array_column($attributes['categories'], 'id');
	}
	$recent_posts = get_posts($args);
	

	$posts = '<section class="section-news"' . get_block_wrapper_attributes() . '>';
	$posts .= '<div class="container">';

	foreach($recent_posts as $post) {

		$title = get_the_title($post);
		$permalink = get_permalink($post);
		$excerpt = get_the_excerpt($post);

		$posts .= '<div class="news-item">';

		if($attributes['displayFeaturedImage'] && has_post_thumbnail($post)) {
			$posts .= '<a href="' . esc_url($permalink) . '">' . get_the_post_thumbnail( $post, 'large' ) . '</a>';
		}
		$posts .= '<span class="tag">ARRIBA</span>';
		$posts .= '<div class="item-content">';
		$posts .= '<time datetime="' . esc_attr( get_the_date('c', $post) ) . '"> ' . esc_html( get_the_date('', $post) ) . '</time>';
		$posts .= '<h2><a href="' . esc_url($permalink) . '">' . $title . '</a></h2>'; 

		if(!empty($excerpt)) {
			$posts .= '<p>' . $excerpt . '</p>';
		}
		$posts .= '</div>';
		$posts .= '</div>';
	}

	$posts .= '</div>';
	$posts .= '</section>';

	return $posts;
}