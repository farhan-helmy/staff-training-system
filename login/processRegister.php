<?php

	include "..\staff\staff.php";
	include "user.php";

	if(isSet($_POST['registerButton'])){
		
		addNewStaff();
		addNewUser();
		
		echo "<script>";
		echo " alert('Staff record has been added. Your username is your Staff Id.');
			   </script>";
		header("refresh:1; url=../index.php");
	
	}else if(isSet($_POST['saveNewCustomerButton'])){
		
		getCustomerInformation();
		getUserInformation();
		
		echo "<script>";
		echo " alert('Customer record has been added.');
			   </script>";
		header("refresh:1; url=customerList.php");
	
	}
 	
?>