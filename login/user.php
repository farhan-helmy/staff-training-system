<?php
//user.php
//=================== validatePassword
function validatePassword($username,$password){
	
	$con=mysqli_connect('localhost','g03sec38','g03sec38','g03s38stsdb');
	if(!$con){
		
		echo  mysqli_connect_error(); 
		exit;
	}
	
	$sql= "SELECT * FROM users where UserId = '".$username ."' and Password ='".$password."'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	
	if($count == 1){
		return true;//username and password is valid
		
	}else{
		
		return false; //invalid password
	}
	
}

//=================== getUserType
function getUserType($username){
	
	$con=mysqli_connect('localhost','g03sec38','g03sec38','g03s38stsdb');
	if(!$con){
		
		echo  mysqli_connect_error(); 
		exit;
	}
	
	$sql= "SELECT * FROM users where UserId = '".$username ."'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	
	if($count == 1){
		$row = mysqli_fetch_assoc($result);
		$userType=$row['userType'];
		return $userType;
	}
	
}

function addNewUser(){
$userId = $_POST['staffId'];
$password = $_POST['password'];
$userType = $_POST['position'];
  
 
$con = mysqli_connect('localhost','g03sec38','g03sec38','g03s38stsdb');
 
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
else
	{
	echo 'connect to mySQL';
	}
	
$sql = "insert into users (userId,password,userType) 
values ('$userId','$password','$userType')";

echo $sql;
$qry = mysqli_query($con,$sql);
  
 if (!$qry)
	{
	echo 'Error adding Record';
	return false;
	}
else
	{
	return true;
	}
}	
?>