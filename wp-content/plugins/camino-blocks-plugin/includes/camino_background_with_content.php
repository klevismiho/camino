<?php 

function camino_background_with_content($attributes) {
	
    // Parse attributes
    $image = $attributes['image'];
    $image_url = $image['sizes']['full']['url'];
    $image_alt = $image['alt'];

    $content = '<section class="section-background-with-content ';
    
    if(isset($attributes['fullBackground']) && $attributes['fullBackground']) {
        $content .= 'has-background ';
    }
    if(isset($attributes['halfBackground']) && $attributes['halfBackground']) {
        $content .= 'has-half-background ';
    }
    if(isset($attributes['halfTopBackground']) && $attributes['halfTopBackground']) {
        $content .= 'has-half-top-background ';
    }

    $content .= '">';

    $content .= '
        <div class="container large" style="background-image: url(' . $image['url'] . '">
            <div class="content">
                <h6>' . $attributes['subtitle'] . '</h6>
                <h2>' . $attributes['title'] . '</h2>
                <p>' . $attributes['content'] . '</p>';

    if(isset($attributes['link']) && isset($attributes['linklabel'])) {
        $content .= '<a href="' . $attributes['link'] . '" class="secondary button with-icon">' . $attributes['linklabel'] . '</a>';
    }

    $content .= '
            </div>
        </div>
    </section>';

    return $content;
  }