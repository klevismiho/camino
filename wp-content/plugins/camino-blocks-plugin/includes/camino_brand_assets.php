<?php 

function camino_brand_assets($attributes) {

	$brands = get_posts(array(
		'post_type' => 'brand-asset',
		'posts_per_page' => 20,
		'posts_status' => 'publish'
	));
	
	$content = '<section class="section-brand-assets">
        <h2>' . __('Brand Assets', 'camino') . '</h2>
        <div class="container flex">';

        foreach($brands as $brand) {

            $content .= '<div class="item">
                ' . get_the_post_thumbnail($brand) . '
                <h4>' . __('Press materials', 'camino') . '</h4>
                <div class="buttons">';
                if( get_field( 'logos', $brand ) ) {
                    $content .= '<a target="_blank" href="' . get_field( 'logos', $brand ) . '" class="button with-icon">' . __('Logos', 'camino') . '</a>';
                }
                if( get_field( 'press_images', $brand ) ) {
                    $content .= '<a target="_blank" href="' . get_field( 'press_images', $brand ) . '" class="button with-icon">' . __('Press images', 'camino') . '</a>';
                }
                if( get_field( 'fact_sheet', $brand ) ) {
                    $content .= '<a target="_blank" href="' . get_field( 'fact_sheet', $brand ) . '" class="button with-icon">' . __('Fact sheet', 'camino') . '</a>';
                }

            $content .='
                </div>
            </div>';
        }
            
    $content .= '
        </div>
    </section>';

	return $content;
}