<?php 

function camino_values_slider($attributes) {

    $timeline = get_posts(array(
        'post_type' => 'value',
        'posts_per_page' => 20
    ));
    
    $content = '<section class="section-values-slider ';

    if(isset($attributes['fullBackground']) && $attributes['fullBackground']) {
        $content .= 'has-background ';
    }    
    if(isset($attributes['halfBackground']) && $attributes['halfBackground']) {
        $content .= 'has-half-background';
    }   
     
    $content .= '">';

    $content .= '
        <script>
            var timelineSliderYears = [];
        </script>
        <div class="container large">
            <div class="swiper values-slider">
                <div class="swiper-wrapper">';
                    foreach($timeline as $post) {
                        $icon = get_field( 'value_icon', $post );
                        $content .= '<div class="swiper-slide">
                            <div class="slide-wrapper">
                                <div class="slide-content">
                                    <h6>' . __('Our Values', 'camino') . '</h6>
                                    <img class="icon" src="' . $icon['url'] . '" alt="' . $icon['alt'] . '" />
                                    <h3>' . get_the_title($post) . '</h3>
                                    ' . get_the_excerpt($post) . '
                                </div>
                                ' . get_the_post_thumbnail($post) . '
                            </div>
                        </div>
                        <script>
                            timelineSliderYears.push("' . get_the_title($post) . '")
                        </script>';
                    }
    $content .= '</div>
                <div class="pagination-wrapper">
                    <div class="pagination-wrapper-inner">
                        <div class="swiper-button-prev" role="button"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next" role="button"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>';

    return $content;
}
