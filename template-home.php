<?php
/*
Template Name: Custom Homepage Template
*/
?>

<!-- Feature Carousel (uses CPT Bootstrap Carousel Plugin) -->
<?php echo do_shortcode("[image-carousel showcaption=\"false\" category=\"homepage\"]") ?>

<!-- Row of feature units -->
<div class="row demo-row">
	<?php dynamic_sidebar('homepage-area1'); ?>
	
	<?php dynamic_sidebar('homepage-area2'); ?>
	
	<?php dynamic_sidebar('homepage-area3'); ?>
</div>
	      
<!-- Row of small feature units -->
<div class="row demo-row">
	<?php dynamic_sidebar('homepage-cta1'); ?>
	
	<?php dynamic_sidebar('homepage-cta2'); ?>
		
	<?php dynamic_sidebar('homepage-cta3'); ?>
			
	<?php dynamic_sidebar('homepage-cta4'); ?>
</div>