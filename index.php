<!DOCTYPE HTML>
<html>
	
	<head profile="http://www.w3.org/2005/10/profile">
		<link rel="icon" 
		      type="image/png" 
		      href="./favicon.png">
		<meta charset="utf-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="keyword" content="">
		<meta name="description" content="Instabeat is a heart rate monitor for swimming 
										  mounted on your goggles, with real-time visual 
										  feedback and no chest belt!">
			
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/supersized.css" media="screen" />
		<link rel="stylesheet" href="css/main.css">
		
		<title>Instabeat :: Master your swim!</title>
		
		<!-- HTML5 Shiv + detect touch events -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
	</head>

	<body id="home">
		
		<header class="main">
			<nav id="main-menu">
				<ul>
					<li><a href="press.php">Press Room</a></li>
					<li><a href="http://instabeat.me/blog" target="_blank">Blog</a></li>
					<li><a href="product.php">Pre-order</a></li>
					<li class="selected"><a href="index.php">Home</a></li>
				</ul>
			</nav>
			
			<div id="logo" class="wrapper">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
		</header>
		
		<section id="body" class="wrapper">
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
			
			<div class="left">
				<h1>TAKE CONTROL OF YOUR SWIM!</h1>
				<p>
					Instabeat is the first waterproof heads-up monitor that tracks, stores, and displays instant 
					feedback of your heart rate during your swim to optimize your training and allow you to achieve 
					your peak performance.
				</p>
			</div> <!-- END .left -->
			
			<aside>
				<a href="product.php">
					<!-- <h4>Pre-order yours now!</h4>
					<h1>$149</h1>
					<p>
						Ready? Get Set. 
						Start tracking your performance!
					</p> -->
				</a>
			</aside>
			<div class="clear"></div>
		</section> <!-- END #body -->
		
		<footer class="wrapper">
			
			<div class="left">
				<!-- <nav>
					<a href="#">About Instabeat |</a>
					<a href="#">Smart Swimming |</a>
					<a href="product.php">Product Tour |</a>
					<a href="#">Support |</a>
					<a href="#">Store |</a>
				</nav> -->
				<span>Copyrights reserved &copy;  Instabeat 2012</span>
			</div>
			
			<aside>
				<h5>Join The Community</h5>
				<nav>
					<a href="https://www.facebook.com/myinstabeat" target="_blank">
						<img src="images/icons-light/facebook.png" alt="" />
					</a>
					<a href="https://twitter.com/myinstabeat" target="_blank">
						<img src="images/icons-light/twitter.png" alt="" />
					</a>
					<!-- <a href="http://pinterest.com/instabeat/" target="_blank">
						<img src="images/icons-light/printerest.png" alt="" />
					</a> -->
					<a href="http://www.linkedin.com/company/butterfleye" target="_blank">
						<img src="images/icons-light/linked-in.png" alt="" />
					</a>
					<a href="http://www.flickr.com/photos/instabeat/" target="_blank">
						<img src="images/icons-light/flickr.png" alt="" />
					</a>
					<a href="https://vimeo.com/user14915424" target="_blank">
						<img src="images/icons-light/vimeo.png" alt="" />
					</a>
				</nav>
			</aside>
			<div class="clear"></div>
		</footer>
		

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-30995048-7']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</body>
</html>