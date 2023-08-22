<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="col-md-3"></div>
<div class="col-md-6">

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
<script src="ajax.js"></script>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Bank Registration</div>
  <div class="panel-body">
    <p></p>
  </div>

  <!-- Table -->
  <form method="post">
  <table class="table">
  
    <tr><td>Type</td><td><select name="type" class="form-control">
    <option>--------Select Type------</option>
    <option value="Goverment">Goverment</option>
    <option value="Independent">Independent</option>
    </select></td></tr>
    <tr><td>Bank Name</td><td><input type="text" name="bankname"  class="form-control"/></td></tr>
    <tr><td>Contact Person</td><td><input type="text" name="contact_person"  class="form-control"/></td></tr>
    <tr><td>Contact No</td><td><input type="text" name="contactno"  class="form-control"/></td></tr>
    <tr><td>Email</td><td><input type="text" name="email"  class="form-control"/></td></tr>
    <tr><td>Address</td><td><textarea name="address"  class="form-control"></textarea></td></tr>
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
            <tr><td>License No</td><td><input type="text" name="license" class="form-control" /></td></tr>
              
         <tr>
                <td colspan="2" align="center">
                    <input name="btn_register" type="submit" class="btn btn-lg btn-success" value="ADD" />
                </td>
            </tr>
  </table>
  </form>
  <?php
  if(isset($_POST['btn_register']))
  {
  		$query="insert into blood_bank(type,bankname,contact_person,contactno,email,address,state,taluka,license) values('".$_POST['type']."','".$_POST['bankname']."','".$_POST['contact_person']."','".$_POST['contactno']."','".$_POST['email']."','".$_POST['address']."','".$_POST['state']."','".$_POST['city']."','".$_POST['license']."')";
  		$res=mysqli_query($con,$query) or die(mysqli_error($con));
  			if($res)
  			{
	 			 echo "<script>";
	 			 echo "alert('Register Successfully');";
	 			 echo"window.location.href='index.php';";
	 			 echo "</script>";
 			}
			else
			{
				 echo "<script>";
	 			 echo "alert('Register Failed');";
	 			// echo"window.location.href='index.php';";
	 			 echo "</script>";
			}
  }
  ?>
</div>
</div>



<div class="col-md-3"></div>
</body>
</html>