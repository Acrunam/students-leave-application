<?php

class leave_form{
	
	public function apply_for_leave(){

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Students Day Off Application Form</title>
</head>

<body>

<h3>STUDENTS DAY OFF APPLICATION FORM</h3>

<form action="leave_submit.php" method="post" name="user_register" target="_self" class="pure-form pure-form-aligned">

	<fieldset>
  
	<div class="pure-control-group">
	
	<div class="pure-control-group">
    <h4>DAY(S) APPLIED FOR:</h4>
	<br><input value = "Monday" type="radio" name = "day">Monday<br>
	<br>
	<input value = "Tuesday" type="radio" name = "day">Tuesday<br>
	<br>
	<input value = "Wednesday" type="radio" name = "day">Wednesday<br>
	<br>
	<input value = "Thursday" type="radio" name = "day">Thursday<br>
	<br>
	<input value = "Friday" type="radio" name = "day">Friday<br>
	<br>
	<input value = "Saturday" type="radio" name = "day">Saturday<br>
	<br>
	<input value = "Sunday" type="radio" name = "day">Sunday
	</div>
	
	<div class="pure-controls pure-button pure-button-primary">
	<input name="reset" type="reset" value="CLEAR" class="pure-button pure-button-primary"/>
	</div>
	
	<div class="pure-controls pure-button pure-button-primary">
	<button name="leave" type="submit" class="pure-button pure-button-primary">SUBMIT</button>
	</div>
	
	</fieldset>
	
</form>

<script>

$("#success-alert").fadeTo(7000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});

</script>

</body>
</html>

<?php
	}
}
?>