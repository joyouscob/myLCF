<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Page - Designer
 * Description: Page template with no breadcrumbs, title or sidebar. You will need to begin by defining the bootstrap span tags
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
  	<?php the_content();?>
<?php endwhile; // end of the loop. ?>
  </div>
</div>

<?php get_footer(); ?>

</body>
</html>