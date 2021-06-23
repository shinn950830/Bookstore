<?php
    
    $servername="10.10.20.20:10002";
    $username="sangfor";
    $password="@Sangfor123";
    $dbname="book_store";
    
    
    // Create connection
    $conn= new mysqli($servername, $username, $password,$dbname);
	session_start();// Starting Session
	
	// Storing Session
	$user_check=$_SESSION['login_user'];
	
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=$conn->query("select username from userLogin where username='$user_check'");
	
    $row=$ses_sql->fetch_assoc();
	$login_session =$row['username'];
	
	if(!isset($login_session)){
	    $conn->close();
		//header('Location: Main.php'); // Redirecting To Home Page
	}
?>