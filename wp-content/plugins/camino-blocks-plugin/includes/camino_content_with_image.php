<?php 

function camino_content_with_image($attributes) {
	
    $image = $attributes['image'];

    $content = '<section class="section-content-with-image">
        <div class="container">
            <div class="column content-column">
                <div class="inner">
                    <h6>' . $attributes['subtitle'] . '</h6>
                    <h2>' . $attributes['title'] . '</h2>
                    ' . $attributes['content'];

                    if(isset($attributes['link']) && isset($attributes['linklabel'])) {
                        $content .= '<a href="' . $attributes['link'] . '" class="primary button with-icon">' . $attributes['linklabel'] . '</a>';
                    }                    

    $content .= '   
                </div>
            </div>
            <div class="column image-column">';
    if($image) {
        $content .= '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
    }

    $content .= '
            </div>
        </div>
    </section>';

    return $content;
  }