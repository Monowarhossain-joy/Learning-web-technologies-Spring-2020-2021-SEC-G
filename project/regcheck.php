<?php

    session_start(); 

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $userName = $_POST['userName'];
        $password = ( $_POST['password']);
		$gender = ( $_POST['gender']);
		$dateofbirth = ( $_POST['dob']);
		
		$type == ( $_POST['user']);
		
 
        


        if($name == "" || $userName == "" || $email == "" || $password == "" || $gender == "" || $dob == ""  )
		{
            echo "Can't accept null";
        }
		else{

            setcookie('name', $name, time()+3600, '/'); 
            setcookie('email', $email, time()+3600, '/');
            setcookie('userName', $userName, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');
			setcookie('password', $gender, time()+3600, '/');
			setcookie('password', $dob, time()+3600, '/');
            setcookie('type', $type, time()+3600, '/');

            
            if($type == 'user')
            {
                $file = fopen('user.txt', 'a');
                $user = $userName."|".$password."|".$email."|".$type."|".$dob."|".$gender."|".$name."|"."\n";
                fwrite($file, $user);
                fclose($file);

            }

            echo "Registration Done..!";
            //header('location:login.html');
        }
    }

    else{
        echo "invalid request";
        //header('location:login.html'); 

    }


?>