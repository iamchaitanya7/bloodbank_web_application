<?php if(isset($_POST["district"])){
    // Capture selected country
    $district= $_POST["district"];
	$state= $_POST["state"];
     include('config.php');
	 
	 
      
	 	 $select1=mysqli_query($con,"select * from statecity where state='$state' and district='$district'") or die(mysqli_error());
	   echo '<option value="" selected="selected">--Select Taluka--</option>';
	 while($selef=mysqli_fetch_array($select1))
{
	echo"<option value=\"{$selef['taluka']}\">{$selef['taluka']}</option>";


	}	 
		
}
?>