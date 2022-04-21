<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php

session_start(); 
//checkLogin.php
include "user.php";
$_SESSION['username']=$_POST['username'];  
$_SESSION['password']=$_POST['password'];  
//$_SESSION['curTime']=date('G:i:sA');
$_SESSION['curTime']=date('G:i:sA',strtotime('+8 hours'));//GMT 8

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 


$isValidUser = validatePassword($username,$password);

if($isValidUser){
	
	$userType=getUserType($username);
	if($userType =='ADMIN')
		header("location:../menu/adminMenu.php"); // redirect to admin page
	else 
		header("location:../menu/Menu.php"); // redirect to staff menu page
	
	}else{
		
		echo '<div class="w3-container" style="width:80%; margin:0 auto;">';
		echo "<center><br><br>Wrong Username or Password";
		echo '<br><br span class="w3-right w3-padding w3-hide-large w3-large"><br><a href="../mainMenu.php">Try Again?</a></span>';
		echo '</div></center>';
	}
	
?>
	
