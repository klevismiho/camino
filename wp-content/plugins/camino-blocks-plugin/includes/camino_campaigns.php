<?php

function camino_campaigns($attributes) {

    $posts = get_posts(array(
        'post_type' => 'campaign',
        'posts_per_page' => 20
    ));
    
    $content = '<section class="section-active-campaigns">
        <h2>' . __('Active Campaigns', 'camino') . '</h2>
        <div class="container">';

        foreach($posts as $post) {
            
            $content .= '
                <div class="item">
                    ' . get_the_post_thumbnail( $post )  . '
                    <div class="content">
                        <h3>' . get_the_title( $post ) . '</h3>
                        ' . get_the_excerpt($post) . '
                    </div>
                </div>';
        }
    $content .='
        </div>
    </section>';

    return $content;

}