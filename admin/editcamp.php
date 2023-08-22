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
                        <a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>
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
                        <a class="active-menu"  href="addcamp.php"><i class="fa fa-plus"></i> Add Camp</a>
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
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                        <i class="wi wi-sprinkle"></i>
                            Edit Camp
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
               <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit camp
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                           <!DOCTYPE html>
<script src="ckeditor/config.js"></script>
<script src="ckeditor/ckeditor.js"></script>
        <!--<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>-->
    
        <!--<textarea name="editor1"></textarea>-->
       
    
                             <!--<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>-->
                             <!--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                        <!-- <script type="text/javascript">
$(document).ready(function(){
  $("select.c").change(function(){
        var s = $(".c option:selected").val();
		
        $.ajax({
            type: "POST",
            url: "process.php", 
            data: { c : s  } 
        }).done(function(data){
            $("#sub").html(data);
        });
    });
});
</script> -->
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
          
<?php
if(isset($_GET['id']))
{ 
$query='select * from addcamp where id="'.$_GET['id'].'"';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
                   <form method="post" action="" enctype="multipart/form-data">
                            <table class="table table-bordered">
                            <tr><td>Camp Title</td><td><input type="text" name="camp_title" value="<?php echo $row['camp_title']; ?>" class="form-control"></td></tr>
                            <tr><td>Organized By</td><td><input type="text" name="organized_by" value="<?php echo $row['organized_by'] ?> "class="form-control" 
                            value="<?php echo $row['pin_code']; ?>"></td></tr>
                            <tr><td>From</td><td><input type="date" name="frm_date" class="form-control" value="<?php echo $row['frm_date'] ?>"></td></tr>
                            <tr><td>To</td><td><input type="date" name="to_date" class="form-control" value="<?php echo $row['to_date'] ?>"></td></tr>
                             <!-- <tr><td>State</td><td><select name="state" class=" c form-control">
                             <option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
                            <option>---Select State---</option>
                            <?php
							$q="select * from state";
							$r=mysqli_query($con,$q);
							while($row1=mysqli_fetch_array($r))
							{
							?>
                            <option value="<?php echo $row1['state'] ?>"><?php echo $row1['state'] ?></option>
                            <?php
							}
							?>
                            </select>
                            </td></tr>
                            <tr><td>City</td><td><select id="sub" name="city"  style="color:#000;" class="form-control validate[required]" required>
                            <option value="<?php echo $row['city'] ?>" selected="selected"><?php echo $row['city'] ?></option>
      <option value=""   >--------Select City-----------</option>
      </select>
                            </td></tr> -->
                             <tr>
                <td>State</td>
                 <td>
                    <select class=" c form-control validate[required] " name="state"  id="state">
                       <option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
                        <?php
                        require 'config.php';
                        $sql="select DISTINCT state from statecity";
                        $result=mysqli_query($con,$sql) or die(mysqli_error());
                        while($row11=mysqli_fetch_array($result))
                        {?>
                            <option value="<?php echo $row11['state'];?>"><?php echo $row11['state'];?></option>
                        <?php }
                        ?>
                       
                    </select>
                </td>
            </tr>
                             <!-- <tr><td>State</td><td><select name="state" id="state" class=" c form-control">
                             <option value="<?php //echo $row['state'];?>"><?php //echo $row['state'];?></option>
                            <option>---Select State---</option>
                            <?php
                            // $q="select * from state";
                            // $r=mysqli_query($con,$q);
                            // while($row1=mysqli_fetch_array($r))
                            // {
                            // ?>
                            // <option value="<?php //echo $row1['state'] ?>"><?php //echo $row1['state'] ?></option>
                            // <?php
                            // }
                            ?>
                            </select>
                            </td></tr> -->
                            <tr><td>District</td><td><select id="district" name="district"  style="color:#000;" class="form-control validate[required]" required>
                            <option value="<?php echo $row['district'] ?>" selected="selected"><?php echo $row['district'] ?></option>
      <option value=""   >--------Select district-----------</option>
      </select>
                            </td></tr>
                            <tr><td>City</td><td><select id="city" name="city"  style="color:#000;" class="form-control validate[required]" required>
                            <option value="<?php echo $row['city'] ?>" selected="selected"><?php echo $row['city'] ?></option>
      <option value=""   >--------Select City-----------</option>
      </select>
                            </td></tr>
                            <tr><td>Image</td><td><img src="upload/<?php echo $row['img']; ?>" style="width:200px; height:200px">
                            <input type="file" name="photo">
                            </td></tr>
                            <!-- <tr><td>Image</td><td><img src="upload/<?php echo $row['img']; ?>" style="width:200px; height:200px">
                            <input type="file" name="photo">
                            </td></tr> -->
                            <tr><td>Description</td><td>
                            <textarea name="description" class="form-control"><?php echo $row['description'] ?></textarea>
                            </td></tr>
                            
                            <tr><td colspan="2" align="center"><input type="submit" name="update" value="UPDATE NOW" class="btn btn-sm btn-success"></td>
                            </tr>
                            </table>
                            </form>
                            <?php
}
							?>
                             <script>
            CKEDITOR.replace( 'des' );
        </script>
                            <?php
							if(isset($_POST['update']))
							{
								
								$name=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];

$temp=$_FILES['photo']['tmp_name'];
	if($name)
		{
					$upload_dir = 'upload/';
					$imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION)); // get image extension
					$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
					$userpic = rand(1000,1000000).".".$imgExt;
					unlink($upload_dir.$row['img']);
					move_uploaded_file($temp,$upload_dir.$userpic);
		}
		else
		{

					$userpic=$row['img'];			
		}
		$sql="update addcamp set camp_title='".$_POST['camp_title']."',organized_by='".$_POST['organized_by']."',frm_date='".$_POST['frm_date']."',to_date='".$_POST['to_date']."',state='".$_POST['state']."',district='".$_POST['district']."',city='".$_POST['city']."',img=
		'".$userpic."',description='".$_POST['description']."' where id=".$_GET['id'];
		echo $sql."<br>";
		$res2=mysqli_query($con,$sql);
		if($res2)
		{
			echo "<script>";
			echo "alert('Camp Info Updated Sucessfully');";
			echo "window.location.href='addcamp.php';";
			echo "</script>";
		}
		else
		{
			echo "<script>";
			echo "alert('Record Not Updated  ');";
			echo "window.location.href='addcamp.php';";
			echo "</script>";
			die(mysqli_error($con));
		}

	}
							?>
                            </div>
                        </div>
                        </div>
                      </div>
                      </div>
                            
           
                
                
               <?php /*?>  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                           <?php
							$query1="select * from bloodgroup";
							$res1=mysqli_query($con,$query1);
							if(mysqli_num_rows($res1)>=0)
							{
								?>
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
								while($row=mysqli_fetch_array($res1))
								{
								?>	
								  
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['bloodgroupname']; ?></td>
                                            <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a></td>
                                        </tr>
                                        <?php
                                }
							}
							?>
                             
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div><?php */?>
               <?php /*?> <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Striped Rows Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
                <div class="col-md-6">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bordered Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hover Rows
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Context Classes
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr class="info">
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@jsmith</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  --><?php */?>
        </div>
               <footer><p>All right reserved.</p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
