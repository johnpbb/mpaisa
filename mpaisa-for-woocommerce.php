<?php
/**
 * Plugin Name: mPaisa for WooCommerce
 * Version: 1.1.0
 * Description: Integrates mPaisa Payment Gateway with WooCommerce.
 * Text Domain: mpaisa-for-woocommerce
 * Domain Path: /languages
 * Requires at least: 5.3
 * Requires PHP: 5.6
 */

namespace mPaisa\WC;

// Bailout, if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/config/constants.php';

// Automatically loads files used throughout the plugin.
require_once MPAISA4WC_PLUGIN_DIR . 'vendor/autoload.php';

// Initialize the plugin.
$plugin = new Plugin();
$plugin->register();
