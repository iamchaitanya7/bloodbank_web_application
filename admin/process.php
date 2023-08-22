<?php
if(isset($_POST["c"])){
    
	 $str = $_POST['c'];
				
     include("config.php");


	  ?>
      
	  <?php	
	 
	  $sql='select DISTINCT city_name from addcity where state="'.$str.'"';
	   $select=mysqli_query($con,$sql);
	   ?>
       <option value="">------Select City------</option>
       <?php
	 while($sele=mysqli_fetch_array($select))
		{
			echo"<option value=\"{$sele['city_name']}\">{$sele['city_name']}</option>";
		}	 
		
}


?>
