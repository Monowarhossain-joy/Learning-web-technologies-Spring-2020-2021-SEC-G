<?php
	
	if(isset($_POST['Submit']))
	{
		
		$extension  = strtolower(pathinfo($_POST['changepic'], PATHINFO_EXTENSION));
        
		if ( $extension =='jpg' || $extension =='jpeg'  || $extension =='png' )
	    {
			
		}
        else {
            echo " The picture format is invalid !!";
        }
	   
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>Change Profile picture</b></legend>
				
					<input type="file" name="changepic"/> 
					<br> <br>
			        <input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>