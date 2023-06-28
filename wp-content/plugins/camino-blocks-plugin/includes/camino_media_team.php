<?php

function camino_media_team($attributes) {

    $posts = get_posts(array(
        'post_type' => 'media-team',
		'posts_per_page' => '6'
	));

    $content = '<section class="section-media-team">
        <h2>' . __('Our Media Team', 'camino') . '</h2>
        <div class="container flex">';
    
        foreach($posts as $post) {
            $content .= '<div class="item">
                ' . get_the_post_thumbnail($post) . '
                    <div class="item-content">
                        <div>
                            <h4>' . get_the_title($post) . '</h4>
                            <p>' . get_the_excerpt($post) . '</p>
                            <a href="mailto:' . get_field( 'email', $post) . '" class="secondary dark button with-icon">' . __('Email', 'camino') . '</a>
                        </div>
                    </div>
                </div>';
        }

    $content .= '
        </div>
    </section>';

    return $content;

}