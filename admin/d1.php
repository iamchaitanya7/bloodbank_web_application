 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
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
</script> 
 <?php
 include("config.php");
 ?>
 <tr><td>State</td><td><select name="state" class=" c form-control">
                            <option>---Select State---</option>
                            <?php
							$q="select * from state";
							$r=mysqli_query($con,$q);
							while($row=mysqli_fetch_array($r))
							{
							?>
                            <option value="<?php echo $row['state'] ?>"><?php echo $row['state'] ?></option>
                            <?php
							}
							?>
                            </select>
                            </td></tr>
                            <tr><td>City</td><td><select id="sub" name="city"  style="color:#000;" class="form-control validate[required]">
      <option value="" selected="selected" >--------Select City-----------</option>
      </select>
                            </td></tr>