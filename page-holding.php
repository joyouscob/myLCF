<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Page - Holding
 * Description: Page template header and footer removed to be used as a redirect / site maintainance page
 *
 * @package WordPress
 * @subpackage myLCF
 * @since myLCF 0.1
 *
 * Last Revised: May 07, 2013
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
                                   
    <?php wp_head(); ?>
  </head>

  <body>
	<div class="container palette-white">

	<?php while ( have_posts() ) : the_post(); ?>
	  <div class="row">
	  	<?php the_content();?>
	<?php endwhile; // end of the loop. ?>
	  </div>
	</div>

	<?php wp_footer(); ?>
    
  </body>
</html>