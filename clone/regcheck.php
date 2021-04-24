<?php

    //session_start(); 

    if(isset($_POST['submit'])){
		$name = $_POST['name'];
        $email = $_POST['email'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
		$password = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
	

        if(empty($userName) || empty($email) || empty($password)|| empty($gender)){
            echo "Can't accept null";
        }else
		{
			
			
			if($password == $ confirmPassword)
			{
				echo "succes.......";

               /* setcookie('name', $name, time()+3600, '/'); 
               setcookie('email', $email, time()+3600, '/');
               setcookie('userName', $userName, time()+3600, '/');
               setcookie('password', $password, time()+3600, '/');
               setcookie('type', $type, time()+3600, '/'); */
            }
		else
		{
			echo "password $ confirm password mismatch";
		}

        
       }
	}




?>