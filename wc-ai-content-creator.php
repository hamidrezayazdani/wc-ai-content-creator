<?php
/**
 * Plugin Name: WooCommerce AI Content Creator
 * Plugin URI: https://github.com/hamidrezayazdani
 * Description: Adds AI content generation capabilities to WooCommerce products with customizable prompts.
 * Version: 1.0.0
 * Requires at least: 5.8
 * Requires PHP: 7.4
 * Author: HamidReza Yazdani
 * Author URI: https://github.com/hamidrezayazdani
 * Text Domain: wc-ai-content-creator
 * Domain Path: /languages
 * WC requires at least: 5.0.0
 * WC tested up to: 8.0.0
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package WC_AI_Content_Creator
 */

defined( 'ABSPATH' ) || exit;

// Plugin constants
define( 'WCAI_VERSION', '1.0.0' );
define( 'WCAI_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WCAI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WCAI_PLUGIN_FILE', __FILE__ );

// Initialize plugin
require_once WCAI_PLUGIN_DIR . 'includes/class-wcai-loader.php';

add_action( 'init', array( 'WCAI_Loader', 'init' ) );