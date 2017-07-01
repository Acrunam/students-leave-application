<?php

require "connectDB.php";

include "leave_check.php";

	$approved = "Approved";
	
	$id = $_GET['id'];
			
		$strQuery2 = "UPDATE leave_applications SET status = '$approved' WHERE application_id = '$id' ";
		
		$result2 = mysqli_query($connection,$strQuery2) or Exit ("Query execution failed");
		
		mysqli_close($connection);
		
		header("Location: leave_check.php"); /* Redirect browser */
		
		exit();
		
?>