<?php

	if(isset($_POST['submit']))
	{

		$new_name 		=  $_POST['username'];
		$new_pass	    =  $_POST['password'];

		if($new_name == "" || $new_password == "")
		{
			echo "The filed is empty";
		}
		
		else if (!preg_match('/^[a-zA-Z0-9_]+/', $new_name) || strlen( $new_name) < 2)
		{
			echo "Invalid User Name \n";
		}
		else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', ||  strlen($new_password) < 8) 
		{
			echo "\n Invalid password";
		}
		else
		{
			echo " login successful !";

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Login</legend>
			User Name: 		<input type="text" name="username" value=""> <br>
			Password: 	    <input type="password" name="password" value=""> <br>
			                <input type="checkbox" name="item[]" > Remember Me <br>
						    <input type="submit" name="submit" value="Submit">
						    <a href=""> Forgot Password ?</a>
		</fieldset>
	</form>
</body>
</html>