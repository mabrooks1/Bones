<?php
/**
 * Class CoreTest
 *
 * @package Bones
 */

/**
 * Tests the Core classes.
 */
class CoreTest extends WP_UnitTestCase {

	/**
	 * Test the theme construct.
	 */
	function test_theme_construct() {
		new Bones_Theme();
		$this->assertTrue( true );
	}

	/**
	 * Test the theme version.
	 */
	function test_theme_version() {
		$bones_theme = new Bones_Theme();

		if (is_string($bones_theme->get_version())) {
			$this->assertTrue( true );
		} else {
			$this->assertTrue( false );
		}
	}

	/**
	 * Test the theme blocks.
	 */
	function test_theme_blocks() {
		$theme_blocks = new Bones_Blocks();
		$this->assertTrue( true );
	}
}
