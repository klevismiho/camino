<?php 

function camino_contact($attributes) {
	
    // Parse attributes
    $image = $attributes['image'];
    $image_url = $image['sizes']['full']['url'];
    $image_alt = $image['alt'];

    $content = '<section class="section-background-with-content gs_reveal">
        <div class="container" style="background-image: url(' . $image['url'] . '">
            <div class="content">
                <h6>' . $attributes['subtitle'] . '</h6>
                <h2>' . $attributes['title'] . '</h2>
                <p>' . $attributes['content'] . '</p>
                <div class="buttons">';
    
                if(isset($attributes['link_1']) && isset($attributes['linklabel_1'])) {
                    $content .= '<a target="_blank" href="' . $attributes['link_1'] . '" class="secondary button with-icon">' . $attributes['linklabel_1'] . '</a>';
                }
                if(isset($attributes['link_2']) && isset($attributes['linklabel_2'])) {
                    $content .= '<a target="_blank" href="' . $attributes['link_2'] . '" class="secondary button with-icon">' . $attributes['linklabel_2'] . '</a>';
                }
    
    $content .= '
                </div>
            </div>
        </div>
    </section>';

    return $content;
  }