<div class="container palette-white">
		<div class="row demo-row">
			<div class="span6">
				<div class="lcf-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png"></div>
			</div>
			<div class="span6">
				<div class="social hidden-phone">
					<ul>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/twitter.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/map.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/podcast.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/instagram.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/assets/img/facebook.png"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<div class="navbar navbar-inverse">
					<div class="navbar-inner">
						<div class="container">
							<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
						      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </a>
							    <?php
						           /** Loading WordPress Custom Menu  **/
						           wp_nav_menu( array(
						              'menu'            => 'primary_navigation',
						              'container_class' => 'nav-collapse',
						              'menu_class'      => 'nav',
						              'fallback_cb'     => '',
						              'menu_id' => 'main-menu',
						          ) ); ?>						    
						</div>
					</div>
				</div>
			</div>
		</div> <!-- End navigation -->
</div>