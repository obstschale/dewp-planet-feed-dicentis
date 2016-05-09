<?php

/**
 * @since             0.1.0
 * @package           DEWP Planet Feed Dicentis Podcast Extension
 *
 * @wordpress-plugin
 * Plugin Name:       DEWP Planet Feed Podcast Extension
 * Plugin URI:        http://github.com/obstschale/dewp-planet-feed-dicentis
 * Description:       Simple Plugin which extends DEWP Planet Feed and adds support for CPT Podcast
 * Version:           0.1.0
 * Author:            Hans-Helge Buerger
 * Author URI:        http://hanshelgebuerger.de/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function dewp_planet_feed_dicentis__add_podcast_cpt( $post_types ) {
	array_push( $post_types, 'dipo_podcast' );
	return $post_types;
}

add_filter( 'wp_planet_feed__post_types', 'dewp_planet_feed_dicentis__add_podcast_cpt' );

