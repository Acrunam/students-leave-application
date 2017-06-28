<?php

require "connectDB.php";

include "leave_check.php";

	$approved = "Approved";
	
	$rejected = "Rejected";
				
		if(isset($_POST["approve"])){
			
		$strQuery2 = "UPDATE leave_applications SET status = '$approved' WHERE application_id = '$leaveid' ";
		
		$result2 = mysqli_query($connection,$strQuery2) or Exit ("Query execution failed");
		
		mysqli_close($connection);
		
		header("Location: leave_check.php"); /* Redirect browser */
		
		exit();
		
			}
		
		else if (isset($_POST["reject"])){
			
		$strQuery3 = "UPDATE leave_applications SET status = '$rejected' WHERE application_id = '$leaveid' ";
		
		$result3 = mysqli_query($connection,$strQuery3) or Exit ("Query execution failed");
		
		mysqli_close($connection);
		
		header("Location: leave_check.php"); /* Redirect browser */
		
		exit();
			
		}

?>