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
			$this->register_theme_options( $wp_customize );
			$this->register_header_options( $wp_customize );
		}

		/**
		 * Register ajax loading option
		 *
		 * @param WP_Customize_Manager $wp_customize The WP_Customize_Manager object.
		 */
		public function register_header_options( $wp_customize ) {
			$wp_customize->add_setting( 'bones_header_top_size', array(
				'transport' => 'refresh',
			) );

			$wp_customize->add_control( 'bones_header_top_size', array(
				'label'   => __( 'Header Top Size', 'Bones' ),
				'section' => 'bones_options',
				'choices' => array(
					'fullwidth' => 'Full Width',
					'contained' => 'Contained',
				),
				'type'    => 'select',
			) );

			$wp_customize->add_setting( 'bones_header_middle_size', array(
				'transport' => 'refresh',
			) );

			$wp_customize->add_control( 'bones_header_middle_size', array(
				'label'   => __( 'Header Middle Size', 'Bones' ),
				'section' => 'bones_options',
				'choices' => array(
					'fullwidth' => 'Full Width',
					'contained' => 'Contained',
				),
				'type'    => 'select',
			) );

			$wp_customize->add_setting( 'bones_header_bottom_size', array(
				'transport' => 'refresh',
			) );

			$wp_customize->add_control( 'bones_header_bottom_size', array(
				'label'   => __( 'Header Bottom Size', 'Bones' ),
				'section' => 'bones_options',
				'choices' => array(
					'fullwidth' => 'Full Width',
					'contained' => 'Contained',
				),
				'type'    => 'select',
			) );
		}

		/**
		 * Register theme options panel
		 *
		 * @param WP_Customize_Manager $wp_customize The WP_Customize_Manager object.
		 */
		public function register_theme_options( $wp_customize ) {
			$wp_customize->add_section( 'bones_options', array(
				'title'    => 'Theme Options',
				'priority' => 30,
			) );
		}

	}

}
