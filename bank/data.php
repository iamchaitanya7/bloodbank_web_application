<?php
if(isset($_POST["state"]) ){
    // Capture selected country
    $state= $_POST["state"];
     include('config.php');
	 
	  ?>
      
	  <?php	 $select=mysqli_query($con,"select DISTINCT state,district from statecity where state='$state'")or die(mysqli_error());
	  echo '<option value="" selected="selected">--Select District--</option>';
	 while($sele=mysqli_fetch_array($select))
{
	echo"<option value=\"{$sele['district']}\">{$sele['district']}</option>";


	}	 
		
}



?>
