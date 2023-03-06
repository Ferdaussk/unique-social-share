<?php
/**
 * Plugin Name: Unique Social Share
 * Description: Unique Social Share plugin with 23+ types of  Share Effects for Elementor.
 * Plugin URI:  https://bwdplugins.com/plugins/unique-social-share
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: unique-social-share
 * Elementor tested up to: 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/requires-check.php';

final class Final_USSHARE_Share{ 

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'usshare_init', array( $this, 'usshare_loaded_textdomain' ) );

		// usshare_init Plugin
		add_action( 'plugins_loaded', array( $this, 'usshare_init' ) );
	}

	public function usshare_loaded_textdomain() {
		load_plugin_textdomain( 'unique-social-share' );
	}

	public function usshare_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			// elementor activation check
			add_action( 'admin_notices','usshare_share_register_required_plugins');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'usshare_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'usshare_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'usshare_plugin_boots.php' );
	}

	public function usshare_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'unique-social-share' ),
			'<strong>' . esc_html__( 'Unique Social Share', 'unique-social-share' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'unique-social-share' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'unique-social-share') . '</p></div>', $message );
	}

	public function usshare_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'unique-social-share' ),
			'<strong>' . esc_html__( 'Unique Social Share', 'unique-social-share' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'unique-social-share' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'unique-social-share') . '</p></div>', $message );
	}
}

// Instantiate unique-social-share.
new Final_USSHARE_Share();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );