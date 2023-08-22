<?php
include("config.php");

if(isset($_GET['id']))
{ 
$query='delete from state where id="'.$_GET['id'].'"';
$res=mysqli_query($con,$query);
if($res)
{
	echo "<script>";
	echo "alert('Record Delete Successfully');";
	echo "window.location.href='addstate.php';";
	echo "</script>";
}
}
?>
