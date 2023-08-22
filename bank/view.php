<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-1.12.3.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#mytable").DataTable();
});
</script>

<!--<script type="text/javascript">
$(document).ready(function()
{
$("#mytable").DataTable({
           responsive: true,
           bPaginate: true,
 
     });
});
</script>
-->
</head>

<body>
<?php
$q='select * from blood_bank';
$r=mysqli_query($con,$q) or die(mysqli_error($con));
?>
<table id="mytable" class="display"> 
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>City</th>
<th>Address</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>City</th>
<th>Address</th>
</tr>
</tfoot>
<tbody>
<?php
while($row=mysqli_fetch_array($r))
{
?>
<tr>
<td><?php echo $row['type']; ?></td>
<td><?php echo $row['bankname']; ?></td>
<td><?php echo $row['contact_person']; ?></td>
<td><?php echo $row['contactno']; ?></td>
<td><?php echo $row['address']; ?></td>

</tr>
<?php
}
?></tbody>
</table>
</body>
</html>
