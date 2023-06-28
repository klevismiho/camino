<?php

function camino_latest_publication($attributes) {

    $image = $attributes['image'];
    $image_url = $image['sizes']['full']['url'];
    $image_alt = $image['alt'];


    $content = '<section class="section-publication">
        <div class="container">
        <img src="' . $image_url . '" alt="' . $image_alt . '" width="910" height="450" loading="lazy" />
            <div class="card gs_reveal">
                <h6>' . $attributes['subtitle'] . '</h6>
                <h2>' . $attributes['title'] . '</h2>
                <p>' . $attributes['content'] . '</p>
                <a href="https://simplebooklet.com/revisedcarpdf" target="_blank" class="primary button with-icon">' . __('Find Out More', 'camino'). '</a>
            </div>
        </div>
    </section>';
    
    return $content;
}