<?php
/**
 * Core Customize
 *
 * @category Core
 * @package  Bones
 * @author   Level Up Digital
 */

if ( ! class_exists( 'Bones_Customize' ) ) {

	/**
	 * Class Bones_Customize
	 */
	class Bones_Customize {

		/**
		 * Bones_Customize constructor.
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register_options' ) );
		}

		/**
		 * Register the theme options
		 *
		 * @param WP_Customize_Manager $wp_customize The WP_Customize_Manager object.
		 */
		public function register_options( $wp_customize ) {
			$this->register_ajax_loading( $wp_customize );
		}

		/**
		 * Register ajax loading option
		 *
		 * @param WP_Customize_Manager $wp_customize The WP_Customize_Manager object.
		 */
		public function register_ajax_loading( $wp_customize ) {
		}

	}

}
