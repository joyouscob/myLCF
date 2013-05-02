<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage smpl
 * @since smpl 0.1
 */

get_header();
 
?>

		
		<div id="myCarousel" class="carousel slide">
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		  </ol>
		  <!-- Carousel items -->
		  <div class="carousel-inner">
		    <div class="active item"><img src="<?php bloginfo('template_directory'); ?>/img/blue.png">
		    </div>
		    <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/orange.png">
		    </div>
		  </div>
		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>

		<!-- Row of feature units -->
	      <div class="row demo-row">
	        <div class="span4 large-tile palette-amethyst">
	          <div class="large-tile-header"><h2><span class="fui-bubble-24 feature-icon"></span>Latest Tweets</h2></div>
	          	<div class="feature-inner">
		          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          	</div>
	        </div>
	        <div class="span4 large-tile palette-amethyst">
	          <div class="large-tile-header"><h2><span class="fui-calendar-24 feature-icon"></span>This month</h2></div>
	          	<div class="feature-inner">
	          		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          	</div>
	       </div>
	        <div class="span4 large-tile palette-amethyst">
	          <div class="large-tile-header"><h2><span class="fui-volume-24 feature-icon"></span>Podcast</h2></div>
	          	<div class="feature-inner">
		          	<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	          	</div>
	        </div>
	      </div>
	      
	      <!-- Row of small feature units -->
	      <div class="row demo-row">
	        <div class="span3">
	          <div class="tile">
	            <img class="tile-image big-illustration" alt="" src="<?php bloginfo('template_directory'); ?>/img/assets/mylcf-feature.png" />
	            <h3 class="tile-title">Get involved</h3>
	            <p>Become a partner of LCF and get involved.</p>
	            <a class="btn btn-primary btn-large btn-block" href="#">Find out more</a>
	          </div>
	        </div>

		    <div class="span3">
	          <div class="tile tile-hot">
	            <img class="tile-image" alt="" src="<?php bloginfo('template_directory'); ?>/img/assets/twitter-feature.png" />
	            <h3 class="tile-title">Catch up</h3>
	            <p>Follow us on twitter to keep up with what's happening.</p>
	            <a class="btn btn-primary btn-large btn-block" href="#">Follow us</a>
	          </div>
	        </div>
	
	        <div class="span3">
	          <div class="tile">
	            <img class="tile-image" alt="" src="<?php bloginfo('template_directory'); ?>/img/assets/route96-feature.png" />
	            <h3 class="tile-title">Route 96</h3>
	            <p>Aged 14 - 19 year old? Then come along on a friday.</p>
	            <a class="btn btn-primary btn-large btn-block" href="#">Find out more</a>
	          </div>
	        </div>
	
	        <div class="span3">
	          <div class="tile">
	            <img class="tile-image big-illustration" alt="" src="<?php bloginfo('template_directory'); ?>/img/illustrations/gift.png" />
	            <h3 class="tile-title">Donate</h3>
	            <p>Want to find out more about giving to LCF</p>
	            <a class="btn btn-primary btn-large btn-block" href="#">Giving</a>
	          </div>
		      </div>
	      </div>
	</div>	
	<?php get_footer(); ?> 	  
  </body>
</html>