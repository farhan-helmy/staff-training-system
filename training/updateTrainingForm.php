<?php

	//updateStaffForm.php
include "training.php";

$trainingId = $_POST['trainingIdToUpdate'];
$trainingQry = getTrainingInformation($trainingId);
$trainingRecord = mysqli_fetch_assoc($trainingQry);

echo '<div>';
	echo '<form action ="processTraining.php" method ="POST">';
		echo'<fieldset>';
			echo 'Training ID: <input type="text" name="trainingId" value="'.$_POST['trainingIdToUpdate'].'">';
			echo '<br>Training Name: <input type="text" name="trainingName" value="'.$trainingRecord['trainingName'].'">';
			echo '<br>Training Start Date: <input type="date" name="trainingStartDate" value="'.$trainingRecord['trainingStartDate'].'">';
			echo '<br>Training End Date: <input type="date" name="trainingEndDate" value="'.$trainingRecord['trainingEndDate'].'">';
			echo '<br>Trainer Name: <input type="text" name="trainerName" value="'.$trainingRecord['trainerName'].'">';
			echo '<br><br><input type="submit" name="saveTrainingButton" value ="Save">';
			
		echo '</fieldset>';
	echo '</form>';
echo '</div>';



?>
