<footer>
	  		<div class="container">
		  		<div class="row">
		  			<div class="span7">
		  				<h3 class="footer-title">This is the footer title</h3>
		  				<p class="footer-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  				<a class="footer-brand" href="http://www.perspectivedesign.co.uk" target=_blank><img src="<?php bloginfo('template_directory'); ?>/img/assets/logo-fade.png">Copyright 2013 Perspective Design</a>
		  			</div>
		  			<div class="span5">
		  				<div class="footer-banner">
		  					<h3 class="footer-title">Other Information</h3>
		  					<ul>
		  						<li><a href="#">News</a></li>
		  						<li><a href="#">Our Building</a></li>
		  						<li><a href="#">Planning Center</a></li>
		  						<li><a href="#">Leadership</a></li>
		  						<li><a href="#">Podcast</a></li>
		  					</ul>
		  					This is some other footer text with a <a href="#">Hyperlink</a>
		  				</div>
		  			</div>
		  		</div>	
	  		</div>
	  	</footer>
	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>  
       
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