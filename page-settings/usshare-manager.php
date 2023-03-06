<?php
namespace USShare\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'usshare_breadcrumb_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'usshare_breadcrumb_register_document_controls' ] );
	}

	public function usshare_breadcrumb_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'Unique Social Share', 'unique-social-share' ) );
	}

	public function usshare_breadcrumb_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'usshare_breadcrumb_new_section',
			[
				'label' => esc_html__( 'Settings', 'unique-social-share' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'usshare_breadcrumb_text',
			[
				'label' => esc_html__( 'Title', 'unique-social-share' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'unique-social-share' ),
			]
		);

		$document->end_controls_section();
	}
}
