<?php
/**
 * Plugin Name: OchiGallery - Gutenberg Custom Post Type Post Feed
 * Description: Creates new block to select post type and category to show posts feed.
 * Author: Dave Mozdzanowski
 * Author URI: https://davejmoz.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
