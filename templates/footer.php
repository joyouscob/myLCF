<footer>
	<div class="row footer-row">
		<div class="span7 footer-left">
			<?php
				if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-widget");
				?>
			<a class="footer-brand" href="http://www.perspectivedesign.co.uk" target=_blank><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-fade.png">Copyright 2013 Perspective Design</a>
		</div>
		<div class="span5 footer-right">
			<div class="footer-banner">
				<h3 class="footer-title">Other Information</h3>
				<?php
	           /** Loading WordPress Custom Menu  **/
	           wp_nav_menu( array(
	              'theme_location' => 'footer_menu',
	          ) ); ?>
				This is some other footer text with a <a href="#">Hyperlink</a>
			</div>
		</div>
	</div>	
</footer>

<?php wp_footer(); ?>