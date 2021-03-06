<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="style/styleStaff.css">
	<style>
	tr:hover {background-color: AliceBlue;}
	</style>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	</head>
<?php
//  staffList.php #88ebcf
	include "staff.php";
	echo '<div class="w3-container">';
	
	displaySearchPanel();  //function search
	
	 if(isSet($_POST['searchByStaffId'])){
		$listOfStaff = searchByStaffId();
		
	}else if(isSet($_POST['searchByFirstName'])){
		$listOfStaff = searchByFirstName();
	
	}else if(isSet($_POST['searchByLastName'])){
		$listOfStaff = searchByLastName();
	
	}else if(isSet($_POST['staffInfoForm'])){
		header('Location:staffInfoForm.php');
		
	}
	else {
		$listOfStaff = getListOfStaff();
	} 
	
	
	//$listOfStaff = getListOfStaff();
	
	echo 'There are '.mysqli_num_rows($listOfStaff).' record';
	
	//Display
	echo '<table class="table">';
		echo '<tr>
			  <thead class="thead-dark">
				<th>No.</th>
				<th>Staff ID</th>	
				<th>First Name</th>
				<th>Last Name</th>
				<th>IC Number</th>
				<th>Date of Birth</th>
				<th>Contact Number</th>
				<th>Email</th>
				<th>Date of Employment</th>
				<th>Position</th>
				<th>Delete</th>
				<th>Update</>
			 </tr>';
				
				
	//for each car record, display (Loop)
	$count = 1;
	while ($row = mysqli_fetch_assoc($listOfStaff))
	{
	echo '<tr>';
		 echo '<td> '.$count. '</td>';
		 echo '<td> '.strtoupper($row['staffId']). '</td>';
		 echo '<td> '.strtoupper($row['firstName']). '</td>';
		 echo '<td> '.strtoupper($row['lastName']). '</td>';
		 echo '<td> '.strtoupper($row['icNumber']). '</td>';
		 echo '<td> '.$row['dateOfBirth']. '</td>';
		 echo '<td> '.$row['contactNumber']. '</td>';
		 echo '<td> '.$row['email']. '</td>';
		 echo '<td> '.$row['dateOfEmployment']. '</td>';
		 echo '<td> '.strtoupper($row['position']). '</td>';
		 
		 //deleteOption
		 $staffId = $row['staffId'];
		 echo '<td>';
			echo '<form action="processStaff.php" method="POST">';
			echo "<input type='hidden' value='$staffId' name='staffToDelete'>";
			echo '<input class="rainbow rainbow-4" type="submit" name = "deleteStaffButton" value="Delete">';
			echo '</form>';
		 echo '</td>';
		 
		 echo'<td>'; //update form
				echo '<form action="updateStaffForm.php" method="POST">';
					echo "<input type='hidden' 
					value='$staffId' name='staffIdToUpdate'>";
					echo '<input class="rainbow rainbow-4" type ="submit" name="updateStaffButton" 
						value="Update">';
					
				echo '</form>';
			echo'</td>';
		 
		 
		 
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
				echo '<br><br><input type="submit" name="searchByStaffId" value ="By Staff ID">';
				echo '<input type="submit" name="searchByFirstName" value ="By First Name">';
				echo '<input type="submit" name="searchByLastName" value ="By Last Name">';
				echo '<input type="submit" name="displayAll" value ="Display All">';
				echo '<input type="submit" name="staffInfoForm" value ="Add More Staff">';
				echo '<a href="..\menu\adminMenu.php">                         Main Menu</a>';
				echo '<br>';
		
		echo '</form>';
		echo '</div>';
	}
?>


</html>