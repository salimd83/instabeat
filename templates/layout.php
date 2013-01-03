<!DOCTYPE HTML>
<html>
	
	<head profile="http://www.w3.org/2005/10/profile">
		<link rel="icon" 
		      type="image/png" 
		      href="./favicon.png">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="keyword" content="">
		<meta name="description" content="Instabeat is a heart rate monitor for swimming 
										  mounted on your goggles, with real-time visual 
										  feedback and no chest belt!">
			
		<link rel="stylesheet" href="css/reset.css" type="text/ccs">
		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/main.css" type="text/ccs">
		
		<title>Instabeat :: take control of your swim!</title>
		
		<!-- HTML5 Shiv + detect touch events -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>

		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   6000,		// Length between transitions
					horizontal_center		:   1,
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1400,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'images/background-1.jpg', title : ''},
														{image : 'images/background-2.jpg', title : ''},  
														{image : 'images/background-3.jpg', title : ''}
												]
					
				});
		    });
		    
		</script>
	</head>

	<body>
		
		<header class="main">
			<nav id="main-menu">
				<ul>
					<li><a href="product.html">Pre-order</a></li>
					<li class="selected"><a href="index.html">Home</a></li>
				</ul>
			</nav>
			
			<div id="logo" class="wrapper">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
		</header>
		
		<section id="body" class="wrapper">
			
			<?php echo $content; ?>
			
		</section> <!-- END #body -->
		
		<footer class="wrapper">
			
			<div class="left">
				<nav>
					<a href="#">About Instabeat |</a>
					<a href="#">Smart swimming |</a>
					<a href="#">Product Tour |</a>
					<a href="#">Support |</a>
					<a href="#">Store |</a>
				</nav>
				<span>Copyrights reserved &copy;  Instabeat 2012</span>
			</div>
			
			<aside>
				<h5>Join The Community</h5>
				<nav>
					<a href="https://www.facebook.com/Butterfleye">Facebook<span>.</span></a>
					<a href="https://twitter.com/butterfleyeproj">Twitter<span>.</span></a>
					<a href="http://pinterest.com/instabeat/">Pinterest<span>.</span></a>
					<a href="http://www.linkedin.com/company/butterfleye">Linkedin<span>.</span></a>
					<a href="http://www.flickr.com/photos/instabeat/">Flickr<span>.</span></a>
					<a href="https://vimeo.com/user14915424">Vimeo</a>
				</nav>
			</aside>
			<div class="clear"></div>
		</footer>
		
	</body>
</html>