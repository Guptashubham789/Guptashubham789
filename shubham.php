<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="http://localhost:8080/shubham.php" method="POST">
	Name : <br>
	<input type="text" class="form-control" name="name"/><br>
	Password :<br>
	<input type="text" class="form-control" name="password"/><br>
	<input type="submit" />
</form>
<?php
$name=$_POST['name'];
$password=$_POST['password'];
//database connection
$servername="localhost";
$username="root";
$password="";
$database="login";

$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `login` (`name`, `password`) VALUES ('$name', '$password')";
$result=mysqli_query($conn,$sql);
?>
</body>
</html>