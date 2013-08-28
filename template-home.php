<?php
/*
Template Name: Custom Homepage Template
*/
?>

<?php echo do_shortcode("[image-carousel showcaption=\"false\" category=\"homepage\"]") ?>

<!--
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <!-- Carousel items
  <div class="carousel-inner">
    <div class="active item"><img src="<?php bloginfo('template_directory'); ?>/assets/img/blue.png">
    </div>
    <div class="item"><img src="<?php bloginfo('template_directory'); ?>/assets/img/orange.png">
    </div>
  </div>
  <!-- Carousel nav
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>-->

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