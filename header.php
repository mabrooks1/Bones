<?php
/**
 * Header Template
 *
 * @category Templates
 * @package  Bones
 * @author   Level Up Digital
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="header-top">
		<div class="container<?php echo( get_theme_mod( 'bones_header_top_size' ) === 'fullwidth' ? '-fluid' : ' ' ); ?>">
			<div class="row">

			</div>
		</div>
	</div>
	<div class="header-middle">
		<div class="container<?php echo( get_theme_mod( 'bones_header_middle_size' ) === 'fullwidth' ? '-fluid' : ' ' ); ?>">
			<div class="row">

			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container<?php echo( get_theme_mod( 'bones_header_bottom_size' ) === 'fullwidth' ? '-fluid' : ' ' ); ?>">
			<div class="row">

			</div>
		</div>
	</div>
</header>
