<?php
	
function addNewTraining(){
	
	echo 
$trainingId = $_POST['trainingId'];
$trainingName = $_POST['trainingName'];
$trainingStartDate = $_POST['trainingStartDate'];
$trainingEndDate = $_POST['trainingEndDate'];
$trainerName = $_POST['trainerName'];  
 
  
 
$con = mysqli_connect('localhost','g03sec38','g03sec38','g03s38stsdb');
 
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
else
	{
	echo 'connect to mySQL';
	}
	
$sql = "insert into training (trainingId,trainingName,trainingStartDate,trainingEndDate,trainerName) 
values ('$trainingId','$trainingName','$trainingStartDate','$trainingEndDate','$trainerName')";

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

function getListofTraining(){
$con = mysqli_connect('localhost','g03sec38','g03sec38','g03s38stsdb');
 
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit;
	}
else
	{
	$sql = 'select * from training order by trainingId';
	$qry = mysqli_query($con,$sql);
	return $qry;
	}
}

function deleteTraining(){
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL: " .mysqli_connect_error();
	exit;
	
	}else{	
	echo '<br><br>Connected to mysql<br>';
	}
$trainingToDelete = $_POST['trainingToDelete'];
	$sql = "delete from training where trainingId ='".$trainingToDelete ."'";
	
	echo $sql;
	$qry =mysqli_query($con,$sql);
	if($qry)
		return true;
	else
		return false;
}	
function searchByTrainingId(){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	
	}
	echo 'connected<br>';
	
	$sql = "SELECT * from training where trainingId ='".$_POST['searchKey']."'"; 
	
	
	$qry = mysqli_query($con,$sql);
	return $qry;
	
}
function searchByTrainingName(){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	
	}
	echo 'connected<br>';
	
	$sql = "SELECT * from training where trainingName ='".$_POST['searchKey']."'"; 
	
	
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
	
}
function getTrainingInformation($trainingId){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	
	}
	echo 'connected';
	
	$sql = "SELECT * from training where trainingId ='".$trainingId."'"; 
	
	
	$qry = mysqli_query($con,$sql);
	return $qry;
	
}
function updateTrainingInformation(){
	
	$con= mysqli_connect("localhost","g03sec38","g03sec38","g03s38stsdb");
	if(mysqli_connect_errno())
{
	echo"Failed to connect to mySQL " .mysqli_connect_error();
	exit;
	}
	
	$trainingId = $_POST['trainingId'];
	$trainingName =$_POST['trainingName'];
	$trainingStartDate =$_POST['trainingStartDate'];
	$trainingEndDate =$_POST['trainingEndDate'];
	$trainerName =$_POST['trainerName'];
	
	$sql = 'update training set '; 
	$sql .= 'trainingName="'.$trainingName.'", trainingStartDate="'.$trainingStartDate.'", trainingEndDate ="'.$trainingEndDate.'", trainerName ="'.$trainerName.'"';
	$sql .= ' where trainingId ="'.$trainingId.'"';
	
	echo $sql;
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
}


?>