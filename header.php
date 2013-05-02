<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up to end of navigation>
 *
 * @package WordPress

 */
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php
	// Detect Yoast SEO Plugin
	if (defined('WPSEO_VERSION')) {
		wp_title('');
	} else {
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'smpl' ), max( $paged, $page ) );
	}
	?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Link default stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_directory'); ?>/js/google-code-prettify/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
	<div class="container palette-white">
		<div class="row demo-row">
			<div class="span6">
				<div class="lcf-logo"><img src="<?php bloginfo('template_directory'); ?>/img/assets/logo.png"></div>
			</div>
			<div class="span6">
				<div class="social hidden-phone">
					<ul>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/assets/twitter.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/assets/map.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/assets/podcast.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/assets/instagram.png"></a></li>
					<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/assets/facebook.png"></a></li>
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