<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Online Blood Bank System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vibrant Signin Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Exo:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /font files  -->
<!-- css files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
</head>
<body>
<h1>Admin Login Form</h1>
<div class="content-w3ls"> 
 	<form action="#" method="post">
		<div class="form-group1">
			<label class="email-w3ls">Email Address</label>
			<input type="email" name="email" value="EMAIL@ADDRESS.COM" onfocus="this.value = '';" 
			onblur="if (this.value == '') {this.value = 'EMAIL@ADDRESS.COM';}">
		</div>
		<div class="form-group2">
			<label class="pwd-w3ls">Password</label>
			<input type="password" name="password" value="ENTER PASSWORD" onfocus="this.value = '';" 			
			onblur="if (this.value == '') {this.value = 'ENTER PASSWORD';}">
		</div>
		<div class="form-group3">
			<label class="pwd-w3ls">Confirm Password</label>
			<input type="password" name="confirmpassword" value="ENTER PASSWORD" onfocus="this.value = '';" 			
			onblur="if (this.value == '') {this.value = 'ENTER PASSWORD';}">
		</div>
		<!--<div class="form-group4">
			<p class="gender-agile">Gender</p>
			<ul class="gender-w3ls">
				<li>
					<input type="radio" id="f-option" name="selector">
					<label for="f-option">Male</label>
					<div class="check"></div>
				</li>
				<li>
					<input type="radio" id="s-option" name="selector">
					<label for="s-option">Female</label>
					<div class="check"><div class="inside"></div></div>
				</li>
			</ul>	
		</div>-->
		<!--<div class="form-group5">
			<p class="time-w3ls">Choose Time</p>
			<input type="text" id="timepicker" name="Time" class="timepicker form-control" value="Hrs:Min">
		</div>-->
		<input type="submit" value="LOG IN" name="login">
	</form>
</div>
<?php
include("config.php");
if(isset($_POST['login']))
{
	$query="select * from admin where email='".$_POST['email']."' and password='".$_POST['password']."' and confirmpassword='".$_POST['confirmpassword']."'";
	$res=mysqli_query($con,$query) or die(mysqli_error($con));
	if(mysqli_num_rows($res)>0)
	{
		session_start();
		$row=mysqli_fetch_array($res);
		$_SESSION['email']=$row['email'];
		echo "<script>";
		echo "alert('Login successfully');";
		echo "window.location.href='home.php';";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Login Failled');";
		echo "window.location.href='index.php';";
		echo "</script>";
	}
}
?>
<div class="footer-agile">
	<!--<p>© 2016 Vibrant Signin Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>-->
</div>	
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
<!-- /js files -->
</body>
</html>
