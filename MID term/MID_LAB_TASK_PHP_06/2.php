<?php

	if(isset($_POST['Submit']))
	{

		
		$cur_pass	=  $_POST['current_pass'];
		$new_pass  =  $_POST['new_pass'];

		if($cur_pass == $new_pass)
		{
			echo "The new pass is the same as current pass";
		}else{
			echo "The pass didn't match Re-typing mistake";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Password Change</legend>
			Current Password :	<input type="password" name="password" value=""> <br>                    
			  New Password : 	<input type="password" name="cur_pass" value=""> <br>
			 Re-typing password :<input type="password" name="new_pass" value=""> <br>
								<input type="submit" name="submit" value="Submit"> <br>
						    	
		</fieldset>
	</form>
</body>
</html>