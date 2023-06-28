<?php 

function camino_bibliography($attributes) {

	$bibliography = get_posts(array(
        'post_type' => 'bibliography',
        'posts_per_page' => 20
    ));

	$content = '<section class="section-bibliography">
        <div class="container">
            <h2>' . $attributes['title'] . '</h2>
            <p>' . $attributes['content'] . '</p>
            <div class="buttons">
                <a target="_blank" href="' . $attributes['downloadLink'] . '" class="dark secondary button with-icon" aria-label="View more about the full bibliography">' . __('View full bibliography', 'camino') . '</a>
                <a href="mailto:research@camino.org" class="dark secondary button with-icon">' . __('Contact us for access', 'camino') . '</a>
            </div>
                    <ul>';
                    foreach($bibliography as $post) {
                        $content .= '<li>' . get_the_title($post) . '</li>';
                    }
    $content .= '
                    </ul>
                </div>
            </div>
        </div>
    </section>';

	return $content;
}