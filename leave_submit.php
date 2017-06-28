<?php

session_start();

require "connectDB.php";

require "leave_form.php";

if(isset($_POST["leave"])){
	
	$studid = $_SESSION["admission"];
	$studemail = $_SESSION["email"];
	$dayReq = $_POST["day"];
	
	$strQuery = "INSERT into leave_applications (student_id,email,days_requested) VALUES('$studid','$studemail','$dayReq')";

	
	$result = mysqli_query($connection, $strQuery) or exit("Error in execution");
	
		if ($result){
		
		print "<div class='alert alert-success' id='success-alert'>
		<strong>Request submitted!</strong> Kindly await lecturer's feedback on email.
		</div>";
    
	}
	
	mysqli_close($connection);
}
	
$leaveObj = new leave_form();

print $leaveObj->apply_for_leave();

?>