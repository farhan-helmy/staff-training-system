<?php
 include "training.php";
 if(isSet($_POST['addTrainingButton'])) // add new staff
	{
	$success = addNewTraining();
	echo 'adding success';
	header('Location:trainingList.php');
	}
 else if (isSet($_POST['deleteTrainingButton']))
	{
	 
	$success = deleteTraining();
		if($success){
			echo'<script>alert("Record has been deleted")</script>';
		}else{
			echo'<script>alert("Delete error")</script>';
		}
	header('Location:trainingList.php'); 	
	
	}else if (isSet($_POST['saveTrainingButton'])){
		
		updateTrainingInformation();
		header('Refresh: 1; url= trainingList.php');
	}
		
		
?>