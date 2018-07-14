<?php
/**
 * Functions File
 *
 * @category Core
 * @package  Bones
 * @author   Level Up Digital
 */

if ( ! defined( 'BONES_DIR' ) ) {
	define( 'BONES_DIR', trailingslashit( get_theme_file_path() ) );
}

require BONES_DIR . 'classes/class-bones-theme.php';

global $bones_class;

$bones_class = new Bones_Theme();
