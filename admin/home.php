<?php
session_start();
include("config.php");
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

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
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="bloodbank.php"><i class="fa fa-hospital-o"></i>Blood Bank</a>
                    </li>
					<li>
                        <a href="view_donor.php"><i class="fa fa-th-list"></i>View Donor</a>
                    </li>
					<li>
                        <a href="search_donor.php"><i class="fa fa-search"></i>Search Donor</a>
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

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard <small>Summary of your App</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                                <?php
								$q="select * from blood_bank";
								$r=mysqli_query($con,$q);
								$count=mysqli_num_rows($r);
								?>
                                <h3><?php echo $count; ?></h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                Blood Bank

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                 <?php
								$q="select * from donor_registration";
								$r=mysqli_query($con,$q);
								$count=mysqli_num_rows($r);
								?>
                                <h3><?php echo $count; ?></h3>

                            </div>
                            <div class="panel-footer back-footer-blue">
                                No.of Donor

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa fa-comments fa-5x"></i>
                                <?php
								$q="select * from blood_request";
								$r=mysqli_query($con,$q);
								$count=mysqli_num_rows($r);
								?>
                                <h3><?php echo $count; ?></h3>

                            </div>
                            <div class="panel-footer back-footer-red">
                                Blood Request                            </div>
                        </div>
                    </div>
                   
                </div>


               
                <!-- /. ROW  -->
				<!--<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
-->            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>