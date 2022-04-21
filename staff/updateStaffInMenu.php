<?php

	//updateStaffForm.php
include "staff.php";



$staffId = $_SESSION['username'];
$staffQry = getStaffInformation($staffId);
$staffRecord = mysqli_fetch_assoc($staffQry);

echo '<div>';
	echo '<form action ="processStaff.php" method ="POST">';
		echo'<fieldset>';
			echo 'Staff ID: <input type="text" name="staffID" value="'.$_POST['staffIdToUpdate'].'">';
			echo '<br>First Name: <input type="text" name="firstName" value="'.$staffRecord['firstName'].'">';
			echo '<br>Last Name: <input type="text" name="lastName" value="'.$staffRecord['lastName'].'">';
			echo '<br>IC Number: <input type="text" name="icNumber" value="'.$staffRecord['icNumber'].'">';
			echo '<br>Date Of Birth: <input type="date" name="dateOfBirth" value="'.$staffRecord['dateOfBirth'].'">';
			echo '<br>Contact Number: <input type="text" name="contactNumber" value="'.$staffRecord['contactNumber'].'">';
			echo '<br>email: <input type="text" name="email" value="'.$staffRecord['email'].'">';
			echo '<br>Date Of Employment: <input type="date" name="dateOfEmployment" value="'.$staffRecord['dateOfEmployment'].'">';
			echo '<br>Position: <input type="text" name="position" value="'.$staffRecord['position'].'">';
			echo '<br><br><input type="submit" name="saveStaffButton" value ="Save">';
			
		echo '</fieldset>';
	echo '</form>';
echo '</div>';



?>
