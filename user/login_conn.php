<?php
	session_start();

	$conn=mysqli_connect("localhost", "root", "akhil@123@12", "car_rent");

	if(!$conn){
		die("Error: Failed to connect to database!");
	}

		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `email`='$email' && `password`='$password'");
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);

		if($count > 0){
			$_SESSION['userid']=$fetch['userid'];
			$_SESSION['username']=$row['username'];
           header('Location:../user/user_home.php');
          
			//$_SESSION['users_id']=$row['users_id'];
		}

		else{
			$_SESSION['tmp']="Invalid username or password!";
			header('Location: login.php');
		  }
?>