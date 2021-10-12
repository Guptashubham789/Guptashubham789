<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>test</title>
	<style>
		.box
		{
			height: 500px;
			width: 450px;
			background:#e0e0e0;
			border-radius: 5px;
			border: 2px solid black;
			box-sizing: border-box;
			margin: 0px auto;
		}
	</style>
</head>
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	//database connection

	$conn = new  mysqli('localhost','root','','test1');
	if ($conn->connect_error) {
		die('Connection Falled : '.$conn->connect_error);
	}else{
		$stmt=&conn->prepare("insert into register(firstName,lastName,gender,email,password,number)
			values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi",$firstName,$lastName,$gender,$email,$password,$number);
		$stmt->execute();
		echo "resistration successfilly....";
		$stmt->close();
		$conn->close();
	}

?>
<body>
<div class="container-fluid">
<div class="row box text-center ">
		<h1 style="min-height: 60px;background: black;text-align: center;line-height: 60px;color: white;font-size: 28px;">Registration Form</h1>
		<form action="connect.php" method="post">
			<div class="form-group">
				<label for="firstName">First Name</label>
   				 <input type="text" class="form-control" placeholder="First name" id="firstName" name="firstName" >
			</div>
			<div class="form-group">
				<label for="lastName">Last Name</label>
				<input type="text" class="form-control" placeholder="Last name" id="lastName" name="lastName" >
			</div>
			<div class="form-group">
				<label for="email">Gender</label>
				<div>
					<label for="male" class="radio-inline">
						<input type="radio" name="gender" value="m" id="male">Male
					</label>
					<label for="female" class="radio-inline">
						<input type="radio" name="gender" value="f" id="female">Female
					</label>
					<label for="others" class="radio-inline">
						<input type="radio" name="gender" value="o" id="others">Others
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
   				 <input type="text" class="form-control" placeholder="Email" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Email</label>
   				 <input type="password" class="form-control" placeholder="password" id="password" name="password">
			</div>
			<div class="form-group">
				<label for="number">Number</label>
   				 <input type="number" class="form-control" placeholder="password" id="number" name="number">
			</div>
			<input type="submit" class="btn btn-primary" name="">

		</form>
</div>		
</div>
</body>
</html>