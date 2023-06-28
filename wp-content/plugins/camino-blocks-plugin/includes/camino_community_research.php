<?php

function camino_community_research($attributes) {

    $image_1 = $attributes['image_1'];
    $image_2 = $attributes['image_2'];
    $image_3 = $attributes['image_3'];
    $image_4 = $attributes['image_4'];

	$content = '
        <section class="section-community-research">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="sticky">
                            <h2>' . $attributes['title'] . '</h2>
                        </div>
                    </div>
                    <div class="column">
                        <ul>
                            <li>
                                <img src="' . $image_1['url'] . '" alt="' . $image_1['alt'] . '" />
                                <h5>Conducting research with communities</h5>
                            </li>
                            <li>
                                <img src="' . $image_2['url'] . '" alt="' . $image_2['alt'] . '" />
                                <h5>Leveraging asset based approaches</h5>
                            </li>
                            <li>
                                <img src="' . $image_3['url'] . '" alt="' . $image_3['alt'] . '" />
                                <h5>Dedication to community improvement</h5>
                            </li>
                            <li>
                                <img src="' . $image_4['url'] . '" alt="' . $image_4['alt'] . '" />
                                <h5>Shared power and decision making</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>';

	return $content;
}