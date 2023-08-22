<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($_POST['request'])
{
$request=$_POST['request'];
echo $request;
$con=mysqli_connect("localhost","root","","online_bloodbank");
$query="select * from donor_registration where blood_group='$request'";
$result=mysqli_query($con,$query) or(mysqli_error($con));
?>
<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th> 
<th>City</th>
</tr>
<?php
while($row=mysqli_fetch_array($result))
{
?>
<tr><td><?php echo $row['name']; ?></td>
</tr>
<?php
}
?>
</table>
<?php

}
?>

</body>
</html>
