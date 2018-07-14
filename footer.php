<?php
/**
 * Footer Template
 *
 * @category Templates
 * @package  Bones
 * @author   Level Up Digital
 */

?>
<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'footer_top' ) ) { ?>
					<?php dynamic_sidebar( 'footer_top' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'footer_bottom' ) ) { ?>
					<?php dynamic_sidebar( 'footer_bottom' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="footer-credits">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				</div>
				<div class="col-xs-12 col-sm-6">
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
</body>
</html>
