<?php
//session_start();
include "attend.php";
if(isSet($_POST['bookCarButton_x']))//customer selected a car
	{
	$success=addNewBookingRecord();
	if($success)
		{
			 echo '<script>
				alert("Your booking has been updated.")
				window.location = "../attend/attendList.php";
			</script>';
/* 			

  }
else
		{
		echo '<script>
				alert("There is an error in processing your booking. Kindly contact our customer service.");
				window.location = "../customerMenu.php";
			</script>';	
		}
	}
?>