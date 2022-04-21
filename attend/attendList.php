<!DOCTYPE html>
<html>
	<head>
	<style>
	tr:hover {background-color: AliceBlue;}
	</style>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	</head>
<?php

//session_start();
	include "../training/training.php";
	echo '<div class="w3-container">';
	
	displaySearchPanel();  //function search
	
	 if(isSet($_POST['searchByTrainingId'])){
		$listOfTraining = searchByTrainingId();
		
	}else if(isSet($_POST['searchByTrainingName'])){
		$listOfTraining = searchByTrainingName();

	/* }else if(isSet($_POST['trainingInfoForm'])){
		header('Location:trainingInfoForm.php'); */
	
	
	}else {
		$listOfTraining = getListOfTraining();
	} 
	
	
	//$listOfTraining = getListOfTraining();
	
	echo 'There are '.mysqli_num_rows($listOfTraining).' record';
	
	//Display
	echo '<table class="table">';
		echo '<tr>
			  <thead class="thead-dark">
				<th>No.</th>
				<th>Training ID</th>	
				<th>Training Course Name</th>
				<th>Training Start Date</th>
				<th>Training End Date</th>
				<th>Trainer Name</th>
				<th>Option</th>
			 </tr>';
				
				
	//for each car record, display (Loop)
	$count = 1;
	while ($row = mysqli_fetch_assoc($listOfTraining))
	{
	echo '<tr>';
		 echo '<td> '.$count. '</td>';
		 echo '<td> '.strtoupper($row['trainingId']). '</td>';
		 echo '<td> '.strtoupper($row['trainingName']). '</td>';
		 echo '<td> '.$row['trainingStartDate']. '</td>';
		 echo '<td> '.$row['trainingEndDate']. '</td>';
		 echo '<td> '.strtoupper($row['trainerName']). '</td>';
		 
		 
		
		 $trainingId = $row['trainingId'];
		 echo '<td>';
			echo '<form action="attendTrainingForm.php" method="POST">';
			echo "<input type='hidden' value='$trainingId' name='trainingToAttend'>";
			echo '<input type="submit" name = "attendTrainingButton" value="Attend">';
			echo '</form>';
		 echo '</td>';
		 
		 
		 
		 
		 
	echo '</tr>';
	$count++;
	}
	
	echo '</div>';
	echo '</table>';

?>

<?php
	function displaySearchPanel(){
		echo '<div>';
		echo '<form action="" method="POST">';
			echo '<fieldset><legend>Search Staff: </legend>';
				echo 'Search Key: ';
				echo '<input type="text" name="searchKey">';
				echo '<br><br><input type="submit" name="searchByTrainingId" value ="By Training ID">';
				echo '<input type="submit" name="searchByTrainingName" value ="By Training Course Name">';
				echo '<input type="submit" name="displayAll" value ="Display All">';
				/* echo '<input type="submit" name="trainingInfoForm" value ="trainingInfoForm">'; */
				echo '<a href="..\menu\Menu.php"> Main Menu</a>';
				echo '<br>';
		
		echo '</form>';
		echo '</div>';
	}
?>


</html>