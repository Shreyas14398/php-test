<html>
<?php include'connect.php'; ?>
<head>
<title>Delete Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <style>
    body
    {
       background: lightblue; 
    }
</style> 
<body>  
  <br>
  <form method="post" action="delete.php">
<center>
<h2>Delete Page : Enter the email to delete from Database</h2><br>
<br>
	<input type="email" name="delete_option" placeholder="Enter email" class="form-control" style="width: 30%;">
  <br>
<button type="submit" name="delete_button" class="btn btn-danger">Delete</button>
</center>
<?php
$flag=0;
 if(isset($_POST['delete']))
 {

 	$var=$_POST['deleteopt'];
 	$qry="DELETE FROM details WHERE email='$var'";
 	$db->query($qry);
 }
?>
</form>
</body>
</html>