<?php 

function camino_services_sectors($attributes) {

	$services = get_posts(array(
        'post_type' => 'services-sectors',
        'posts_per_page' => 20,
        'tax_query' => array(
            array (
                'taxonomy' => 'services-sectors-type',
                'field' => 'slug',
                'terms' => 'service',
            )
        ),
    ));

    $sectors = get_posts(array(
        'post_type' => 'services-sectors',
        'posts_per_page' => 20,
        'tax_query' => array(
            array (
                'taxonomy' => 'services-sectors-type',
                'field' => 'slug',
                'terms' => 'sector',
            )
        ),
    ));

	$content = '<section class="section-services-sectors">
        <div class="container">
            <h2>' . $attributes['title'] . '</h2>
            <p>' . $attributes['content'] . '</p>
            <div class="columns">
                <div class="column">
                    <h5>' . __('Services', 'camino') . ':</h5>
                    <ul>';
                    foreach($services as $service) {
                        $content .= '<li>' . get_the_title($service) . '</li>';
                    }
    $content .= '</ul>
                </div>
                <div class="column">
                    <h5>' . __('Sectors', 'camino') . '</h5>
                    <ul>';
                    foreach($sectors as $sector) {
                        $content .= '<li>' . get_the_title($sector) . '</li>';
                    }
    $content .= '
                    </ul>
                </div>
            </div>
        </div>
    </section>';

	return $content;
}