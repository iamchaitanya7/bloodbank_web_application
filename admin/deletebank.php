<?php
include("config.php");

if(isset($_GET['id']))
{ 
$query='delete from blood_bank where id="'.$_GET['id'].'"';
$res=mysqli_query($con,$query);
if($res)
{
	echo "<script>";
	echo "alert('Record Delete Successfully');";
	echo "window.location.href='bloodbank.php';";
	echo "</script>";
}
}
?>
