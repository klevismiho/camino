<?php

function camino_our_values($attributes) {

	$content = '
    <section class="section-values">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="sticky">
                        <h2>' . $attributes['title'] . '</h2>
                        <p>' . $attributes['content'] . '</p>
                    </div>
                </div>
                <div class="column">
                    <ul>
                        <li>
                            <img src="' . get_template_directory_uri() . '/images/value-1.png" alt="' . $attributes['subtitle_1'] . '" />
                            <div class="text">
                                <h5>' . $attributes['subtitle_1'] . '</h5>
                                <p>' . $attributes['subcontent_1'] . '</p>
                            </div>
                        </li>
                        <li>
                            <img src="' . get_template_directory_uri() . '/images/value-2.png" alt="' . $attributes['subtitle_1'] . '" />
                            <div class="text">
                                <h5>' . $attributes['subtitle_2'] . '</h5>
                                <p>' . $attributes['subcontent_2'] . '</p>
                            </div>
                        </li>
                        <li>
                            <img src="' . get_template_directory_uri() . '/images/value-3.png" alt="' . $attributes['subtitle_1'] . '" />
                            <div class="text">
                                <h5>' . $attributes['subtitle_3'] . '</h5>
                                <p>' . $attributes['subcontent_3'] . '</p>
                            </div>
                        </li>
                        <li>
                            <img src="' . get_template_directory_uri() . '/images/value-4.png" alt="' . $attributes['subtitle_1'] . '" />
                            <div class="text">
                                <h5>' . $attributes['subtitle_4'] . '</h5>
                                <p>' . $attributes['subcontent_4'] . '</p>
                            </div>
                        </li>
                        <li>
                            <img src="' . get_template_directory_uri() . '/images/value-5.png" alt="' . $attributes['subtitle_1'] . '" />
                            <div class="text">
                                <h5>' . $attributes['subtitle_5'] . '</h5>
                                <p>' . $attributes['subcontent_5'] . '</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>';

	return $content;
}