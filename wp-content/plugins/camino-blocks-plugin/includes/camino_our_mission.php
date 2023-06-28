<?php

function camino_our_mission($attributes) {

    $image_1 = $attributes['image_1'];
    $image_2 = $attributes['image_2'];

	$content = '
        <section class="section-our-mission">
            <div class="container">
                <div class="item-wrapper">
                    <h4>' . __('Mission', 'camino') . '</h4>
                    <div class="item" style="background-image: url(' . $image_1['url'] . ');">
                        <div class="item-content">
                            <h3>' . $attributes['subtitle_1'] . '</h3>
                        </div>
                    </div>
                </div>
                <div class="item-wrapper">
                    <h4>' . __('Vision', 'camino') . '</h4>
                    <div class="item" style="background-image: url(' . $image_2['url'] . ');">
                        <div class="item-content">
                            <h3>' . $attributes['subtitle_2'] . '</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    ';

	return $content;
}