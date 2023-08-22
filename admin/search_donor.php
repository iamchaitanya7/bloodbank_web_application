<?php
include("config.php");
session_start();
//
//if(!isset($_SESSION['username']))
//{
//	header("Location:../index.php");
//}
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Blood Bank System</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

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
    
    <!---------------------------bootstrap--------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Bloodbank</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <?php /*?><li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li><?php */?>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <!-- <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>-->
                        <li><a href="changepassword.php"><i class="fa fa-gear fa-fw"></i> Settings/Change password</a>
                         </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="bloodbank.php"><i class="fa fa-hospital-o"></i>Blood Bank</a>
                    </li>
					<li>
                        <a href="view_donor.php"><i class="fa fa-th-list"></i>View Donor</a>
                    </li>
					<li>
                        <a class="active-menu" href="search_donor.php"><i class="fa fa-search"></i>Search Donor</a>
                    </li>
					<li>
                        <a href="view_request.php"><i class="fa fa-th-list"></i>View Request</a>
                    </li>
                    <li>
                        <a href="bloodgroup.php"><i class="fa fa-plus"></i>Blood Group</a>
                    </li>
					
                    <li>
                        <a href="addcamp.php"><i class="fa fa-plus"></i> Add Camp</a>
                    </li>
                    <li>
                        <a href="addgallery.php"><i class="fa fa-plus"></i> Add Gallery</a>
                    </li>

                    <!-- <li>
                        <a href="addnews.php"><i class="fa fa-qrcode"></i> Add News</a>
                    </li> -->
                   <!-- <li>
                        <a href="add_advertisement.php"><i class="fa fa-qrcode"></i> Add Advertisement</a>
                    </li>-->
                    <li>
                       <!-- <a href=""><i class="fa fa-table"></i> Website Management</a>-->
                        <button class="btn btn-block btn-info">Website Management</button>
                    </li>
                    <!--<li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
                    </li>-->


                    <li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <!--  <li>
                                <a href="generalsetting.php">General Setting</a>
                            </li>
                            <li>
                                <a href="logo.php">Logo</a>
                            </li>-->
                            <li>
                                <a href="addslider.php">Slider Images</a>
                            </li>
                           <!-- <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>-->
                        </ul>
                    </li>
                    
                     <!-- <li>
                        <a href="#"><i class="fa fa-gear fa-list"></i> Menu Manager <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addmenu.php">Add Menu</a>
                            </li>
                            <li>
                                <a href="viewmenu.php">View / Edit Menu</a>
                            </li>
                            
                        </ul>
                    </li>
                    -->
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>

            </div>

        </nav>		<!-- //navigation -->
		<!-- //main-content -->
		 <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        <i class="wi wi-sprinkle"></i>
                           Search Doner
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
               <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                   
                      </div>
                      </div>
                            
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Search Donor
                        </div>
                        <div class="panel-body">
                        <div style="overflow:scroll">
                            <div class="table-responsive">
							
				<div class="col-md-3 w3ls-about-top-left-grid"></div>
                <div class="col-md-6 w3ls-about-top-left-grid">
					<div class="panel panel-primary" style="color:#000">
  					<div class="panel-heading" align="center" style="font-size:24px">Search</div>
  					<div class="panel-body">
    					<script type="text/javascript">
$(document).ready(function(){
  $("#state").change(function(){
        var state = $("#state option:selected").val();
		
        $.ajax({
            type: "POST",
            url: "data.php", 
            data: { state : state } 
        }).success(function(result){
            $("#district").html(result);
        });
    });
});
$(document).ready(function(){
  $("#district").change(function(){
	  var state = $("#state option:selected").val();
        var district = $("#district option:selected").val();
		
        $.ajax({
            type: "POST",
            url: "loadSubject.php", 
            data: { district : district,state:state } 
        }).success(function(result){
            $("#city").html(result);
        });
    });
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!----This link is important for dependent drop drop----------------->
                        <form method="post" enctype="multipart/form-data" id="registrationForm" action="result.php">
                        <table class=" table table-bordered table-responsive" style="color:#000">
                        <tr><td>Blood Group</td><td><select name="blood_group" class="form-control" id="fetchval">
                        <option>------Select Bloodgroup-----</option>
						<?php
						$q="select * from bloodgroup";
						$r=mysqli_query($con,$q);
						while($row=mysqli_fetch_array($r))
						{
							?>
                            <option value="<?php echo $row['bloodgroupname'] ?>"><?php echo $row['bloodgroupname'] ?></option>
                            <?php
						}
						?></select>
                        </td></tr>
                          <tr>
                <td>State</td>
                 <td>
                    <select class=" c form-control validate[required] " name="state"  id="state">
                        <option value="" selected="selected">--Select state--</option>
                        <?php
						require 'config.php';
						$sql="select DISTINCT state from statecity";
						$result=mysqli_query($con,$sql) or die(mysqli_error());
						while($row=mysqli_fetch_array($result))
						{?>
							<option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
						<?php }
						?>
                       
                    </select>
                </td>
            </tr>
            <tr>
                <td>District</td>
                 <td>
                    <select class="form-control validate[required]" id="district" name="district">
                        <option value="" selected="selected">--Select District--</option>
                    
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>Taluka</td>
                <td>
                    <select class="form-control validate[required]" name="city" size="1" 
                    id="city">
		  <option value="" selected="selected" >--Taluka--</option>
		
		</select>
                </td>
            </tr>
                        
                        <tr><td colspan="2" align="center"><input type="submit" name="save" value="Search" class="btn btn-success"> &nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Clear" class="btn btn-danger"></td></tr>
                        </table>
                        </form>
                        </div>
					</div>
                       <?php /*?> 
                        <?php
						
						if(isset($_POST['save']))
						{
								
						$query="select * from donor_registration where blood_group='".$_POST['blood_group']."'and state='".$_POST['state']."'and district='".$_POST['district']."'and city='".$_POST['city']."'";
						$res=mysqli_query($con,$query) or die(mysqli_error($con));
						if(mysqli_num_rows($res)>0)
						{
						?>
                        <table class="table table-bordered">
                        <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Mobile No.</th>
                        <th>Blood Group</th>
                        <th>Email</th>
                        <th>Image</th>
                        </tr>
                        <?php
						while($row=mysqli_fetch_array($res))
						{
							?>
                            <tr>
                            <td><?php echo $row['donor_name'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['age'] ?></td>
                            <td><?php echo $row['mobile_no'] ?></td>
                            <td><?php echo $row['blood_group'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><img src="../profile/<?php echo $row['img'] ?>" style="width:150px; height:100px"></td>
                            </tr>
                            <?php
						}
						}
						else
						{
							echo "<script>";
							echo "alert('Result Not Found');";
							echo "</script>";
						}
						
					}
						?><?php */?>
                        </table>
  					
					
				</div>
				<div class="col-md-3 w3ls-about-top-left-grid"></div>
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
		
		
</body>
</html>