<?php 

function camino_impact($attributes) {

    $posts = get_posts(array(
        'posts_per_page' => 4,
        'post_type' => 'impact'
    ));

	$content = '<section class="section-impact">
        <div class="container">
            <div class="columns">
                <div class="column-1">
                    <div class="row-1">
                        <h2>' . __('Our Impact Together', 'camino') . '</h2>
                        <div class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[0]) ) . ';">
                            <div class="item-content">
                                <div class="number">+' . get_field( 'number', $posts[0]) . '</div>
                                <h3>' . get_the_title($posts[0]) . '</h3>
                                <p>' . get_the_excerpt($posts[0]) . '</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-2">
                        <div class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[1]) ) . ');">
                            <div class="item-content">
                                <div class="number">+' . get_field( 'number', $posts[1]) . '</div>
                                <h3>' . get_the_title($posts[1]) . '</h3>
                                <p>' . get_the_excerpt($posts[1]) . '</p>
                            </div>
                        </div>
                        <div class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[2]) ) . ');">
                            <div class="item-content">
                                <div class="number">+' . get_field( 'number', $posts[2]) . '</div>
                                <h3>' . get_the_title($posts[2]) . '</h3>
                                <p>' . get_the_excerpt($posts[2]) . '</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-2">
                    <div class="item" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($posts[3]) ) . ');">
                        <div class="item-content">
                            <div class="number">+' . get_field( 'number', $posts[3]) . '</div>
                            <h3>' . get_the_title($posts[3]) . '</h3>
                            <p>' . get_the_excerpt($posts[3]) . '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';

	return $content;
}