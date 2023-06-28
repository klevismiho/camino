<?php

function camino_about($attributes) {

    $image = $attributes['image'];
    $image_url = $image['sizes']['full']['url'];
    $image_alt = $image['alt']; 

    $content = '<section class="section-about ';

    if(isset($attributes['fullBackground']) && $attributes['fullBackground']) {
        $content .= 'has-background ';
    }    
    if(isset($attributes['halfBackground']) && $attributes['halfBackground']) {
        $content .= 'has-half-background';
    }    

    $content .= '">';

    $content .= '<div class="container">
            <img src="' . $image_url . '" alt="' . $image_alt . '" width="910" height="450" loading="lazy" />
            <div class="card">
                <h6>' . $attributes['subtitle'] . '</h6>
                <h2>' . $attributes['title'] . '</h2>
                <p>' . $attributes['content'] . '</p>
                <a href="' . $attributes['link'] . '" class="primary button with-icon">' . $attributes['linklabel'] . '</a>
            </div>
        </div>
    </section>';
    
    return $content;
}