<?php
 include "staff.php";
 if(isSet($_POST['addStaffButton'])) // add new staff
	{
	$success = addNewstaff();
	header('Location:staffList.php');
	}
 else if (isSet($_POST['deleteStaffButton']))
	{
	 
	$success = deleteStaff();
		if($success){
			echo'<script>alert("Record has been deleted")</script>';
		}else{
			echo'<script>alert("Delete error")</script>';
		}
	header('Location:staffList.php'); 	
	
	}else if (isSet($_POST['saveStaffButton'])){
		
		updateStaffInformation();
		
		header('Refresh: 1; url= staffList.php');
	}
		
		
?>