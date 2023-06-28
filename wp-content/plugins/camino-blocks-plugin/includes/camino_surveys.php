<?php 

function camino_surveys($attributes) {

    $posts = get_posts(array(
        'post_type' => 'survey',
        'posts_per_page' => 3
    ));

	$content = '<section class="section-surveys">
        <div class="container">
            <div class="first item">
                <h2>' . $attributes['title'] . '</h2>
                <p>' . $attributes['content'] . '</p>
            </div>';

    foreach($posts as $post) {
        $content .= '<div class="item" style="background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id($post)) . ');">
            <div class="item-content">
                <h3>' . get_the_title($post) . '</h3>
                <p>' . get_the_excerpt($post) . '</p>
                <a target="_blank" href="' . get_field( 'survey_link', $post) . '" class="secondary button with-icon icon-play">' . __('Take Survey', 'camino') . '</a>
            </div>
        </div>';
    }

    $content .= '
        </div>
    </section>';

	return $content;
}