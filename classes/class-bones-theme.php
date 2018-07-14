<?php
/**
 * Core Theme
 *
 * @category Core
 * @package  Bones
 * @author   Level Up Digital
 */

if ( ! class_exists( 'Bones_Theme' ) ) {

	/**
	 * Class Bones_Theme
	 */
	class Bones_Theme {

		/**
		 * Theme Version
		 */
		const VERSION = '1.0.0';

		/**
		 * Bones_Theme constructor.
		 */
		public function __construct() {
			$this->load_classes();
			$this->set_hooks();
			$this->set_theme_support();
		}

		/**
		 * Loads the classes needed
		 */
		public function load_classes() {
			require BONES_DIR . 'classes/class-bones-blocks.php';
			new Bones_Blocks();
		}

		/**
		 * Sets the theme hooks
		 */
		public function set_hooks() {
			add_action( 'wp_enqueue_scripts', [ $this, 'get_assets' ] );
		}

		/**
		 * Loads the theme assets
		 */
		public function get_assets() {
			wp_enqueue_style( 'main', get_theme_root_uri( 'assets/css/main.css' ), array(), $this->get_version(), 'all' );
		}

		/**
		 * Returns the theme version
		 *
		 * @return string
		 */
		public function get_version() {
			return self::VERSION;
		}

		/**
		 * Sets the theme support
		 */
		public function set_theme_support() {
			add_theme_support( 'title-tag' );
		}

	}

}
