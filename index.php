<?php
session_start();
	require "db/conn.php";
		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT username,password from users where username='$username' and password=md5('$password')";

		$res=$conn->query($sql);
		$result=$res->num_rows;

	if($result>0){
		$res1=$conn->query($sql);
		$resul=$res1->fetch_assoc();
		$_SESSION['username']=$_POST['username'];
		header("location: login.php");
	}else{
		echo "Wrong username or password";
	}
	}

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">

</head>
<body>

<div class="modal-dialog text-center">
	<div class="col-sm-9 main-section">
		<div class="modal-content">
			<div class="col-12 logo-img">
				<img src="img/log.png">
			</div>
			<div class="col-12 user-img">
				<img src="img/face1.png">
			</div>

			<div class="col-12 form-input" >
				<form method="POST">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required>
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<button type="submit" name="login" class="btn btn-secondary">LOGIN</button>
				</form>
			</div>
			<div class="col-12 forgot">
				<a href="#">Forgot Password?</a>
			</div>		 
		</div>
	</div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</body>
</html>