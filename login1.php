<?php
$name=$_POST['name'];
$pass=$_POST['password'];
//database connection
$servername="localhost";
$username="root";
$password="";
$database="login";
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `login` (`name`, `password`) VALUES ('$name', '$pass')";
$result=mysqli_query($conn,$sql);
?>