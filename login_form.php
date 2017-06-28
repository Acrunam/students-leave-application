<?php

class login_form{
	
	public function login_Display(){

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
<title>Login Form</title>
</head>

<body>

<h3>LOGIN FORM</h3>

<form action="login.php" method="post" name="user_register" target="_self" class="pure-form pure-form-aligned">

	<fieldset>
  
	<div class="pure-control-group">
    <label>Student/Lecturer No.:</label>
    <input name="adm_no" type="number" size="50" maxlength="50" required/>
	</div>
  
	<div class="pure-control-group">
	<label>Password:</label>
    <input name="pwd1" type="password" size="50" maxlength="50" required/>
	</div>
	
	<div class="pure-controls pure-button pure-button-primary">
	<input name="reset" type="reset" value="CLEAR" class="pure-button pure-button-primary"/>
	</div>
	
	<div class="pure-controls pure-button pure-button-primary">
	<input name="login" type="submit" value="LOGIN" class="pure-button pure-button-primary"/>
	</div>
	
	</fieldset>
	
</form>

	<div class="pure-control-group">
	<a href="index.php" class="pure-button">NOT YET registered? Register here</a>
	</div>

	<script>

	$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
	});

	</script>
	
</body>
</html>

<?php
}
}
?>