<?php
namespace USShare;

use USShare\PageSettings\Page_Settings;
define( "USSHARE_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/public" );
define( "USSHARE_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

class ClassUSShareBoots {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function usshare_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'usshare_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function usshare_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'usshare_the_breadcrumb_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}
		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/unique-social-share-widget.php' );
	}

	public function usshare_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		// From PowerPack
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\USShareWidget() );
	}

	private function add_page_settings_controls() {
		require_once( __DIR__ . '/page-settings/usshare-manager.php' );
		new Page_Settings();
	}

	// Register Category
	function usshare_add_elementor_widget_categories( $elements_manager ) {
		$elements_manager->add_category(
			'bwdthebest_general_category',
			[
				'title' => esc_html__( 'BWD General Group', 'unique-social-share' ),
				'icon' => 'eicon-person',
			]
		);
	}

	public function usshare_all_assets_for_the_public(){
		$all_css_js_file = array(
			'usshare-breadcrumb-style-decorating' => array('usshare_path_define'=>USSHARE_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/decorating.css'),
			'usshare-breadcrumb-style' => array('usshare_path_define'=>USSHARE_ASFSK_ASSETS_PUBLIC_DIR_FILE . '/css/style.css'),
		);
		foreach($all_css_js_file as $handle => $fileinfo){
			wp_enqueue_style( $handle, $fileinfo['usshare_path_define'], null, '1.0', 'all');
		}
	}

	public function usshare_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
			'usshare_breadcrumb_admin_icon_css' => array('usshare_path_admin_define'=>USSHARE_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
		);

		foreach($all_css_js_file as $handle => $fileinfo){
			wp_enqueue_style( $handle, $fileinfo['usshare_path_admin_define'], null, '1.0', 'all');
		}
	}

	public function __construct() {
		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'usshare_all_assets_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'usshare_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'usshare_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'usshare_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'usshare_admin_editor_scripts' ] );
		
		$this->add_page_settings_controls();
	}
}

// Instantiate Plugin Class
ClassUSShareBoots::instance();