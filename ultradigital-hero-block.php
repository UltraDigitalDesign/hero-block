<?php
/**
 *
 * @link https://ultradigital.design
 * @since 1.0.0
 * @package OPB
 *
 * Plugin Name: Ultra Digital Hero Block
 * Plugin URI: https://github.com/UltraDigitalDesign/hero-block
 * Description: The Hero Block is created to work with the Gutenberg content editor. It displays a hero block commonly used on most websites as the first marketing block users see.
 * Author: Organic Themes
 * Author URI: https://ultradigital.design
 * Version: 1.3
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'OPB_VERSION' ) ) {
	define( 'OPB_VERSION', '1.3' );
}

if ( ! defined( 'OPB_NAME' ) ) {
	define( 'OPB_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined( 'OPB_DIR' ) ) {
	define( 'OPB_DIR', WP_PLUGIN_DIR . '/' . OPB_NAME );
}

if ( ! defined( 'OPB_URL' ) ) {
	define( 'OPB_URL', WP_PLUGIN_URL . '/' . OPB_NAME );
}

/**
 * BLOCK: Profile Block.
 */
require_once( OPB_DIR . '/block/profile/index.php' );
