<?php 

function camino_timeline($attributes) {

    $timeline = get_posts(array(
        'post_type' => 'timeline',
        'posts_per_page' => 20
    ));
    
    $content = '<section class="section-timeline-slider">
        <script>
            var timelineSliderYears = [];
        </script>
        <div class="container large">
            <div class="swiper timeline-slider">
                <div class="swiper-wrapper">';
                    foreach($timeline as $post) {
                        $content .= '<div class="swiper-slide">
                            <div class="slide-wrapper">
                                <div class="slide-content">
                                    <h6>'. __('OUR HISTORY', 'camino') . '</h6>
                                    <h3>' . get_the_title($post) . '</h3>
                                    ' . get_the_excerpt($post) . '
                                </div>
                                ' . get_the_post_thumbnail($post) . '
                            </div>
                        </div>
                        <script>
                            timelineSliderYears.push(' . get_the_title($post) . ')
                        </script>';
                    }
    $content .= '</div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>';

    return $content;
}
