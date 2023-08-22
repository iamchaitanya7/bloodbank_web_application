<?php
include("config.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("Location:../index.php");
}
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
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="update_profile.php">Update Profile</a></li>
					<li><a  href="donate.php">Blood Donated</a></li>
                    <li><a href="view_donation.php">View Donation</a></li>
                    <li><a href="view_request.php">View Request</a></li>
					
					<li><a href="Change_password.php">Camps</a></li>
					<!--<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="typo.html">Short Codes</a></li>
						<li><a href="icons.html">Icons Page</a></li>
					  </ul>
					</li>-->
					<li><a href="logout.php">Logout</a></li>
                    <li><a href="search.php">Search</a></li>
                    
                   
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Donor Registration</h2>
				<div class="w3-about-top">
				<div class="col-md-2 w3ls-about-top-left-grid"></div>
                <div class="col-md-8 w3ls-about-top-left-grid">
					<div class="panel panel-primary" style="color:#000">
  					<div class="panel-heading" align="center" style="font-size:24px">Donor Registration</div>
  					<div class="panel-body">
    					<form method="post" enctype="multipart/form-data" id="registrationForm">
                        <table class=" table table-bordered table-responsive" style="color:#000">
                        <tr><td>Donor Name</td><td><input type="text" class="form-control validate[required]" name="donor_name"></td></tr>
                        <tr><td>Gender</td><td><input type="radio" name="gender" value="Male" checked="checked">Male&nbsp;&nbsp;&nbsp;<input type="radio" class="" name="gender" value="Female">Female</td></tr>
                        <tr><td>Age</td><td><input type="text" class="form-control validate[required]" name="age"></td></tr>
                        <tr><td>Mobile No</td><td><input type="text" class="form-control  validate[optional,custom[integer],minSize[10],maxSize[12]]" name="mobile_no"></td></tr>
                        <tr><td>Blood Group</td><td><select name="blood_group" class="form-control validate[required]">
                        <option>-------Select Bloodgroup-------</option>
						<?php
						$q="select * from bloodgroup";
						$r=mysqli_query($con,$q);
						while($row=mysqli_fetch_array($r))
						{
							?>
                            <option value="<?php echo $row['bloodgroupname'] ?>"><?php echo $row['bloodgroupname'] ?></option>
                            <?php
						}
						?>
                        </td></tr>
                        <tr><td>Email</td><td><input type="email" class="form-control validate[required,custom[email]]" name="email"></td></tr>
                        <tr><td>Password</td><td><input type="password" class="form-control validate[required,minSize[6]]" name="password" ></td></tr>
                        <tr><td>Confirm Password</td><td><input type="password" class="form-control validate[required,minSize[6],equals[txt_password]]" name="cpassword"></td></tr>
                        <tr><td>Profile Image</td><td><input type="file" class="form-control" name="photo"></td></tr>
                        <tr><td colspan="2" align="center"><input type="submit" name="save" value="Doner Registration" class="btn btn-success"> &nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Clear" class="btn btn-danger"></td></tr>
                        </table>
                        </form>
                        <?php
						
						if(isset($_POST['save']))
						{
								$name=$_FILES['photo']['name'];
								$size=$_FILES['photo']['size'];
								$type=$_FILES['photo']['type'];

								$temp=$_FILES['photo']['tmp_name'];

								move_uploaded_file($temp,"profile/".$name);
						$query="insert into donor_registration(donor_name,gender,age,mobile_no,blood_group,email,password,cpassword,img,type)values('".$_POST['donor_name']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['mobile_no']."','".$_POST['blood_group']."','".$_POST['email']."','".$_POST['password']."','".$_POST['cpassword']."','".$name."','".$type."')";
						$res=mysqli_query($con,$query) or die(mysqli_error($con));
						if($res)
						{
							echo "<script>";
							echo "alert('Record Inserted Successfully');";
							echo "window.location.href='donor_registration.php';";
							echo "</script>";
						}
						else
						{
							echo "<script>";
							echo "alert('Record Not Inserted ');";
							echo "window.location.href='donor_registration.php';";
							echo "</script>";
						}
					}
						?>
  					</div>
					</div>
					
				</div>
				<div class="col-md-2 w3ls-about-top-left-grid"></div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<?php /*?><!-- team -->
			<div class="w3layouts-team-bg">
		<div class="container">
		<div class="w3ls-team">
			<h3>Our Team</h3>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
		</div>
		<div class="agile-its-about-grid1">
			<div class="col-md-4 w3l-member-team">
			<div class=" bottom-team">
				<div class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/mem1.jpg" alt="" />
						<div class="b-wrapper">
									<div class="b-animate b-from-top    b-delay03 ">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>	
									</div>
								</div>
	                      </div>
				</div>
				<h4>Michael Clerk</h4>
				<span>CEO</span>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>	
			</div>
			<div class="col-md-4 w3l-member-team">
				<div class=" bottom-team">
				<div class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/mem2.jpg" alt="" />
						<div class="b-wrapper">
									<div class="b-animate b-from-top    b-delay03 ">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>	
									</div>
								</div>
	                      </div>
				</div>
				<h4>John Smith</h4>
				<span>Manager</span>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>	
			</div>
			<div class="col-md-4 w3l-member-team">
				<div class="bottom-team">
				<div class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/mem3.jpg" alt="" />
						<div class="b-wrapper">
									<div class="b-animate b-from-top    b-delay03 ">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>	
									</div>
								</div>
	                      </div>
				</div>
				<h4>Christopher</h4>
				<span>Asst. Manager</span>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>	
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	</div>	
	<!-- //team -->
	<!-- advantages -->
	<div class="agile-info-advantages">
		<div class="container">
			<h3>Our Advantages</h3>
			<p class="vel">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
			<div class="w3-agileits-our-advantages-grids">
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>1.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>2.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>3.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>4.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>5.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>6.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //advantages --><?php */?>
		</section>
</div>
		
		<!--clients-->
			<div class="w3layouts-clients">
				<div class="container">
					<h3>SOME OF OUR CLIENTS</h3>
					<div class="flex-slider">
						<ul id="flexiselDemo1">			
							<li>
								<img src="images/c1.png" alt=""/>
							</li>
							<li>
								<img src="images/c2.png" alt=""/>
							</li>
							<li>
								<img src="images/c3.png" alt=""/>
							</li>
							<li>
								<img src="images/c4.png" alt=""/>
							</li>
						</ul>
						<script type="text/javascript">
										$(window).load(function() {
											$("#flexiselDemo1").flexisel({
												visibleItems: 4,
												animationSpeed: 1000,
												autoPlay: true,
												autoPlaySpeed: 3000,    		
												pauseOnHover: true,
												enableResponsiveBreakpoints: true,
												responsiveBreakpoints: { 
													portrait: { 
														changePoint:414,
														visibleItems: 1
													}, 
													landscape: { 
														changePoint:667,
														visibleItems: 2
													},
													tablet: { 
														changePoint:991,
														visibleItems: 3
													}
												}
											});
											
										});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>
				</div>
			</div>
			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="w3ls-footer-grids">					
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
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>Copy Rights</h4>
						<p>&copy; 2016 Business Strategy. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
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