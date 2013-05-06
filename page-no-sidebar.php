<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Page - No Sidebar
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage myLCF
 * @since myLCF 0.1
 *
 * Last Revised: May 06, 2013
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
  	<div class="span12">
  		<?php if ( function_exists( 'bootstrapwp_breadcrumbs' ) ) bootstrapwp_breadcrumbs(); ?>
		<header class="page-title">
        	<h1><?php the_title();?></h1>
        </header>
        <div class="content">
	        <?php the_content();?>
        </div>
<?php endwhile; // end of the loop. ?>
  	</div>
  </div>
</div>

<?php get_footer(); ?>
