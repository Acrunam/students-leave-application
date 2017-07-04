<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="form_styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>View Leave Applications Page</title>

</head>

<div>

<body>

	<h2 class="page-header">VIEW STUDENT LEAVE APPLICATIONS</h2>

<?php

require "connectDB.php";

$strQuery = "SELECT * from leave_applications WHERE status = 'Pending' ";

$result = mysqli_query($connection, $strQuery) or Exit("Query execution failed");

if($result->num_rows>0){
	
	echo "<form method='get' target='_self' name='leave_check' class='pure-form pure-form-aligned'>";
	
	    // output data of each row
	
	echo "<table class='pure-table pure-table-bordered'>
    <thead>
		<tr>
            <th>Application ID</th>
            <th>Student ID</th>
            <th>Email</th>
            <th>Days Requested</th>
			<th>Status</th>
			<th colspan='2'>ACTION TO TAKE</th>
        </tr>
    </thead>";
	
	while($row = $result->fetch_assoc()){
			
		echo 
		"<tr>
		<td>".$row["application_id"]."</td>
		<td>".$row["student_id"]."</td>
		<td>".$row["email"]."</td>
		<td>".$row["days_requested"]."</td>
		<td>".$row["status"]."</td>
		<td><a class='button-success pure-button' href='leave_request_acceptor.php?id=".$row["application_id"]."'>Approve</a></td>
		<td><a class='button-error pure-button' href='leave_request_rejector.php?id=".$row["application_id"]."'>Reject</a></td>
		</tr>";	
	}
	
	echo "</table>";
}

else {
		
    print 
	"<div class='alert alert-danger fade in alert-dismissable'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<strong>Oops!</strong> No leave applications submitted.
	</div>";
	}
	
?>

</div>

</body>
</html>