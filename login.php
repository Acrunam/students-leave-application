<?php

include "login_form.php";

require "connectDB.php";

if(isset($_POST["login"])){
	
	$admno = $_POST["adm_no"];
	$entered_password = $_POST["pwd1"];
	
	$strQuery = "SELECT user_category,password,email FROM users WHERE adm_no = '$admno' LIMIT 1";
	
	$result = mysqli_query($connection,$strQuery) or exit("Error in Query Execution attempt");
	
	if($result-> num_rows >0){
		
		$row = $result->fetch_assoc();
		
		$savedPassword = $row["password"];
		
		$userCat = $row["user_category"];
		
		$email = $row["email"];
	
	if (password_verify($entered_password, $savedPassword)) {
		
		// Start the session
		session_start();
		$_SESSION["admission"] = $admno;
		$_SESSION["password"] = $entered_password;
		$_SESSION["email"] = $email;
			
		if($userCat=="student"){
			
		print "<div class='alert alert-success' id='success-alert'>
		<strong>Success!</strong> User logged in successfully.
		</div>";
		
		header("Location: leave_submit.php"); /* Redirect browser */
		
		}
		
		else if($userCat=="lecturer"){
			
		print "<div class='alert alert-success' id='success-alert'>
		<strong>Success!</strong> User logged in successfully.
		</div>";
		
		header("Location: leave_check.php"); /* Redirect browser */
		
		}
		
		exit();
	
	} 
		else {
		
			print "<div class='alert alert-danger fade in alert-dismissable'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Oops!</strong> Invalid username/password.
		</div>";
	}
				
	}
		else{
		
		    print "<div class='alert alert-danger fade in alert-dismissable'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Oops!</strong> Invalid username/password.
		</div>";
	
	}
		
}

$loginObj = new login_form();

print $loginObj->login_Display();

?>