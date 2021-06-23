<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=hash('ripemd160',$_POST['password']);
			//$password=$_POST['password'];
			
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$conn = new mysqli("10.10.20.20:10002", "sangfor", "@Sangfor123", "book_store");
			
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($conn,$username);
			$password = mysqli_real_escape_string($conn,$password);
			
			
			// SQL query to fetch information of registerd users and finds user match.
			$ses_sql=$conn->query("select * from userLogin where password='$password' AND username='$username'");
			$rows=$ses_sql->fetch_assoc();
			$rows = mysqli_num_rows($ses_sql);
			
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: profile.php"); // Redirecting To Other Page
			} 
			
			else {
				$error = "Username or Password is invalid";
			}
			$conn->close();			
		}
	}
?>