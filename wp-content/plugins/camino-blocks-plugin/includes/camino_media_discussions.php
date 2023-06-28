<?php 

function camino_media_discussions($attributes) {

    $posts = get_posts(array(
        'posts_per_page' => 7,
        'post_type' => 'media-discussion'
    ));

	$content = '<section class="section-media-discussions">
        <div class="container">
            <div class="columns">
                <div class="column-1">
                    <div class="row-1">
                        <h2>' . __('Media and Discussions', 'camino') . '</h2>
                        <a target="_blank" href="' . get_field( 'external_link', $posts[0]) . '" class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[0]) ) . ');">
                            <div class="item-content">
                                <h3>' . get_the_title($posts[0]) . '</h3>
                                <p>' . get_the_excerpt($posts[0]) . '</p>
                            </div>
                        </a>
                    </div>
                    <div class="row-2">
                        <a target="_blank" href="' . get_field( 'external_link', $posts[2]) . '" class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[1]) ) . ');">
                            <div class="item-content">
                                <h3>' . get_the_title($posts[1]) . '</h3>
                                <p>' . get_the_excerpt($posts[1]) . '</p>
                            </div>
                        </a>
                    </div>
                    <div class="row-3">
                        <a target="_blank" href="' . get_field( 'external_link', $posts[3]) . '" class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[2]) ) . ');">
                            <div class="item-content">
                                <h3>' . get_the_title($posts[2]) . '</h3>
                                <p>' . get_the_excerpt($posts[2]) . '</p>
                            </div>
                        </a>
                        <a target="_blank" href="' . get_field( 'external_link', $posts[3]) . '" class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[3]) ) . ');">
                            <div class="item-content">
                                <h3>' . get_the_title($posts[3]) . '</h3>
                                <p>' . get_the_excerpt($posts[3]) . '</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="column-2">
                    <a target="_blank" href="' . get_field( 'external_link', $posts[4]) . '" class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[4]) ) . ');">
                        <div class="item-content">
                            <h3>' . get_the_title($posts[4]) . '</h3>
                            <p>' . get_the_excerpt($posts[4]) . '</p>
                        </div>
                    </a>
                    <a target="_blank" href="' . get_field( 'external_link', $posts[5]) . '" class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[5]) ) . ');">
                        <div class="item-content">
                            <h3>' . get_the_title($posts[5]) . '</h3>
                            <p>' . get_the_excerpt($posts[5]) . '</p>
                        </div>
                    </a>
                    <a target="_blank" href="' . get_field( 'external_link', $posts[6]) . '" class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[6]) ) . ');">
                        <div class="item-content">
                            <h3>' . get_the_title($posts[6]) . '</h3>
                            <p>' . get_the_excerpt($posts[6]) . '</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>';

	return $content;
}