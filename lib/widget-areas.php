<?php
/**
 * Widget Areas
 *
 * @package      B4Genesis
 * @since        1.0
 * @link         http://www.recommendwp.com
 * @author       RecommendWP <www.recommendwp.com>
 * @copyright    Copyright (c) 2017, RecommendWP
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Register Sidebar Function
add_action( 'init', 'b4g_register_sidebars' );
function b4g_register_sidebars() {
	// Register Custom Sidebars
	genesis_register_sidebar( array(
		'id' => 'home-featured',
		'name' => __( 'Home Featured', 'b4genesis' ),
		'description' => __( 'This is the home featured area. It uses the jumbotron bootstrap section.', 'bfg' )
	) );
}
