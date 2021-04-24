<?php 
    session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
    $name=$_SESSION['nam'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
	<h1>Welcome <?php echo $name ?>!</h1>
	<a href="profile.html">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
    <a href="change_password.html">View User</a>
	<br/>
	<a href="../controller/logout.php">Logout</a>
</center>
</body>
</html>