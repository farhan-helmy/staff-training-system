<?php
	
function addNewstaff(){
$staffId = $_POST['staffId'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$icNumber = $_POST['icNumber'];
$dateOfBirth = $_POST['dateOfBirth'];  
$contactNumber = $_POST['contactNumber']; 
$email = $_POST['email'];
$dateOfEmployment = $_POST['dateOfEmployment']; 
$position = $_POST['position']; 
  
 
$con = mysqli_connect('localhost','g03sec38','g03sec38','g03s38stsdb');
 
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
else
	{
	echo 'connect to mySQL';
	}
	
$sql = "insert into staff (staffId,firstName,lastName,icNumber,dateOfBirth,contactNumber,email,dateOfEmployment,position) 
values ('$staffId','$firstName','$lastName','$icNumber','$dateOfBirth','$contactNumber','$email','$dateOfEmployment','$position')";

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

function getListofStaff(){
$con = mysqli_connect('localhost','g03sec38','g03sec38','g03s38stsdb');
 
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit;
	}
else
	{
	$sql = 'select * from staff order by staffId';
	$qry = mysqli_query($con,$sql);
	return $qry;
	}
}

function deletestaff(){
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL: " .mysqli_connect_error();
	exit;
	
	}else{	
	echo '<br><br>Connected to mysql<br>';
	}
$staffToDelete = $_POST['staffToDelete'];
	$sql = "delete from staff where staffId ='".$staffToDelete ."'";
	
	echo $sql;
	$qry =mysqli_query($con,$sql);
	if($qry)
		return true;
	else
		return false;
}	
function searchByStaffId(){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	
	}
	echo 'connected<br>';
	
	$sql = "SELECT * from staff where staffId ='".$_POST['searchKey']."'"; 
	
	
	$qry = mysqli_query($con,$sql);
	return $qry;
	
}
function searchByFirstName(){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	
	}
	echo 'connected<br>';
	
	$sql = "SELECT * from staff where firstName ='".$_POST['searchKey']."'"; 
	
	
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
	
}
function searchByLastName(){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	
	}
	echo 'connected<br>';
	
	$sql = "SELECT * from staff where lastName ='".$_POST['searchKey']."'"; 
	
	
	$qry = mysqli_query($con,$sql);
	return $qry;
}
function getStaffInformation($staffId){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	
	}
	echo 'connected';
	
	$sql = "SELECT * from staff where staffId ='".$staffId."'"; 
	
	
	$qry = mysqli_query($con,$sql);
	return $qry;
	
}
function updateStaffInformation(){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	}
	
	$staffId = $_POST['staffID'];
	$firstName =$_POST['firstName'];
	$lastName =$_POST['lastName'];
	$icNumber =$_POST['icNumber'];
	$dateOfBirth =$_POST['dateOfBirth'];
	$contactNumber =$_POST['contactNumber'];
	$email =$_POST['email'];
	$dateOfEmployment =$_POST['dateOfEmployment'];
	$position =$_POST['position'];
	
	$sql = 'update staff set '; 
	$sql .= 'firstName="'.$firstName.'", lastName="'.$lastName.'", icNumber ="'.$icNumber.'", dateOfBirth ="'.$dateOfBirth.'",
			contactNumber ="'.$contactNumber.'", email ="'.$email.'", dateOfEmployment ="'.$dateOfEmployment.'", position ="'.$position.'"';
	$sql .= ' where staffId ="'.$staffId.'"';
	
	
	
	echo $sql;
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
}


?>