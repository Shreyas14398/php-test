<?php include'connect.php'; 
?>
<title>Display Page</title>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	tr:nth-child(odd) {
    background-color: #5e90e0;
}
</style>
</head>
<br>
<center>
<table class="table table-hover">
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Mail</th>
	</tr>
	<?php
	$selectvar="SELECT * FROM details";
	$temp=$db->query($selectvar);
	while ($row = $temp->fetch_assoc()) 
	{
	?>
	<tr>
		<td><?php echo $row["sno"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
	</tr>
	<?php
	}
	?>
	
	
</table>
<form method="post" action="select.php">
<input id="showTableBtn" class="form-control" style="width: 30%" type="text" name="fieldname" placeholder="Enter name to display data"><br>
<button  class="btn btn-primary" type="submit" name="enter">Get details!</button>


<table id="dataTable" class="table table-hover">
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Phone</th>
		<th>E-Mail</th>
	</tr>
	<?php
	$a= $_POST['fieldname'];
	 $dispvar="SELECT * FROM details WHERE name='$a'";
	$tempo=$db->query($dispvar);
	while ($row = $tempo->fetch_assoc()) 
	{
	?>
	<tr>
		<td><?php echo $row["sno"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
	</tr>
	<?php
	}
	?>
</table>
</form>
</center>