 <?php
  include("config.php");
			   $query="select * from bloodgroup";
			   $res=mysqli_query($con,$query);
			   ?>
               <select name="bloodgropname">
            <option>-----Select Blood Grop-----</option>
               <?php
			   while($row=mysqli_fetch_array($res))
			   {
				   extract($row);
				 ?>
                 <option value="<?php echo $bloodgroupname ?>"><?php echo $bloodgroupname ?></option>
                 <?php
			   }
			   ?>
</select>
               

<tr><td>Blood Group</td><td>

<select name="bloodgropname">
<option>-----Select Blood Grop-----</option>
 <?php
include("config.php");
$query="select * from bloodgroup";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
extract($row);
echo"<option value=\"{$row['bloodgroupname']}\">{$row['bloodgroupname']}</option>";
//echo "<option value=$bloodgroupname> $bloodgroupname </option>";
}
?>
</select></td>
</tr>