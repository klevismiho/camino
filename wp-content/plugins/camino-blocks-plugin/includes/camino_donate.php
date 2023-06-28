<?php

function camino_donate($attributes) {

    // Parse attributes
    $image = $attributes['image'];
    $image_url = $image['sizes']['full']['url'];
    $image_alt = $image['alt'];

	$content = '
    <section class="section-donate">
        <div class="container flex">
            <div class="column image-column" style="background-image: url(' . $image['url'] . ')" /images/donate.jpg)">
                <div class="inner">
                    <h2>' . $attributes['title'] . '</h2>
                    <p>' . $attributes['content'] . '</p>
                </div>
            </div>
            <div class="column donation-column">
                ' .  do_shortcode( '[give_form id="71"]' ) . '
            </div>
        </div>
    </section>';

	return $content;
}