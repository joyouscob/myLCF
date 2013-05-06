<footer>
	  		<div class="container">
		  		<div class="row">
		  			<div class="span7">
		  				<?php
			  				if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-widget");
			  				?>
		  				<a class="footer-brand" href="http://www.perspectivedesign.co.uk" target=_blank><img src="<?php bloginfo('template_directory'); ?>/img/assets/logo-fade.png">Copyright 2013 Perspective Design</a>
		  			</div>
		  			<div class="span5">
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
	  		</div>
	  	</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.2.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>  
       
    <script>
	function fixHeight() {
		var currentTallest = 0,
		     currentRowStart = 0,
		     rowDivs = new Array(),
		     $el,
		     topPosition = 0;
		 $('.height-fix').each(function() {
		
		   $el = $(this);
		   topPostion = $el.position().top;
		   
		   if (currentRowStart != topPostion) {
		
		     // we just came to a new row.  Set all the heights on the completed row
		     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		       rowDivs[currentDiv].height(currentTallest);
		     }
		
		     // set the variables for the new row
		     rowDivs.length = 0; // empty the array
		     currentRowStart = topPostion;
		     currentTallest = $el.height();
		     rowDivs.push($el);
		
		   } else {
		
		     // another div on the current row.  Add it to the list and check if it's taller
		     rowDivs.push($el);
		     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		
		  }
		   
		  // do the last row
		   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		     rowDivs[currentDiv].height(currentTallest);
		   }
		   
		 });
		}
		
	fixHeight();

	$(window).resize(function(){
    	fixHeight();
    	})		
    </script>