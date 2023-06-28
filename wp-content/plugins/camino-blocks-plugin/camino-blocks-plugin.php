<?php
/**
 * Plugin Name:       Camino Blocks Plugin
 * Description:       Camino blocks written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Klevis Miho
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       camino-blocks-plugin
 *
 * @package           create-block
 */

include('includes/camino_about.php');
include('includes/camino_background_with_content.php');
include('includes/camino_latest_publication.php');
include('includes/camino_values_slider.php');
include('includes/camino_latest_posts.php');
include('includes/camino_what_we_do.php');
include('includes/camino_statistics.php');
include('includes/camino_our_values.php');
include('includes/camino_our_mission.php');
include('includes/camino_our_services.php');
include('includes/camino_content_with_image.php');
include('includes/camino_latest_research.php');
include('includes/camino_top_contributors.php');
include('includes/camino_media_discussions.php');
include('includes/camino_surveys.php');
include('includes/camino_team.php');
include('includes/camino_timeline.php');
include('includes/camino_services_sectors.php');
include('includes/camino_bibliography.php');
include('includes/camino_contact.php');
include('includes/camino_boxes.php');
include('includes/camino_testimonials.php');
include('includes/camino_events.php');
include('includes/camino_community_research.php');
include('includes/camino_campaigns.php');
include('includes/camino_donate.php');
include('includes/camino_publications.php');
include('includes/camino_impact.php');
include('includes/camino_brand_assets.php');
include('includes/camino_media_team.php');
include('includes/camino_contact_form.php');


function create_block_camino_blocks_plugin_block_init() {

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/events', array(
		'render_callback' => 'camino_events'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/about', array(
		'render_callback' => 'camino_about'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/latest-publication', array(
		'render_callback' => 'camino_latest_publication'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/background-with-content', array(
		'render_callback' => 'camino_background_with_content'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/values-slider', array(
		'render_callback' => 'camino_values_slider'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/latest-posts', array(
		'render_callback' => 'camino_latest_posts'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/what-we-do', array(
		'render_callback' => 'camino_what_we_do'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/statistics', array(
		'render_callback' => 'camino_statistics'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/our-values', array(
		'render_callback' => 'camino_our_values'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/our-mission', array(
		'render_callback' => 'camino_our_mission'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/our-services', array(
		'render_callback' => 'camino_our_services'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/content-with-image', array(
		'render_callback' => 'camino_content_with_image'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/latest-research', array(
		'render_callback' => 'camino_latest_research'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/top-contributors', array(
		'render_callback' => 'camino_top_contributors'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/media-discussions', array(
		'render_callback' => 'camino_media_discussions'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/surveys', array(
		'render_callback' => 'camino_surveys'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/team', array(
		'render_callback' => 'camino_team'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/timeline', array(
		'render_callback' => 'camino_timeline'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/services-sectors', array(
		'render_callback' => 'camino_services_sectors'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/bibliography', array(
		'render_callback' => 'camino_bibliography'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/contact', array(
		'render_callback' => 'camino_contact'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/boxes', array(
		'render_callback' => 'camino_boxes'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/testimonials', array(
		'render_callback' => 'camino_testimonials'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/community-research', array(
		'render_callback' => 'camino_community_research'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/campaigns', array(
		'render_callback' => 'camino_campaigns'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/donate', array(
		'render_callback' => 'camino_donate'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/publications', array(
		'render_callback' => 'camino_publications'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/impact', array(
		'render_callback' => 'camino_impact'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/brand-assets', array(
		'render_callback' => 'camino_brand_assets'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/media-team', array(
		'render_callback' => 'camino_media_team'
	) );

	register_block_type_from_metadata( plugin_dir_path( __FILE__ ) . 'blocks/contact-form', array(
		'render_callback' => 'camino_contact_form'
	) );

}
add_action( 'init', 'create_block_camino_blocks_plugin_block_init' );
