<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
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
  	<div class="span8">
  		<?php if ( function_exists( 'bootstrapwp_breadcrumbs' ) ) bootstrapwp_breadcrumbs(); ?>
		<header class="page-title">
        	<h1><?php the_title();?></h1>
        </header>
        <div class="content">
	        <?php the_content();?>
        </div>
<?php endwhile; // end of the loop. ?>
  	</div>

          <?php get_sidebar(); ?>


<?php get_footer(); ?>
