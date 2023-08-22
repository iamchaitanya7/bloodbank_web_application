<?php
include("config.php");
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Online Blood Bank System</title>    
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business Strategy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->

<!-- validation-->

<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/template.css" type="text/css"/>
	<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#registrationForm").validationEngine();
		});
            
	</script>
    
    
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
</head>
<body>
	<div class="w3-slider">	
	<!-- header -->
	<header>
		<div class="w3layouts-top-strip">
			<div class="container-fluid">
				<div class="w3ls-social-icons">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+040 185 999</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></li>
					</ul>
				</div>
				<div class="logo text-center">
					<h1><a href="index.php">Online Blood Bank</a></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
		<div class="w3layouts-inner-banner">
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a  href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="donor_registration.php">Donor Registration</a></li>
                    <li><a href="send_request.php" >Send Request</a></li>
                    <li><a href="view_request.php">View Request</a></li>
					
					<li><a class="active" href="camp.php">Camps</a></li>
					<!--<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="typo.html">Short Codes</a></li>
						<li><a href="icons.html">Icons Page</a></li>
					  </ul>
					</li>-->
					<li><a href="login.php">Log In</a></li>
                    <li><a href="search.php">Search</a></li>
                    
                    <li><a href="contact.php">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- Portfolio -->
		<div class="agileits Portfolio">
			<div class="container">
				<h2 class="agile-inner-title">Gallery</h2>
				<!-- Portfolio -->
      <!-- Gallery Section -->
<div class="gallery">
		<section id="gallery" class="parallax section">
					<div class="row">
                    <?php
					

//$query='select *from fruit  '; 	
	include('config.php');
	//$res=mysqli_query($con,$query);
	
	/*?>echo $query;<?php */
			   @mysqli_query($con,"SET NAMES 'utf8'",$id); /// Its very inportant to display or insert unicode characters in db 
$res = @mysqli_query($con,"SELECT * FROM gallery where camp_id='".$_GET['id']."'",$id);
				while($row = @mysqli_fetch_array($res))
					{
					?>
        
       						<div class="col-md-4 col-sm-4 ggrids">
							<a href="admin/gallery/<?php echo $row['img']; ?>" title="">
							<img src="admin/gallery/<?php echo $row['img']; ?>" alt="" />
								<div class="description">
									<span class="caption"><?php echo $row['image_name']; ?></span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
                        <?php
					}
	
							
					?>			
						<?php /*?><div class="col-md-4 col-sm-4 ggrids">
							<a href="images/2.jpg" title="This is the description">
							<img src="images/2.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggrids">
							<a href="images/3.jpg" title="This is the description">
							<img src="images/3.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggrids">
							<a href="images/4.jpg" title="This is the description">
							<img src="images/4.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggrids">
							<a href="images/5.jpg" title="This is the description">
							<img src="images/5.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggrids">
							<a href="images/6.jpg" title="This is the description">
							<img src="images/6.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggrids">
							<a href="images/1.jpg" title="This is the description">
							<img src="images/1.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggrids">
							<a href="images/2.jpg" title="This is the description">
							<img src="images/2.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-4 ggrids">
							<a href="images/3.jpg" title="This is the description">
							<img src="images/3.jpg" alt="" />
								<div class="description">
									<span class="caption">Project title</span> 
									<span class="camera"></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div><?php */?>
					</div>	
				</section>
</div>
<!-- For Gallery Section -->
	<script src="js/jquery.localScroll.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/common.js"></script>
<!--// For Gallery Section -->
<!-- //Gallery Section -->
      <!-- /Portfolio -->
			</div>
		</div>
		<!-- // Portfolio -->
		</div>
		<!-- //main-content -->
		<!-- footer -->
			<footer>
			<div class="container">
				<!--<div class="w3ls-footer-grids">					
					<div class="col-md-3 w3l-footer-grid">
						<h4>ADDRESS</h4>
						<ul>
							<li>BS Business Strategy</li>
							<li>4111 Deer Haven Drive Greenville, SC 29601 </li>
							<li>Hours: Mon-Fri 9am - 6:00pm</li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>GET IN TOUCH</h4>
						<ul>
							<li>Tel: +1 234-567-890</li>
							<li>Fax: +1 646-216-9789</li>
							<li>Email: <a href="mailto:info@example.com">info@yourdomain.com </a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>SUBSCRIBE NOW</h4>
						<form action="#" method="post">
							<input type="email" name="email" placeholder="Enter your email" required>
							<input type="submit" value=" ">
						</form>
					</div>-->
					<div class="col-md-12 w3l-footer-grid" align="center">
						<h4></h4>
						<p>Copy Rights &copy; 2017 - All Rights Reserved By - Online Blood Bank System</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
		<!-- //footer -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->	
</body>
</html>