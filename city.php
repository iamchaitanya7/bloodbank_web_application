 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
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
                        <form method="post" enctype="multipart/form-data" id="registrationForm" action="result.php">
                        <table class=" table table-bordered table-responsive" style="color:#000">
                        <tr><td>Blood Group</td><td><select name="blood_group" class="form-control" id="fetchval">
                        <option>-------Select Bloodgroup-------</option>
						<?php
						$q="select * from bloodgroup";
						$r=mysqli_query($con,$q);
						while($row=mysqli_fetch_array($r))
						{
							?>
                            <option value="<?php echo $row['bloodgroupname'] ?>"><?php echo $row['bloodgroupname'] ?></option>
                            <?php
						}
						?></select>
                        </td></tr>
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
                        
                        <tr><td colspan="2" align="center"><input type="submit" name="save" value="Search" class="btn btn-success"> &nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Clear" class="btn btn-danger"></td></tr>
                        </table>
                        </form>
                        </div>
					</div>