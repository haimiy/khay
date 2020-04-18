<?php 
require "db/conn.php";

 $username = mysqli_real_escape_string($conn,$_POST['username']);
 $password = mysqli_real_escape_string($conn,$_POST['password']);
 $password = md5($password);

 if(isset($_POST['login'])){

$sql = "insert into users(username,password) values('$username','$password')";
if(mysqli_query($conn,$sql)){
	echo "pass";
}
}

?>