<html>
<head>
<title>Insert</title>
<script>
        function web()
        {
        window.location="home.php";
        }
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    body
    {
        background-color: lightgrey;
    }
    #form1
    {
        position: absolute;
        top: 200px;
        left:540px;
    }
    h1
    {
        position: absolute;
        top: 100px; 
        LEFT:600px;
    }

</style>
<?php 
    require 'connect.php';
    if(isset($_POST["submit"]) and $_SERVER["REQUEST_METHOD"] == "POST")
    {
        unset($_POST["submit"]);
        $name=$_POST["name"];
        $email=$_POST["email"];
        $pn=$_POST["phone"];
        $sql="Insert into details(name,phone,email) values('$name','$pn','$email')";
        $conn->query($sql);
        echo "<script> alert('Entered Successfully!');</script>";
        //header("Location:webpage.php");
    }

?>
<body>
    <h1><b>INSERT DETAILS</b></h1><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="form1">
    <input type="text" style="width:450px;" class="form-control" placeholder="Name" name="name" required><br><br>
    <input type="text" style="width:450px;"class="form-control" placeholder="Phone number" name="phone" required><br><br>
    <input type="email" style="width:450px;"class="form-control" placeholder="Email" name="email" required><br><br>  
    <input type="submit" style="width:450px;" name="submit" class="btn btn-success btn-lg" value="Add"><br>
    </form>
    <input type="button" style="position:absolute; top:0px; left:0px;" name="submit" class="btn btn-danger btn-lg" value="Home" onclick="web()">
</body>
</html>