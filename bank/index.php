<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>BloodBank Login</title>
<!-- Custom Theme files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<!--header start here-->
<h2>Login form</h2>
			<div class="login-top">
				<h1>Blood Bank User login</h1>
				<form method="post" >
               <!-- <table>
                <tr><td><input type="text" name="username" ></td></tr>
                <tr><td><input type="password" name="password" ></td></tr>
                -->
					<input type="text"  value="User name" name="username"onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
					<input type="password"  value="Password" name="password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'password';}"/>
				<!--<label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i> Remember Me</label>-->
				<!--</table>-->
               <!-- <p><a href="#">Forgot Password</a></p>-->
                <div class="clear"></div>
				<div class="log-bwn">	
					<!--<a href="#">Sign in	</a>-->
					<input type="submit" value="Sign in" class="btn" name="login" >
				</div>
				<h4>Don’t have an account?  <a href="reg.php"> Register now </a> </h4>
			</div>
			</form>
            
            <?php
			include("config.php");
			if(isset($_POST['login']))
			{
				$query="select * from blood_bank where username='".$_POST['username']."' and password='".$_POST['password']."' and status='Approve'";
				$res=mysqli_query($con,$query) or die(mysqli_error($con));
				//echo $query;
				if(mysqli_num_rows($res)>0)
				{
					$row=mysqli_fetch_array($res);
					session_start();
					$_SESSION['username']=$row['username'];
					$_SESSION['bankname']=$row['bankname'];
					$_SESSION['email']=$row['email'];
					$_SESSION['state']=$row['state'];
					$_SESSION['district']=$row['district'];
					$_SESSION['taluka']=$row['taluka'];
					//header("Location:home.php");
					 echo "<script>";
	 			 echo "alert('Login Successfully');";
	 			 echo"window.location.href='home.php';";
	 			 echo "</script>";
				}
				else
				{
					echo "<script";
					echo "alert('Login failed! Please check Usrename and Password');";
					echo "window.location.href='index.php';";
					echo "</script>";
					
				}
			}
			?>
		  <style>
		  .btn{
		  background-image: url(images/button.png);
    	  width: 129px;
          height: 50px;
          color: #FFF;}
	</style>
<!--header start here-->
</body>
</html>