<?php

function camino_boxes($attributes) {

    $image_1 = $attributes['image_1'];
    $image_1_url = $image_1['sizes']['full']['url'];
    $image_1_alt = $image_1['alt'];
    $link_1 = $attributes['link_1'];

    $image_2 = $attributes['image_2'];
    $image_2_url = $image_2['sizes']['full']['url'];
    $image_2_alt = $image_2['alt'];
    $link_2 = $attributes['link_2'];

    $image_3 = $attributes['image_3'];
    $image_3_url = $image_3['sizes']['full']['url'];
    $image_3_alt = $image_3['alt'];
    $link_3 = $attributes['link_3'];

    $content = '<section class="section-boxes">
        <div class="container">
            <div class="services-grid">
                <a href="' . $link_1 . '" class="service-item">
                    <div class="image-wrapper">
                        <img src="' . $image_1_url . '" alt="' . $image_1_alt . '" />
                    </div>
                    <div class="item-content">
                        <h3>' . $attributes['title_1'] . '</h3>
                        <p>' . $attributes['content_1'] . '</p>
                    </div>
                </a>
                <a href="' . $link_2 . '" class="service-item">
                    <div class="image-wrapper">
                        <img src="' . $image_2_url . '" alt="' . $image_2_alt . '" />
                    </div>
                    <div class="item-content">
                        <h3>' . $attributes['title_2'] . '</h3>
                        <p>' . $attributes['content_2'] . '</p>
                    </div>
                </a>
                <a href="' . $link_3 . '" class="service-item">
                    <div class="image-wrapper">
                        <img src="' . $image_3_url . '" alt="' . $image_3_alt . '" />
                    </div>
                    <div class="item-content">
                        <h3>' . $attributes['title_3'] . '</h3>
                        <p>' . $attributes['content_3'] . '</p>
                    </div>
                </a>
            </div>
        </div>
    </section>';

    return $content;
}